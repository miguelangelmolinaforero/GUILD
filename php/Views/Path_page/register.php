
<!-- <link rel="stylesheet" href="../../../../GUILD/assets/css/grafi.css"> -->
<form method="post" action="../.././Model/registration.php" name="signup-form">
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
    <button type="submit" name="register" value="register">Register</button>
</form>
<button type="submit"><a href="../.././Model/login.php">Ingresar</a></button>
<!-- <button type="submit"><a href="login.php">Ingresar</a></button> -->
