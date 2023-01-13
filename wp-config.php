<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'test-wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '>VvI+xXB7]5:0<k*QO/=HqH11.Ma_MR^@*joDkbBzS7L0#nvTC%j#G}H1NxB-:/,' );
define( 'SECURE_AUTH_KEY',  '7uhx-/qOJj]?sWQTTx5CuOah0P1*p%.,wA8mQ*%=}Tzo-ttp4yl4~!PoC|%?V=If' );
define( 'LOGGED_IN_KEY',    '>_C%b(z*.ux0ZCyjX#2{4JXFS)xFzB}TH1Vq@V [o@buD2[T`FkBntL4L9U%>+,9' );
define( 'NONCE_KEY',        '^2,D{~Ka<s+8ac}V sT,p$`W?=|rrJ&I75*&8J4584OH):`e){L|i1jDWFb@V/i:' );
define( 'AUTH_SALT',        'DaA*}eSNT]GYZ]Ge}25X@yQJ2c<Qsq~/K-/1LnS<z0v,>90@;$)F0fc>g]$Q8np5' );
define( 'SECURE_AUTH_SALT', 'gL=K0HZ|aETXHYGaNwr&BH)1>PI,{Li .gsj1#+#fHq[$P$K3Afuz<*50mtD:5i~' );
define( 'LOGGED_IN_SALT',   'YA040iz@65+vkMTYr6F$N6{-,%[yo)zY<%zWNaF:~gMCR_&hc<ckFq{;8*4|o7h&' );
define( 'NONCE_SALT',       'lob;7l+yIqMz>#jqMP<vwEVeZsYP<BlqHeJ<D>pB4l!xALtULk:_|It]<3I>pbS-' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
