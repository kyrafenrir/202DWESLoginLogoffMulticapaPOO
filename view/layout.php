<?php
    /**
    * @author Carlos García Cachón
    * @version 1.3
    * @since 10/01/2024
    * @copyright Todos los derechos reservados a Carlos García
    * 
    * @Annotation Proyecto LoginLogoffTema5 - Parte de 'Index' 
    * 
    */
   require_once 'config/configAPP.php';
    
    if (!isset($_COOKIE['idioma'])) { // Comprobamos si la cookie esta declarada
        setcookie("idioma", "SP", time() + 2592000); // En caso negativo la creamos y ponemos el valor por defecto
        header('Location: index.php'); // Recargamos la página con el nuevo idioma
        exit();
    }

    if (isset($_REQUEST['botonIdioma'])) { // Comprobamos si el usuario a pulsado algún botón de idioma
        setcookie("idioma", $_REQUEST['botonIdioma'], time() + 2592000); // En caso afirmativo creamos la cookie y la cargamos con el valor seleccionado y ponemos una fecha de caducidad de 1 mes
        header('Location: index.php'); // Recargamos la página con el nuevo idioma
        exit();
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="./webroot/css/style.css">
        <title>Erika Martínez Pérez - DWES</title>
        <style>
            main{
                text-align: center;
            }
            
            main a{
                font-size: 2rem;
                font-weight: bold;
                text-decoration: none;
            }
            
            img{
                margin-bottom: 18px;
            }
            
            main a{
                color: white;
            }
            
            footer a{
                color: #999;
            }
            
            input:first-child{
                margin-right: 6px;
                background-image: url('./webroot/images/ES.png');
            }
            
            input:nth-child(2){
                background-image: url('./webroot/images/UK.png');
            }
            
            input{
                margin-top: 18px;
                margin-bottom: 18px;
                padding: 0;
                width: 30px; height: 22px;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>TEMA 5: APLICACIÓN LOGIN / LOGOFF</h1>
        </header>
        <main>
            <?php require_once $view[$_SESSION['paginaEnCurso']]; ?>
        </main>
        <footer>
            <p>2023-2024 © All rights reserved. <a href="https://github.com/kyrafenrir/202DWESLoginLogoffMulticapaPOO">Erika Martínez Pérez</a></p>
        </footer>
    </body>
</html>