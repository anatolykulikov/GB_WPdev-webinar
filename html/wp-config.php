<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'username' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'password' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'mysql' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4[4kjoru3[sj:H+;EBvROlWp3cC.E[cqE-N?p)i(>u%Ht%Q=$.Qc{4ol=/FNYc8X' );
define( 'SECURE_AUTH_KEY',  'G7Jk}L^@G+4$xlmu(a*J.heYFZULKTCEXeu.zD#C| X$oA>n`^9fP>[<&#u{*jW&' );
define( 'LOGGED_IN_KEY',    '@EQCSR8] q^Ze K@6{W#^`4x`+[D`ZMAxKI/LxpL7q{@5I/r/>T3E]xKh-[7gs4>' );
define( 'NONCE_KEY',        'vOLl+$_jPhCx>}M@;0i8O(+kgD{SkOspHod=W;@Lduh!9|f!3MxC(;)@bzWaacQd' );
define( 'AUTH_SALT',        '695+H}w+A{qo*X1:[wRl=(kD6srN*1.!.wrG`8N3-,AI#lHQq6}`otDBqZUT&Dps' );
define( 'SECURE_AUTH_SALT', 'LU2wa$W2*u|d()@*H<0%j8e[m4P:^fe9HaAIWM3/)KD;?}[fG.KmjYNwL06I?d4o' );
define( 'LOGGED_IN_SALT',   '}ZlTf9W=X$`)JpF8skOt O|6epE[1u.oJq8Z&Mpb<9.BzTQMDWET,_1cu1dv@%S#' );
define( 'NONCE_SALT',       ';P3eJ)d_?}{+qRarq~(5v.]*pD_#j[iP:?4.2FiL;s-w)<:;%|[~kGEADz{L$@U`' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'qwef_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
