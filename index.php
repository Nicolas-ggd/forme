<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];


switch ($uri) {
    case 'admin':
        echo 'gaxseni html';
        break;
    case 'products' :

        echo "productsi html";
        break;

    //sxva casebi
    default:
        $controller = new \App\Controller\ProductController();
        $userController = new \App\Controller\UserController();
        $loginController = new \App\Controller\LoginController();

        if (isset($_GET['action'])) {

            if ($_GET['action'] == 'edit') {
                $controller->editView();
            }
            if ($_GET['action'] == 'addProduct') {
                $controller->addView();
            }
            if ($_GET['action'] == 'back'){
                $controller->index();
            }
            if ($_GET['action'] == 'create'){
                $loginController->createView();
            }

        } else {

            if (isset($_GET['ajax'])) {
                if ($_GET['ajax'] == 'productDelete') {
                    $controller->delete();
                }
                if ($_GET['ajax'] == 'massDelete'){
                    $controller->massDelete();
                }
                if ($_GET['ajax'] == "addProduct"){
                    $controller->add();
                }
                if ($_GET['ajax'] == "editProduct"){
                    $controller->edit();
                }
                if ($_GET['ajax'] == "createUser"){
                    $loginController->ligin();
                }

            }
            $controller->index();

        }
        break;

}
