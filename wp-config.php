<?php
// ** MySQL settings ** //
define( 'DB_NAME', 'localdb' );
define( 'DB_USER', 'azure' );
define( 'DB_PASSWORD', '6#vWHD_$' );
define( 'DB_HOST', '127.0.0.1:50066' ); // Include port here

define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

// ** Authentication Unique Keys and Salts ** //
define('AUTH_KEY',         '7mC}rEA|d]wV>!K.[}zQ1Jlamwq[*5TcO9e.NMYxuV,_N3-R;L!bNGG)eKVQku^-');
define('SECURE_AUTH_KEY',  '|%{TMr+$&OZaD`<%-yyq+CYW5IV|:nZf4@b(+Xh{M|kN|~<.Qth%s#?=$K5of,@j');
define('LOGGED_IN_KEY',    'j7;1L1lNwepoZSLzq`8+zq>>%Bg7e9Dp VyM3;EXjWU2&df=w;&kRu#<:yK@<sm-');
define('NONCE_KEY',        'H|Ei>}n;Dh&etrqZE;Y|CK3j)%pSL^d+}|MW_}<-OV5?ceJ+F5>`CH#uUiY/1@H-');
define('AUTH_SALT',        'Dl9(BiOs<3A@oL~JRH L=Cov$K%5RF%cF&p,{3b#H%ZMA}%T?]B}G^;p3 aHcZP ');
define('SECURE_AUTH_SALT', ']`g1B{!a9nqL78fabkDBoX+<kB.ocl#|GX=D-n]{7Z2!Bf6FbE%bE!a}Je*|^0fL');
define('LOGGED_IN_SALT',   'h{1Nwt>f<[*[B?&men-U=&6O:pD9wzL|APL+!:p|?H%uC.ZNY-a-`{J3t2fE{9x+');
define('NONCE_SALT',       'Ja&IQW!yG-icrZrN{0]B2@mL;NqN<`CSZK,^ @*Rx!.N[r[(S3e6.ne])peR:w5t');

// ** WordPress Database Table prefix ** //
$table_prefix = 'wp_';

// ** For developers: WordPress debugging mode ** //
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', false );

// ** Absolute path to the WordPress directory. ** //
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

// ** Sets up WordPress vars and included files. ** //
require_once ABSPATH . 'wp-settings.php';
