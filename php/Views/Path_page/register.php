<link rel="stylesheet" href="../../../../GUILD/assets/css/login_styles.css">
<div class="image_background">
<h2 class="text-center ">Registro</h2>
    <div class="login_container">
        <div class="panel">
            <form method="post" action="../../../../GUILD/php/Model/registration.php" name="signup-form">
                <!-- <form method="post" action="registration.php" name="signup-form"> -->
                <div class="form-element">
                    <label>Usuario</label>
                    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
                </div>
                <div class="form-element">
                    <label>Email</label>
                    <input type="email" name="email" required />
                </div>
                <div class="form-element">
                    <label>Contraseña</label>
                    <input type="password" name="password" required />
                </div>
                <button style="display: block;" type="submit" name="register" value="register">Registrar</button>
            </form>
            <label style="display: block;" for="ingresar">Ya tienes una cuenta?</label>
            <button style="color: white;" id="ingresar" type="submit"><a href="?controller=path&action=login">Ingresar</a></button>
        </div>
    </div>
</div>
<!-- <button type="submit"><a href="login.php">Ingresar</a></button> -->