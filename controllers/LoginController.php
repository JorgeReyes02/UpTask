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

    public static function forgot(Router $router){
        $router->render('auth/forgot',[
            'titulo' => 'Recuperar Contraseña'
        ]);

        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }
    }

    public static function restablecer(Router $router){
        $router->render('auth/restablecer',[
            'titulo' => 'Restablecer Contraseña'
        ]);


        if($_SERVER['REQUEST_METHOD'] === 'POST'){

        }
    }

    public static function mensaje(Router $router){
        $router->render('auth/mensaje',[
            'titulo' => 'Cuenta Creada Exitosamente'
        ]);

        
    }

    public static function confirmar(Router $router){
        $router->render('auth/confirmar',[
            'titulo' => 'Confirma tu Cuenta UpTask'
        ]);     

        
    }
}