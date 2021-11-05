<!-- PHP -->

<?php 
        // require_once('db_connection.php');
        // session_start();
        // $id_user = $_SESSION['user_id'];

        // $query = $connection->prepare('SELECT * FROM users WHERE ID = :id_user');
        // $query->bindParam("username", $username, PDO::PARAM_STR);
        // $query->execute();
        // $result = $query->fetch(PDO::FETCH_ASSOC);
    ?>

<!-- HEADER -->
<figure class="logo">
    <h1 class="page_name">
        <a style="text-decoration: none; color: white; " href="?controller=path&action=index">GUILD</a>
    </h1>
</figure>
<nav class="page_navigation">
    <input type="text" name="search_bar" id="search_bar" class="search_bar" placeholder="Busca productos, juegos, más" size="60">
    <ul class="page_options">
        <li><a href="?controller=path&action=categoria">Categorias</a></li>
        <li><a href="">Mis Compras</a></li>
        <li><a href="">Ofertas</a></li>
        <li><a href="?controller=path&action=vender">Vender</a></li>
    </ul>
</nav>
<div class="user_data">
    <div class="session_options">
        <figure class="user_logo">
            <span class="icon-user"></span>
        </figure>
        <h3 class="name_user">
            <a style="text-decoration: none; color: white;" href="?controller=path&action=register">
                Inicia sesion
            </a>
        </h3>
    </div>
    <div class="country_user_section">
        <select class="country_user" name="country_user" id="country_user">
            <option value="Colombia">Colombia</option>
            <option value="Argentina">Argentina</option>
            <option value="Brasil">Brasil</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Mexico">Mexico</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Panamá">Panamá</option>
            <option value="Puerto Rico">Puerto Rico</option>
            <option value="Chile">Chile</option>
        </select>
    </div>
</div>