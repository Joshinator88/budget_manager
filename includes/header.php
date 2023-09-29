<?php

function hoofd($title)
{
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="./includes/style.css">
        <title><?= $title; ?></title>
        <script src="./includes/script.js" defer></script>
        
    </head>
    <body>
        <header>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/home">Budget_Manager</a>
            <button class="navbar-toggler" id="hamburgerBtn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>

                
            </button>
            <div class="inactive container" id="burgerItems">
                <ul class="burgerList m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                </ul>
            </div>

            
            

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>

                </ul>
            </div>
        
        
            
        </header>

        <?php
}

?>
