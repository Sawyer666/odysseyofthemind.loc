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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'test');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'TV|4D/(g,,PZ8IxC*k>YKEwLw6UNJYy`P?e4Ic#z9=iiuNF-Y7$Yn,4iQ_MgS#L}');
define('SECURE_AUTH_KEY',  'kMJb=>;zE>a8f`%$.F3MJ;bG-^+klvzleQfLd~E3d:=[UIE72H2b,1 +FuE><??j');
define('LOGGED_IN_KEY',    'Vf,pA*Q+#V$gY}K^ |bys|M-l]cc8Dxv9Wa3[~9#9r?I^q6n<r`XD5zQ60p!.-?M');
define('NONCE_KEY',        'S(dT(vo?M8MK]sZP5NfJj0h4+w|^WxupbFIdUqtmq[;9+lhy(ry;fB2mtzO0z^Yv');
define('AUTH_SALT',        '*-yHlQrLs^f|}tlGBP*DyMo.xo` `KZ_@f7[%{O}J%Daw4`k8y.fi5QC)]AdZnsu');
define('SECURE_AUTH_SALT', 'w^N9(;-f)*Bp@SbcS+N@uXRXI~YR .}aL&>)xQb:o*Kx(..B-VNq*<=zq@,TbK0c');
define('LOGGED_IN_SALT',   'IPZn|EHlasYZ_]EK}pClh.);3L`T+!9W@2?R1JKU&6 H<7CLxNga^E+nfrpU/J|L');
define('NONCE_SALT',       '~UX6ydt:T(T_kP=]&N-1wv}Mc!+c-N>5 >b~$krIslTYBM _6=n05}]^heU$W|f4');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
