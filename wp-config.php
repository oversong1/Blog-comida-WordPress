<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'curso-wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',z@8piajKWCWNr36n+%Dc@fe)j$m9_6Fs>a6|myWpbKQ3?1ZDBf7M9B.yuqit/, ' );
define( 'SECURE_AUTH_KEY',  ',XeG!#yUP-ej)pPH?}9pT*c<4py|ATn51y _,I}`8?$@KIXO:^uoW7QM(6$Eff1G' );
define( 'LOGGED_IN_KEY',    'A6o}K`?L$5[q_vY?Hl0QC7w?o<m7XJ$<3c~V5]twfAvH?|R#?8I&C?+lr&$^=l:C' );
define( 'NONCE_KEY',        '|P1g^w`M8o3L<wG-.EEkznT<WqW@x^2[}lLWGw,3>K|1H52@h_]A$yvzq*~G9;w^' );
define( 'AUTH_SALT',        'MT^5TYixBxNJ d[_yt9&{yIK<OD; 8S|kr6RmO,G<Ua)^33yuq} KF@i0yPj)),.' );
define( 'SECURE_AUTH_SALT', '_aR4W9/MCl]EJZMI?B$~L-Pp1WmJN9gT:j7AN:L0_,o5gK}*[39:xJ37KcJ-!cS8' );
define( 'LOGGED_IN_SALT',   '>*&QkWBW7{e[ik-RZd[uW[R;[$$)pfKxYQ7<*I. =7gZR(L=g`=4tXZ;0d ?^]?o' );
define( 'NONCE_SALT',       'V<O5!`O4YG}Xb:ln9-sAr<_eXHh-ZcAas1Ww 1tms2s/ZKrY?[Wqn}.k[%gED$ma' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
