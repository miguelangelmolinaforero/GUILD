<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- LINK DEL LOGO -->
    <link rel="shortcut icon" href="../images/logo_pagina_pestania.jpg" type="image/x-icon">
    <!-- INCLUIR CSS -->
    <link rel="stylesheet" href="../assets/css/styles_main_page.css">

    <!-- INLCUIR BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <title>GUILD</title>
</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <figure class="logo">
            <h1 class="page_name">GUILD</h1>
        </figure>
        <nav class="page_navigation">
            <input type="text" name="search_bar" id="search_bar" class="search_bar" placeholder="Busca productos, juegos, más" size="60">
            <ul class="page_options">
                <li><a href="">Categorias</a></li>
                <li><a href="">Favoritos</a></li>
                <li><a href="">Mis Compras</a></li>
                <li><a href="">Ofertas</a></li>
                <li><a href="">Vender</a></li>
            </ul>
        </nav>
        <div class="user_data">
            <div class="session_options">
                <figure class="user_logo">
                    <span class="icon-user"></span>
                </figure>
                <h3 class="name_user"><a href="login.php">Inicia sesion</a></h3>
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
    </header>

    <!-- MAIN - HERO (CONTENIDO PRINCIPAL) -->
    <main class="hero">
        <div id="carouselExampleCaptions" class="carousel slide main_height" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../images/imagen_valorant.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../images/imagen_valorant.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../images/imagen_valorant.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </main>

    <!-- SECCION PLATAFORMAS -->
    <section class="products_platforms_section">
        <h2 class="products_platforms_section_title">PLATAFORMAS</h2>
        <div class="platform_container">
            <div class="platform_info">
                <figure class="platform_logo">
                    <!-- <img width="50" height="50" src="../images/PlayStation-emblema.jpg" alt="loguito de las plataformas"> -->
                    <span class="icon-playstation"></span>
                </figure>
                <div class="platform_data">
                    <h4 class="platform_name">PlayStation</h4>
                    <a href="http://" target="_blank" rel="noopener noreferrer" class="platform_page_link">Ver mas</a>
                </div>
            </div>
            <div class="platform_info">
                <figure class="platform_logo">
                    <!-- <img width="50" height="50" src="../images/windows.png" alt="loguito de las plataformas"> -->
                    <span class="icon-windows"></span>
                </figure>
                <div class="platform_data">
                    <h4 class="platform_name">PC</h4>
                    <a href="http://" target="_blank" rel="noopener noreferrer" class="platform_page_link">Ver mas</a>
                </div>
            </div>
            <div class="platform_info">
                <figure class="platform_logo">
                    <!-- <img width="50" height="50" src="../images/nintendo_logo.png" alt="loguito de las plataformas"> -->
                    <span class="icon-nintendoswitch"></span>
                </figure>
                <div class="platform_data">
                    <h4 class="platform_name">NINTENDO</h4>
                    <a href="http://" target="_blank" rel="noopener noreferrer" class="platform_page_link">Ver mas</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION DE NOTICIAS -->
    <section class="games_news">
        <div class="container">
            <h2 class="games_news_section_title">ULTIMAS <b>NOTICIAS</b></h2>
            <div class="games_news_container">
                <div class="games_news_left">
                    <div class="game_new_container">
                        <figure class="news_logo">
                            <img src="../images/genshin-impact-202092819311747_1.jpg" alt="imagen de la noticia">
                        </figure>
                        <div class="news_data">
                            <h4 class="news_name">Lorem ipsum dolor sit.</h4>
                            <p class="promotional_product_description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatibus tempora, nihil obcaecati quidem facere consectetur itaque facilis.
                            </p>
                        </div>
                    </div>
                    <div class="game_new_container">
                        <figure class="news_logo">
                            <img src="../images/carlos_duty.png" alt="imagen de la noticia">
                        </figure>
                        <div class="news_data">
                            <h4 class="news_name">Lorem ipsum dolor sit.</h4>
                            <p class="promotional_product_description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatibus tempora, nihil obcaecati quidem facere consectetur itaque facilis.
                            </p>
                        </div>
                    </div>
                    <div class="game_new_container">
                        <figure class="news_logo">
                            <img src="../images/genshin_2.jpeg" alt="imagen de la noticia">
                        </figure>
                        <div class="news_data">
                            <h4 class="news_name">Lorem ipsum dolor sit.</h4>
                            <p class="promotional_product_description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa voluptatibus tempora, nihil obcaecati quidem facere consectetur itaque facilis.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="games_new_right">
                    <figure class="news_logo">
                        <img src="../images/genshin_2.jpeg" alt="imagen de la noticia">
                    </figure>
                    <div class="news_data">
                        <h4 class="news_name">Lorem ipsum dolor sit.</h4>
                        <p class="promotional_product_description">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime, assumenda? Expedita architecto quisquam fugit quam alias, magnam sed aliquam incidunt. Error ipsa aut officiis quis numquam quos illo a laborum?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer_line">
            <span class="store_info">
                <ul class="footer_list_options">
                    <h3>Tienda</h3>
                    <li>
                        <a href="" class="footer_option">Ayuda</a>
                    </li>
                    <li>
                        <a href="" class="footer_option">Política de Privacidad</a>
                    </li>
                    <li>
                        <a href="" class="footer_option">Mapa del Sitio</a>
                    </li>
                </ul>
            </span>
            <span class="all_about_us">
                <ul class="footer_list_options">
                    <h3>Acerca de nosotros</h3>
                    <li>
                        <a href="" class="footer_option">Acerca de GUILD</a>
                    </li>
                    <li>
                        <a href="" class="footer_option">SIC</a>
                    </li>
                    <li>
                        <a href="" class="footer_option">PQRS</a>
                    </li>
                </ul>
            </span>
            <div class="social_contacts_container">
                <h3>Contactanos</h3>
                <div class="social_contacts">
                    <span class="icon-facebook2"></span>
                    <span class="icon-instagram"></span>
                    <span class="icon-discord"></span>
                </div>
            </div>
        </div>
        <div class="layman_terms">
            <span>
                <a href="http://" target="_blank" rel="noopener noreferrer">Terminos y condiciones</a>
             </span>
            <span><a href="mailto:aaaaa@gmail.com">Correo: aaaaa@gmail.com</a></span>
            <span>Derechos Reservados GUILD © 2021</span>
        </div>
    </footer>

    <!-- <img src="../images/main_page_project_design.png" alt=""> -->

    <!-- <div class="grid_container">
        <div class="grid_item"></div>
        <div class="grid_item"></div>
        <div class="grid_item"></div>
        <div class="grid_item_3"></div>
    </div> -->

</body>

</html>