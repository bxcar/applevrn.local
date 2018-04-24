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
define('DB_NAME', 'applevrn');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'root');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '.1nxwL@{_u[0T6v,8=4LfG^A1*oF(a+4N3<2_)<S#`@M:c,g8[+(teDMqCP<>^%5');
define('SECURE_AUTH_KEY',  ' b|Rzo?ESa9Z%$U `;mYo{JT[Fe{W8dDqe@/%,:EwQffrqPBOgsUIg^jgALdKdm$');
define('LOGGED_IN_KEY',    '-1nvl?u]^5dn873Y@G=S>TQw;eD;uC-v3f&8xl=f!^$r04iSO,kI[K*YC`L?G,|C');
define('NONCE_KEY',        '<=Qa/W{MccEd|i0,Gyxrs-)C5&-mpv,<*EPe;q^ZI6a,JAb<|} 0sxt*7ix%@V,`');
define('AUTH_SALT',        'f.jiTj. %@DEXrZM} *jI.gDeT/-xB2OZ38;gJuM2GsIO$d6tSZY6X29KdBIP;99');
define('SECURE_AUTH_SALT', '/=3EH-l=|TmLNim|=$IEJT7{q[_b0%Rm|57p MA^WH=_oRl/pht(RQ`^=N#typ@D');
define('LOGGED_IN_SALT',   '_JS-aaoPA@SfDR-cwD$!%T[htIJ,0>%5%+;Za@+xv*rjisz&)3dKf;-9:C=#;~eb');
define('NONCE_SALT',       '_Uc;:#BR3,T_>0][O2J}J[v%H{zr=gqQc0P(wM>XJ^d3aRfXz&2CQ;ZKrv7H?ii&');

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
