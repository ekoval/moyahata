<?php
/**
 * Основні параметри WordPress.
 *
 * Цей файл містить наступні параметри: налаштування MySQL, префікс таблиць,
 * Секретні ключі, мова інтерфейсу WordPress і ABSPATH. Додаткову інформацію можна знайти
 * На сторінці {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} кодексу. Установки MySQL можна дізнатися у хостинґ-провайдера.
 *
 * Цей файл використовується сценарієм створення wp-config.php в процесі установки.
 * Необов’язково використовувати веб-інтерфейс, можна скопіювати цей файл
 * З назвою «wp-config.php» і заповнити значення.
 *
 * @package WordPress
 */

// ** Вкажіть налаштування для доступу до БД MySQL ** //
/** Ім’я бази даних WordPress */
define('DB_NAME', 'database_name_here');

/** Користувач БД MySQL */
define('DB_USER', 'username_here');

/** Пароль користувача БД MySQL */
define('DB_PASSWORD', 'password_here');

/** Сервер БД MySQL */
define('DB_HOST', 'localhost');

/** Кодування таблиць БД. */
define('DB_CHARSET', 'utf8');

/** Співставлення символів у БД. Коаще не чіпайте цей рядок. */
define('DB_COLLATE', '');

/**#@+
 * Унікальні ключі і солі для аутентифікації.
 *
 * Змініть значення кожної константи на унікальну фразу.
 * Можна згенерувати їх за допомогою {@link https://api.wordpress.org/secret-key/1.1/salt/ сервісу ключів на WordPress.org}
 * Можна змінити їх, щоб зробити існуючі файли cookies недійсними. Користувачам буде потрібно знову авторизуватися.
 *
 * @ Since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * Префікс для бази даних WordPress.
 *
 * Можете змінити, але радимо лишити так, як є.
 * Дозволено тільки латинськи літери, арабські цифри та нижнє підкреслення!
 */
$table_prefix  = 'wp_';

/**
 * Локалізація WordPress, стандартно англійська.
 * Українська локаль вже прописана.
 */
define ('WPLANG', 'uk');

/* Дозволяємо кешування */
define('WP_CACHE', true);

/**
 * Для розробників: Режим відладки WordPress.
 *
 * Змініть «false» на «true».
 * Це рекомендовано при розробці плаґінів і тем. Використовуйте WP_DEBUG
 * для розробки.
 */
#define('WP_DEBUG', false);

/**
 * Додаткові налаштування. Для активації розкоментуйте(приберіть «#» перед рядком)
*/

/* Інтервал автозбереженя публікацій і сторінок(в секундах) */
#define('AUTOSAVE_INTERVAL', 160 );

/* Вимкнення ревізій публікацій і сторінок */
#define('WP_POST_REVISIONS', false );

/* Кількість ревізій публікацій і сторінок */
#define('WP_POST_REVISIONS', 3); // Замініть число «3» на бажану кількість

/* Збільшення максимально дозволеної кількості пам’яті для виконання скриптів */
#define('WP_MEMORY_LIMIT', '64M');

/* Час збереження матеріалів у кошику, у днях */
#define('EMPTY_TRASH_DAYS', 30 );  // Замініть число «30» на бажану кількість днів


/* Все. Готово! Збережіть файл та починайте писати. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
