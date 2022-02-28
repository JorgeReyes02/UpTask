<?php
namespace Controllers;
use MVC\Router;

class LoginController{
    public static function login(Router $router){
        
        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }

        //Render a la vista
        $router->render('auth/login',[
            'titulo' => 'Iniciar Sesión'
        ]);
    }

    public static function logout(){

    }

    public static function crear(Router $router){
       

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }
        //Render a la vista
        $router->render('auth/crear',[
            'titulo' => 'Crea Cuenta'
        ]);
    }

    public static function forgot(){
        echo "Desde pagina para resetear password";

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }
    }

    public static function restablecer(){
        echo "Desde restablecer";

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }
    }

    public static function mensaje(){
        echo "Desde mensaje";

        
    }

    public static function confirmar(){
        echo "Desde confirmar";

        
    }
}