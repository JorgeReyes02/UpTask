<div class="contenedor forgot">
<?php include_once __DIR__ . "/../templates/nombre-sitio.php" ;?> 
    <div class="contenedor-sm">
        <p class="descripcion-pagina">Recupera tu acceso a UpTask</p>

        <form action="/forgot" method="POST" class="formulario">
            <div class="campo">
                <label for="email">Email</label>
                <input type="email"
                       id="email"
                       placeholder="Tu Email"
                       name="email"
                />
            </div>

            <input type="submit" class="boton" value="Enviar Instrucciones">
        
        </form>
        <div class="acciones">
            <a href="/">¿Ya tienes una Cuenta? Iniciar Sesión</a>
            <a href="/crear">¿Aún no tienes una cuenta? Haz click aquí</a>
        </div>
    </div>
</div>