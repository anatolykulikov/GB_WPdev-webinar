<div class="form">
    <form action="<?php echo(home_url() . '/wp-json/site/form'); ?>" class="wrapper" id="sendingForm">
        <label>
            <span>Введите ваше имя</span>
            <input type="text" name="username" value="Anatoly" />
        </label>
        <label>
            <span>Укажите ваш телефон</span>
            <input type="phone" name="phone" value="9008007060" />
        </label>
        <label>
            <span>Укажите ваш email</span>
            <input type="email" name="email" value="k@a.com" />
        </label>
        <button type="submit" id="sendingFormButton">Заказать консультацию</button>
        <div id="sendingFormResult"></div>
    </form>
    <script src="<?php getFile('/dist/bundle.js'); ?>"></script>
</div>