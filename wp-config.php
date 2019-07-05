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
define( 'DB_NAME', 'good-work' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'efZ&W(Od>huROs.H%`zw@KiOAx8m,^$(:wPNTi-(+t_|CkzrQS]}K=M,Bki|e0GN');
define('SECURE_AUTH_KEY',  '&6}Fi`*:m)~RR<?$ZS+99}AwIC{/9C]J.*ZdCRFWo(96%uk@V2}k+O1NW}.%d*k_');
define('LOGGED_IN_KEY',    'Jg5d+&GsI|TnwoOxxx28n+z<u.g^go`_S:sJ~Pkuk0g]N;cnUJ3t{BMRa?J$F*H.');
define('NONCE_KEY',        '1KUm:& :}#T{~$$lGXHk&d:b-?pg]_IlCbF4y*6^t Q0].H5+R_/>-Hq+X&p?v`:');
define('AUTH_SALT',        'T[[RC-R;DOZXfVnP*(M-/21|x(M&G,c?Wodr#3f]]8)Q; b,J,dD#R$W!Z2/&G)8');
define('SECURE_AUTH_SALT', '?c :U>yG?OmI[jlwwG{m%DT.>X,!<N:Sm Xzy6Eo1#}j#jE{AI![d:JIvToL>jjl');
define('LOGGED_IN_SALT',   '-ZR$5F4+m|H3d:4,Zgm_huLRlN:RwFeg-{I<9!JY}l4Py&Y<;dRXmT&*E.v6b|lw');
define('NONCE_SALT',       'iA$~Zx[|7M)ShgzE5X $/gci]9=N-u7/w|0,LYW1A8g,LamC@na[k77c:b:(dA?2');

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
