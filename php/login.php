
<link rel="stylesheet" href="../php/grafi.css">
<form method="post" action="" name="signin-form">
    <div class="form-element">
        <label>Username</label>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="login" value="login">Log In</button>
</form>
<h3 style="text-align: center;">No estás registrado aun? <a href="register.php">registrar</a></h3>
<?php
 
include('../db_connection.php');
session_start();
 
if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo '<p class="error">Username password combination is wrong!</p>';
    } else {
        if (password_verify($password, $result['PASSWORD'])) {
            $_SESSION['user_id'] = $result['id'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
            header('Location: main_page.php');
        } else {
            echo '<p class="error">Username password combination is wrong!</p>';
        }
    }
}
 
?>