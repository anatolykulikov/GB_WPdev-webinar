<?php

/*  Удаляем лишние элементы у анонсов  */
remove_filter( 'the_excerpt', 'wpautop' );

/* Добавляем миниатюры */
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size(9999, 9999); // размер миниатюры поста по умолчанию
}
if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'og-image', 968, 504, true); // Кадрирование изображения
}


function getFile($path) {
    echo(get_template_directory_uri() . $path);
}


add_action( 'rest_api_init', function() {
	register_rest_route( 'site', 'form', [
        'methods' => 'POST',
        'callback' => 'formHandler',
    ]);
});


class Telegram {
    protected $token = '';
    protected $chat_id = '';

    public function message(string $username, string $phone, string $email) {

        $message = '%F0%9F%94%A5 *Новая заявка* %F0%9F%94%A5%0A%0A*Посетитель:* ' . $username . '%0A*Телефон:* ' . $phone . '%0A*Email:* ' . $email;

        return $this->send($message);
    }

    private function send(string $message) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, 'https://api.telegram.org/bot'. $this->token .'/sendMessage?chat_id='. $this->chat_id .'&text='.$message.'&parse_mode=Markdown');
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 

        $result = curl_exec($curl); 
        curl_close($curl);

        return json_decode($result);
    }
}


function formHandler(WP_REST_Request $request) {

	$username = $request['username'];
	$phone = $request['phone'];
	$email = $request['email'];

	$telegram = new Telegram;
	$telegram->message($username, $phone, $email);

	return [
		'status' => 'success',
		'message' => 'Ваши данные отправлены'
	];
}