<div class="contenedor crear">
<?php include_once __DIR__ . "/../templates/nombre-sitio.php" ;?> 
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Crea tu cuenta en UpTask</p>

        <form action="crear" method="POST" class="formulario">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input type="text"
                       id="nombre"
                       placeholder="Tu nombre"
                       name="nombre"
                />
            </div>
            <div class="campo">
                <label for="email">Email</label>
                <input type="email"
                       id="email"
                       placeholder="Tu Email"
                       name="email"
                />
            </div>

            <div class="campo">
                <label for="contrasena">Contraseña</label>
                <input type="password"
                       id="contrasena"
                       placeholder="Tu contraseña"
                       name="contrasena"
                />
            </div>

            <div class="campo">
                <label for="contrasena2">Repetir Contraseña</label>
                <input type="password"
                       id="contrasena2"
                       placeholder="Repite tu contraseña"
                       name="contrasena2"
                />
            </div>

            <input type="submit" class="boton" value="Crear Cuenta">
        
        </form>
        <div class="acciones">
            <a href="/  ">¿Ya tienes una Cuenta? Iniciar Sesión</a>
            <a href="/forgot">¿Olvidaste tu contraseña?</a>
        </div>
    </div>
</div>