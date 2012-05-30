<?
use Wax\Config\Config;
/* When running sites on the PHP-WAX framework you have the option to have a single installation
 * which all applications share, or you can have a separate version of the framework files inside
 * each site folder. If you've downloaded a packaged version with a 'wax' folder in your site root,
 * then you don't need to worry about any of these options.
 *
 * You can run a server-wide install from a PEAR installation. How-tos can be found on the PHP-WAX site.
 */

/************ Don't edit this section *******************************************************/
define('WAX_ROOT', dirname(dirname(dirname(__FILE__)))."/" );
if(is_dir(WAX_ROOT."wax")) {
	define('FRAMEWORK_DIR', WAX_ROOT."wax");
}
ini_set('include_path', ini_get("include_path").":".WAX_ROOT);

require_once(FRAMEWORK_DIR."/AutoLoader.php");

Config::load("db.ini");
Config::load("application.ini");
Wax\Utilities\Profiler::profile();

/* You can add environment level boot commands here, unless you need to force load features it's preferable
 * to defer as much as possible to global.php since this reduces the load overhead.
 */

setlocale(LC_MONETARY, 'en_GB');


