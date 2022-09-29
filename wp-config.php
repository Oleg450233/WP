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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'tA10t%t3$nN=VL$($8;27DFy ?Le10@>Y<g6YYa{vR.^*9{Wq/vwdd:-bTo77oK7' );
define( 'SECURE_AUTH_KEY',  '7u0yeJWYf=JqvF@Ff=RNw:J&z_]L>hZHivy,RN/svD2-0T![e7ZaBD1N8N liBFr' );
define( 'LOGGED_IN_KEY',    '2=*+Uq=;G{2{gzuiUnO4<L~3sS1lT4Vcj@~=lg%+H?/{|s`LzJ$&:&Xr~LlFIh<&' );
define( 'NONCE_KEY',        'cHQCO03`SlbA#d5AY9w_]i7x8d9;R`ndQj-m RfoN?v`1iM^e{~x s)7JV?W/x.f' );
define( 'AUTH_SALT',        'nwbp+QR(/&5*~IBrzfKdtqWY4%Pdw>Fp|hr$%j EfWY}UeYN5:KyK/nNH:rQe(II' );
define( 'SECURE_AUTH_SALT', '>O2lS)//)ch]~ @=N%l*zYEHLye7z|;@x^Z@ZtXbq4mN,AkIbH-7AJ~gkw5GS#:t' );
define( 'LOGGED_IN_SALT',   'U%cvKQw?`n[r}_Jzac+^cBE_,liENfyc3WNI(T}B?PB$:w72,F[kZy9ZV[Pmk@n!' );
define( 'NONCE_SALT',       'Rl?J2F%eMt4f<SYM8(.&!rAZMVxumvXJ9=5p|S/}Pcv)OswwDS~iV*G*zr<4Z.L]' );

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
