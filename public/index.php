<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\LoginController;
$router = new Router();

//Login
$router->get('/',[LoginController::class,'login']);
$router->post('/',[LoginController::class,'login']);
$router->post('/logout',[LoginController::class,'logout']);

//Crear Cuenta
$router->get('/crear',[LoginController::class,'crear']);
$router->post('/crear',[LoginController::class,'crear']);

//Formulario Olvide mi password
$router->get('/forgot',[LoginController::class,'forgot']);
$router->post('/forgot',[LoginController::class,'forgot']);

//Colocar nuevo password
$router->get('/restablecer',[LoginController::class,'restablecer']);
$router->post('/restablecer',[LoginController::class,'restablecer']);

//Mensaje confirmacion de cuenta
$router->get('/mensaje',[LoginController::class,'mensaje']);
$router->get('/confirmar',[LoginController::class,'confirmar']);




// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();