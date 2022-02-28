<div class="contenedor login">
    <h1 class="upTask">UpTask</h1>
    <p class="tagline">Crea y Administra tus Proyectos</p>

    <div class="contenedor-sm">
        <p class="descripcion-pagina">Iniciar Sesión</p>

        <form action="/" method="POST" class="formulario">
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

            <input type="submit" class="boton" value="Iniciar Sesión">
        
        </form>
        <div class="acciones">
            <a href="/crear">¿Aún no tienes una cuenta? Haz click aquí</a>
            <a href="/forgot">¿Olvidaste tu contraseña?</a>
        </div>
    </div>
</div>