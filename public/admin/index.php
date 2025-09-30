<?php
session_start();
// Administrators modular systems  sections
//  defined all root path for the system
define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR);
define('MODULES_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'app/modules' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'app/views' . DIRECTORY_SEPARATOR);
// use system\Template;

$module = $_GET['module'] ?? $_POST['module'] ?? 'dashboard';
$action = $_GET['action'] ?? $_POST['action'] ?? 'default';

require_once ROOT_PATH . 'vendor/autoload.php';

use system\DatabaseConnection;
use system\Template;



// Bootstrap
/* Connect to a MySQL database using driver invocation */

DatabaseConnection::connect('localhost', 'school_database_management', 'root', '');
$dbh = DatabaseConnection::getInstance();
$dbc = $dbh->getConnection();


if ($module == 'dashboard') {
   require_once MODULES_PATH . 'dashboard/admin/controller/DashboardController.php';
   $controller = new DashboardController();
   $controller->dbc = $dbc;
   $controller->template = new Template('layout/admin.static');
   $controller->runAction($action);
}
if ($module == 'sections') {
   require_once MODULES_PATH . 'sections/admin/controller/SectionController.php';
   $controller = new SectionController();
   $controller->dbc = $dbc;
   $controller->template = new Template('layout/admin.static');
   $controller->runAction($action);
}
