<?php /*echo '<pre>' . var_export($_GET, true) . '</pre>';*/

$controllerPath = 'src/Controller/';
$actionPath = 'src/View/';
$controller = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'BilletsController';
$action = isset($_GET['action']) ? $_GET['action'] : 'list';

/*var_dump($controllerPath . $controller . '.php');
var_dump(file_exists($controllerPath . $controller . '.php'));*/

if(!file_exists($controllerPath . $controller . '.php')){
    header('Location: /?controller=ErrorController&action=controller_not_found');
}else{
    if(!file_exists($actionPath . str_replace('Controller', '', $controller) . '/' . $action . '.php')){
        header('Location: /?controller=ErrorController&action=page_not_found');
    }
}

require($controllerPath . $controller . '.php');
require($actionPath . str_replace('Controller', '', $controller) . '/' . $action . '.php');