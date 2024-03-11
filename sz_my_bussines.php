/**
 * Plugin Name:       Mi Directorio de Negocios
 * Plugin URI:        http://github.com/jorgerh21/sz_my_bussines/
 * Description:       Un Plugin simple para crear post tipo relacionados con taxonomias de directorio de negocios.
 * Version:           1.0.0
 * Author:            Jorge Rodriguez
 * Author URI:        https:/sitioz.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       sz_my_bussines
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'SZ_VERSION', '1.0.0' );
define( 'SZDOMAIN', 'sz-post-types' );
define( 'SZPATH', plugin_dir_path( __FILE__ ) );