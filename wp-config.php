<?php
/**
 * Основн? параметри WordPress.
 *
 * Цей файл м?стить наступн? параметри: налаштування MySQL, преф?кс таблиць,
 * Секретн? ключ?, мова ?нтерфейсу WordPress ? ABSPATH. Додаткову ?нформац?ю можна знайти
 * На стор?нц? {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} кодексу. Установки MySQL можна д?знатися у хостин?-провайдера.
 *
 * Цей файл використову?ться сценар??м створення wp-config.php в процес? установки.
 * Необов'язково використовувати веб-?нтерфейс, можна скоп?ювати цей файл
 * З назвою <<wp-config.php>> ? заповнити значення.
 *
 * @package WordPress
 */

// ** Вкаж?ть налаштування для доступу до БД MySQL ** //
/** ?м'я бази даних WordPress */
define('DB_NAME', 'wordpress');

/** Користувач БД MySQL */
define('DB_USER', 'root');

/** Пароль користувача БД MySQL */
define('DB_PASSWORD', 'balanda');

/** Сервер БД MySQL */
define('DB_HOST', 'localhost');

/** Кодування таблиць БД. */
define('DB_CHARSET', 'utf8');

/** Сп?вставлення символ?в у БД. Коаще не ч?пайте цей рядок. */
define('DB_COLLATE', '');

/**#@+
 * Ун?кальн? ключ? ? сол? для аутентиф?кац??.
 *
 * Зм?н?ть значення кожно? константи на ун?кальну фразу.
 * Можна згенерувати ?х за допомогою {@link https://api.wordpress.org/secret-key/1.1/salt/ серв?су ключ?в на WordPress.org}
 * Можна зм?нити ?х, щоб зробити ?снуюч? файли cookies нед?йсними. Користувачам буде потр?бно знову авторизуватися.
 *
 * @ Since 2.6.0
 */
define('AUTH_KEY',         '`AF>^-1At;!zvB!xHG%-Z_KYnmUnhu9?[@6~4$uJ7C{$9{Eb6c$JN4?>a[cNbQ]0');
define('SECURE_AUTH_KEY',  '^H`B{`XK*@{bRZQL<{i?x}$s#W25}@]*-WsvkfHMen:zd$/$l-v5|0 rd2-u.}KI');
define('LOGGED_IN_KEY',    'e]DahWoClDs|?y&9j`SH}v~QO|#O?YX<PQ3e_-twJ.fDUjHy%E^,(vP=&j7g%:#p');
define('NONCE_KEY',        'W~V$1j-pBIx!tnk!qz-D:l :-4$m2T0SfE9$E]AN|M[N]eD_W<L+CsR}UkTV>sY4');
define('AUTH_SALT',        '}8xI`e~_;]Di&bp}#FI.7?(-%+b)NwKA!SoDeNe)=Bn9u78;RYC+OG$x=$MK-h[]');
define('SECURE_AUTH_SALT', 'uR$,Eh^f{r<GN^Jx.gV/T7|Xo@]R32s:p8^40XO7Z<+3z0|C t9rulPyqnC&:?>p');
define('LOGGED_IN_SALT',   'q+2s;a5W1UYM}oKwJP<@zPqmS4:^-aOs`){m<aY*UY<Cghb;!K.dUyqUDJm=;W50');
define('NONCE_SALT',       '_[k5}]x}>nIX!u{d1F9?(Tp=3*%za+jR~QP&(7Q&!OvoMVq[[z?qtwDK.xPkT#/X');

/**#@-*/

/**
 * Преф?кс для бази даних WordPress.
 *
 * Можете зм?нити, але радимо лишити так, як ?.
 * Дозволено т?льки латинськи л?тери, арабськ? цифри та нижн? п?дкреслення!
 */
$table_prefix  = 'wp_';

/**
 * Локал?зац?я WordPress, стандартно англ?йська.
 * Укра?нська локаль вже прописана.
 */
define ('WPLANG', 'uk');

/* Дозволя?мо кешування */
define('WP_CACHE', true);

/**
 * Для розробник?в: Режим в?дладки WordPress.
 *
 * Зм?н?ть <<false>> на <<true>>.
 * Це рекомендовано при розробц? пла??н?в ? тем. Використовуйте WP_DEBUG
 * для розробки.
 */
#define('WP_DEBUG', false);

/**
 * Додатков? налаштування. Для активац?? розкоментуйте(прибер?ть <<#>> перед рядком)
*/

/* ?нтервал автозбереженя публ?кац?й ? стор?нок(в секундах) */
#define('AUTOSAVE_INTERVAL', 160 );

/* Вимкнення рев?з?й публ?кац?й ? стор?нок */
#define('WP_POST_REVISIONS', false );

/* К?льк?сть рев?з?й публ?кац?й ? стор?нок */
#define('WP_POST_REVISIONS', 3); // Зам?н?ть число <<3>> на бажану к?льк?сть

/* Зб?льшення максимально дозволено? к?лькост? пам'ят? для виконання скрипт?в */
#define('WP_MEMORY_LIMIT', '64M');

/* Час збереження матер?ал?в у кошику, у днях */
#define('EMPTY_TRASH_DAYS', 30 );  // Зам?н?ть число <<30>> на бажану к?льк?сть дн?в


/* Все. Готово! Збереж?ть файл та починайте писати. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
