<?php

ob_start();
require('./sheep_core/config.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LP</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="holder">
        <header id="header">
            <div class="container">
                <nav class="navbar">
                    <div class="nav-bar">
                        <a href="index.php" class="logo" title="LP Derio">
                            LP<span style="color: #333;">Derio</span>
                        </a>
                        <button class="menu-celular">
                            <span>
                                <i class="fas fa bars"></i>
                            </span>
                        </button>
                    </div>

                    <div class="menu-principal">
                        <ul class="ul-menu">
                            <li class="item-menu">
                                <a href="#" class="link-menu" title="Home">Home</a>
                            </li>
                            <li class="item-menu">
                                <a href="#" class="link-menu" title="Cursos">Cursos</a>
                            </li>
                            <li class="item-menu">
                                <a href="#" class="link-menu" title="Blog">Blog</a>
                            </li>
                            <li class="item-menu">
                                <a href="#" class="link-menu" title="Cases">Cases</a>
                            </li>
                            <li class="item-menu">
                                <a href="#" class="link-menu" title="Canal">Canal</a>
                            </li>
                        </ul>
                    </div>

                    <div class="header-btns">
                        <a href="" class="btn btn-login" title="Login">Login</a>
                        <a href="" class="btn btn-login" title="EAD">EAD</a>
                    </div>
                </nav>

                <div class="banner">
                    <div class="banner-esquerdo">
                        <h1 class="banner-titulo">
                            Seja um programador
                            <span>completo do backend frontend</span>

                        </h1>
                        <p class="banner-texto">Aprendda a programar com Derio Matheus</p>

                        <form action="filtros/criar.php" method="post" class="header-form">
                            <div class="form-item">
                                <input type="email" name="email" id="email" class="form-control" placeholder="digite seu melhor email">
                                <button class="submit-btn">Participe</button>
                            </div>
                        </form>

                        <ul class="social-links">
                            <li>
                                <a href="" title="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" title="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="" title="Instagram">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>

                    </div>

                    <div class="banner-direto">
                        <img src="assets/img/bg.jpg" alt="EAD Derio" srcset="">
                    </div>
                </div>
            </div>
        </header>
    </div>
</body>
<script src="assets/js/scripts.js"></script>

</html>