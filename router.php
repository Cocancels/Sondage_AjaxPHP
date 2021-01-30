<?php

use App\Controller\UserController;
use App\Controller\HomeController;
use App\Controller\AdminController;
use App\Controller\SondageController;

if (array_key_exists("page", $_GET)) {

    switch ($_GET["page"]) {

        case 'inscription':
            $controller = new UserController();
            $controller->inscription();

            break;
        case 'connexion':
            $controller = new UserController();
            $controller->connexion();
            break;
        case 'home':
            $controller = new HomeController();
            $controller->render();
            break;
        case 'deconnexion':
            $controller = new UserController();
            $controller->deconnexion();
            break;
        case 'admin':
            $controller = new AdminController();
            $controller->render();
            break;
        case 'admin-create':
            $controller = new AdminController();
            $controller->createSondage();
            break;
        case 'amis':
            $controller = new UserController();
            $controller->renderAmis();
            break;
        case 'profil':
            $controller = new UserController();
            $controller->profil();
            break;
        case 'editProfil':
            $controller = new UserController();
            $controller->editProfil();
            break;
        case 'sondage':
            $controller = new SondageController();
            if (getallheaders()['Accept'] == 'application/json' && $_SERVER['REQUEST_METHOD'] == 'GET') {
                $controller->getData();
            } else if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $controller->sendData();
            } else {
                $controller->sondage();
            }
            break;
        case 'deleteFriend':
            $controller = new UserController();
            $controller->deleteFriend();
            break;
        case 'friendChat':
            $controller = new UserController();
            $controller->renderChat();
            break;

        case 'sendMail':
            $controller = new UserController();
            $controller->sendMail();
            break;
    }
} else {
    $controller = new HomeController();
    $controller->render();
}
