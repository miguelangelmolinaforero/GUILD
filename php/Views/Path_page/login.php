<link rel="stylesheet" href="../../../../GUILD/assets/css/login_styles.css">
<div class="image_background">
<h2 class="text-center ">Inicio de Sesion</h2>
    <div class="login_container">
        <div class="panel">
            <form method="post" action="" name="signin-form">
                <div class="form-element">
                    <label>Usuario</label>
                    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
                </div>
                <div class="form-element">
                    <label>Contraseña</label>
                    <input type="password" name="password" required />
                </div>
                <button type="submit" name="login" value="login">Ingresar</button>
            </form>
            <label style="text-align: center; display: block;">No estás registrado aun?</label>
            <button type="submit"><a href="?controller=path&action=register">Registrar</a></button>
        </div>
    </div>
</div>
<?php
 
 include('../../../db_connection.php');
session_start();
$db=Db::getConnect();

if (isset($_POST['login'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = $db->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo '<p class="error">El usuario o la contraseña son incorrectos, intenta de nuevo</p>';
    } else {
        if (password_verify($password, $result['PASSWORD'])) {
            $_SESSION['user_id'] = $result['id'];
            echo '<p class="success">Bienvenido!'.$result['USERNAME'].'</p>';
            header('Location: ?controller=path&action=index');
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}
 
?>