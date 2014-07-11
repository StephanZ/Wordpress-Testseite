<?php
/**
 * In dieser Datei werden die Grundeinstellungen für WordPress vorgenommen.
 *
 * Zu diesen Einstellungen gehören: MySQL-Zugangsdaten, Tabellenpräfix,
 * Secret-Keys, Sprache und ABSPATH. Mehr Informationen zur wp-config.php gibt es auf der {@link http://codex.wordpress.org/Editing_wp-config.php
 * wp-config.php editieren} Seite im Codex. Die Informationen für die MySQL-Datenbank bekommst du von deinem Webhoster.
 *
 * Diese Datei wird von der wp-config.php-Erzeugungsroutine verwendet. Sie wird ausgeführt, wenn noch keine wp-config.php (aber eine wp-config-sample.php) vorhanden ist,
 * und die Installationsroutine (/wp-admin/install.php) aufgerufen wird.
 * Man kann aber auch direkt in dieser Datei alle Eingaben vornehmen und sie von wp-config-sample.php in wp-config.php umbenennen und die Installation starten.
 *
 * @package WordPress
 */

/**  MySQL Einstellungen - diese Angaben bekommst du von deinem Webhoster. */
/**  Ersetze database_name_here mit dem Namen der Datenbank, die du verwenden möchtest. */
define('DB_NAME', 'wordpress_test');

/** Ersetze username_here mit deinem MySQL-Datenbank-Benutzernamen */
define('DB_USER', 'root');

/** Ersetze password_here mit deinem MySQL-Passwort */
define('DB_PASSWORD', '01590118');

/** Ersetze localhost mit der MySQL-Serveradresse */
define('DB_HOST', 'localhost');

/** Der Datenbankzeichensatz der beim Erstellen der Datenbanktabellen verwendet werden soll */
define('DB_CHARSET', 'utf8');

/** Der collate type sollte nicht geändert werden */
define('DB_COLLATE', '');

/**#@+
 * Sicherheitsschlüssel
 *
 * Ändere jeden KEY in eine beliebige, möglichst einzigartige Phrase. 
 * Auf der Seite {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service} kannst du dir alle KEYS generieren lassen.
 * Bitte trage für jeden KEY eine eigene Phrase ein. Du kannst die Schlüssel jederzeit wieder ändern, alle angemeldeten Benutzer müssen sich danach erneut anmelden.
 *
 * @seit 2.6.0
 */
define('AUTH_KEY',         '&_E~7~NVez&h1Y3;]_0cw3.amEBY6P(+mjye|TIvB@^)}hasT4*Aok$[{bBKC}6<');
define('SECURE_AUTH_KEY',  '~7Vb1R!B34vEd*KJa1_543_eObYl-K8H#F{<2,Wn$WAk0(M79md+p$&_/,1R)e4g');
define('LOGGED_IN_KEY',    'QMED%_7I+BC[Ju`9{E)^?-N+Wc&|mR;_}5~Fv/ejm{.;Z d[aP+#oL``mk]xx|`p');
define('NONCE_KEY',        'nD::lN8Vm{C!qG/.CH1Av,QEX4|Ny96fVz6f^!h0vV|(`Ek,<Ey-P}hYu >:6bW*');
define('AUTH_SALT',        ':m@L+S[6)Sz-cQ$s5iiCPT|%4,|u`FEo0>N6qzD84QY!*$TzN+t!)+&3(3u0MWg8');
define('SECURE_AUTH_SALT', '4CTB;-Zz~YR4-f,YYpZ?e+J/r-OS!2G95EmH_8|FXH>IJeh>f@n7XM5S&hSA7#%T');
define('LOGGED_IN_SALT',   'M`CW(aA~wZW5#7Uq2HAFZ-vr-b/&xT{2{18#Az$hE&,X{|CVxg0%Dq6dnpSk1Vjn');
define('NONCE_SALT',       '1#< 0>]u7mwI%k#dSYwzEt(4hE#+Dzd_Jk4qfR/j#cdcV.g=oTZFh j^7FVhr5Jx');

/**#@-*/

/**
 * WordPress Datenbanktabellen-Präfix
 *
 *  Wenn du verschiedene Präfixe benutzt, kannst du innerhalb einer Datenbank
 *  verschiedene WordPress-Installationen betreiben. Nur Zahlen, Buchstaben und Unterstriche bitte!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Sprachdatei
 *
 * Hier kannst du einstellen, welche Sprachdatei benutzt werden soll. Die entsprechende
 * Sprachdatei muss im Ordner wp-content/languages vorhanden sein, beispielsweise de_DE.mo
 * Wenn du nichts einträgst, wird Englisch genommen.
 */
define('WPLANG', 'de_DE');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');