<div class="contenedor restablecer">
<?php include_once __DIR__ . "/../templates/nombre-sitio.php" ;?> 

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Coloca Tu nueva Contraseña</p>

        <form action="/" method="POST" class="formulario">
        
            <div class="campo">
                <label for="contrasena">Contraseña</label>
                <input type="password"
                       id="contrasena"
                       placeholder="Tu contraseña"
                       name="contrasena"
                />
            </div>

            <input type="submit" class="boton" value="Iniciar Sesión">
        
        </form>
        <div class="acciones">
            <a href="/crear">¿Aún no tienes una cuenta? Haz click aquí</a>
            <a href="/forgot">¿Olvidaste tu contraseña?</a>
        </div>
    </div>
</div>