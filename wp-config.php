<?php
/**
 * ������? ��������� WordPress.
 *
 * ��� ���� �?����� �������? ���������: ������������ MySQL, ����?�� �������,
 * �������? ����?, ���� ?��������� WordPress ? ABSPATH. ��������� ?�������?� ����� ������
 * �� ����?��? {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} �������. ��������� MySQL ����� �?������� � ������?-����������.
 *
 * ��� ���� �����������?���� ������??� ��������� wp-config.php � ������? ���������.
 * ������'������ ��������������� ���-?��������, ����� ����?����� ��� ����
 * � ������ <<wp-config.php>> ? ��������� ��������.
 *
 * @package WordPress
 */

// ** ����?�� ������������ ��� ������� �� �� MySQL ** //
/** ?�'� ���� ����� WordPress */
define('DB_NAME', 'wordpress');

/** ���������� �� MySQL */
define('DB_USER', 'root');

/** ������ ����������� �� MySQL */
define('DB_PASSWORD', 'balanda');

/** ������ �� MySQL */
define('DB_HOST', 'localhost');

/** ��������� ������� ��. */
define('DB_CHARSET', 'utf8');

/** ��?���������� ������?� � ��. ����� �� �?����� ��� �����. */
define('DB_COLLATE', '');

/**#@+
 * ��?�����? ����? ? ���? ��� ��������?���??.
 *
 * ��?�?�� �������� �����? ��������� �� ��?������ �����.
 * ����� ����������� ?� �� ��������� {@link https://api.wordpress.org/secret-key/1.1/salt/ ����?�� ����?� �� WordPress.org}
 * ����� ��?���� ?�, ��� ������� ?�����? ����� cookies ���?������. ������������ ���� ����?��� ����� ��������������.
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
 * ����?�� ��� ���� ����� WordPress.
 *
 * ������ ��?����, ��� ������ ������ ���, �� ?.
 * ��������� �?���� ��������� �?����, �������? ����� �� ����? �?����������!
 */
$table_prefix  = 'wp_';

/**
 * �����?���?� WordPress, ���������� ����?�����.
 * ����?����� ������ ��� ���������.
 */
define ('WPLANG', 'uk');

/* �������?�� ��������� */
define('WP_CACHE', true);

/**
 * ��� ���������?�: ����� �?������ WordPress.
 *
 * ��?�?�� <<false>> �� <<true>>.
 * �� ������������� ��� �������? ���??�?� ? ���. �������������� WP_DEBUG
 * ��� ��������.
 */
#define('WP_DEBUG', false);

/**
 * ��������? ������������. ��� �������?? �������������(������?�� <<#>> ����� ������)
*/

/* ?������� ������������� ����?���?� ? ����?���(� ��������) */
#define('AUTOSAVE_INTERVAL', 160 );

/* ��������� ���?�?� ����?���?� ? ����?��� */
#define('WP_POST_REVISIONS', false );

/* �?���?��� ���?�?� ����?���?� ? ����?��� */
#define('WP_POST_REVISIONS', 3); // ���?�?�� ����� <<3>> �� ������ �?���?���

/* ��?������� ����������� ���������? �?������? ���'��? ��� ��������� ������?� */
#define('WP_MEMORY_LIMIT', '64M');

/* ��� ���������� �����?��?� � ������, � ���� */
#define('EMPTY_TRASH_DAYS', 30 );  // ���?�?�� ����� <<30>> �� ������ �?���?��� ��?�


/* ���. ������! ������?�� ���� �� ��������� ������. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
