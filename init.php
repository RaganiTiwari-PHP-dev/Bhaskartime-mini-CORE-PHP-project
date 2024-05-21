<?php
#note : in laravel same file is called : kernel.php,boot.php,core.php
#bootstrap: folder: intialisation of the application
$config=include_once dirname(__DIR__).'/config/setting.php';
require_once PROJECT_PATH .'/helper/functions.php';

$hostname= $config['database']['hostname'];
$username= $config['database']['username'];
$password= $config['database']['password'];
$dbname= $config['database']['dbname'];
$port= $config['database']['port'];


/*echo '<pre>';
print_r(get_defined_vars());//all defined variable;
 print_r(get_defined_constants());//all pre-defineed and underdefined constants
 print_r(get_defined_functions());//all the predifind function (internal or 1227)
 */
//include routes file
require_once  PROJECT_PATH.'/routes/web-routes.php';
require_once  PROJECT_PATH.'/routes/api-routes.php';
?>