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
define( 'DB_NAME', 'wordpresstest' );

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
define( 'AUTH_KEY',         'X*NW{g%a9CSF`55(_7r5;eZrm/(J[ZR*H~P*)Rlqa3JWBYm$xdfUV_@MEoI.ZI>g' );
define( 'SECURE_AUTH_KEY',  's=A*:gphMZ%m@z2[UFuK.E|kb&vlG!]Knr36HR2!H^:KSUlSb):`BqWHV?b-.9(^' );
define( 'LOGGED_IN_KEY',    '`HCMP&D}j2}[w_?LcPUY%6clu)*xfHi[wyB`=*Q1-&JXI1nCGk0Pv-:`P?^Bpj[&' );
define( 'NONCE_KEY',        'ukG%uF-8ngP6n`(u_#G>>hkN4;E^vW7BkLT|d]_MISzbdR]#k-9AAU30+q>zbPNo' );
define( 'AUTH_SALT',        'p@i7T[=5xSnckZN<jEdS%}EaRSXel7qjqAArF96UU/S-T&d!Y)GZRS8p;!hz(VAy' );
define( 'SECURE_AUTH_SALT', '_eTK1$!<@qw[D&t;eA$!Md_tM{]%BBRESv4b=FgCPm02pE#l|(B*U_(!N2w^bQ#f' );
define( 'LOGGED_IN_SALT',   'Z5n_^!tczI?`ldT^evGNzr*;cjp8Q!@:e[r/)4Rm&WI]4xg8#+{hko#Qy9KPCn4|' );
define( 'NONCE_SALT',       'eOK3ZlZF.imhk^lw]]LXM:j*Ur%T=H;_qaw!jx<O&0eicS<W=]gyAzLLJcg>8k~D' );

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
