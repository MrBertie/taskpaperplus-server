<?php
namespace tpp;

//**************************************
// Fundamental paths and session setup
//**************************************

// globally used app path, for all includes, requires, and file access
$path = realpath(dirname(__FILE__) . '/..');
define('APP_PATH', $path . '/');
define('APP_NAME', basename($path));


// session start up
session_name(APP_NAME);
session_start();


//------------------------------
// Error reporting and logging.
//------------------------------
require_once('inc/debugmode.php');


// takes care of autoloading class files
require_once(APP_PATH . 'inc/autoload.php');


//***************************************
// Basic initialisation, config setup
//***************************************

// Load the global app config; including base paths
$config = array();
require_once(APP_PATH . 'conf/config.php');


log&&msg('Initialising basic app data');


//-----------------------------------------------
// Application constants, settings, and language data
//-----------------------------------------------

// default extension for all taskpaper files (txt is probably best)
define('EXT', ".txt");


// default tab/page states (default tab will be the first one available)
define('DEFAULT_EVENT', 'all');
define('DEFAULT_VALUE', null);


/**
 * Update types (used in cache.class/taskpaper.class.php)
 */
define('UPDATE_NONE', 0);
define('UPDATE_STATE', 1);
define('UPDATE_PARSED', 2);
define('UPDATE_RAWITEM', 3);
define('UPDATE_RAW', 4);
define('UPDATE_FILE', 5);


/**
 * Trash and Archive tab/file names
 */
define('FILE_TRASH', '__trash__');
define('FILE_ARCHIVE', '__archive__');
define('FILE_TAB_CACHE', '__tabs__');


/**
 * Various Http request types used by dispatcher.
 */
define('REQ_INVALID', 0);   // invalid request
define('REQ_INDEX', 1);     // initial index|start page
define('REQ_AJAX', 2);      // via JS event call through xhr


/**
 * Specific Tab types.
 */
define ('TAB_NORMAL', 0);
define ('TAB_TRASH', 1);
define ('TAB_ARCHIVE', 2);
define ('TAB_NEW', 3);


/**
 * Enum: Item types within a taskpaper list.
 *
 * @see Content
 */
define('ITEM_NONE', 0);
define('ITEM_PAGE', 1);
define('ITEM_PROJ', 2);
define('ITEM_TASK', 3);
define('ITEM_INFO', 4);
define('ITEM_NOTE', 5); // not used currently


/**
 * Enum: Different insertion types used by the Content _insert function.
 *
 * @see Content
 */
define('INS_END', 0);
define('INS_BEGIN', 1);
define('INS_REPLACE', 2);
define('INS_BEFORE', 3);
define('INS_AFTER', 4); // not used currently


/**
 * Enum: Return result for Content _insert function.
 *
 * @see Content
 */
define('RES_SUCCESS', 0);
define('RES_INVALID_TYPE', 1);
define('RES_NO_SPACE', 2);
define('RES_NO_SUCH_KEY', 3);


// Regex patterns, terms and symbols used globally in app
require_once(APP_PATH . 'conf/term.php');


// Basic app functions: config() lang(), ini(), + general functions
require_once(APP_PATH . 'inc/common.php');


// Confirm that necessary data folders exist
define('DATA_DIR', getdir_or(ini('taskpaper_folder'), config('data_dir')));
define('DELETED_DIR', getdir_or(config('deleted_dir')));
define('CACHE_DIR', getdir_or(config('cache_dir')));


// Load global language array from existing config file names
$langs = glob('./conf/lang_*');
foreach($langs as $lang) {
    $config['lang_list'][] = substr($lang, 12, -4);
}
$cur_lang = \tpp\ini('language');
$lang_path = 'conf/lang_' . $cur_lang . '.php';
$lang_en_path = 'conf/lang_en.php';

// default english lang strings (in case of missing items or language)
$lang = array();
require_once(APP_PATH . $lang_en_path);
if (file_exists($lang_path)) {
    require_once(APP_PATH . $lang_path);
}


// this ensures that dates will be localised also
// locale names must match PHP standards: see conf/locale_names.txt
$location = setlocale(LC_ALL, $cur_lang);
DEFINE('LOCATION', $location);


// used in TaskItem
define('MAX_ACTION', count(\tpp\lang('state_order')) - 2);


// set correct locale settings (timezone must be set first)
$timezone = ini('timezone');
// @ to avoid error NOTICE if timezone does not exist
if (@date_default_timezone_set($timezone) === false) {
    // this will return a suitable default if user has not set the timezone in his server
    $timezone = date_default_timezone_get();
    date_default_timezone_set($timezone);
}
DEFINE('TIMEZONE', $timezone);


// compile LESS css sheets
require_once(APP_PATH . 'lib/lessc.inc.php');

log&&msg('Compiling the lessCSS files');

try {
    \lessc::ccompile('css/style.less', 'css/style.css');
} catch (exception $ex) {
    exit('lessc fatal error:<br />'.$ex->getMessage());
}