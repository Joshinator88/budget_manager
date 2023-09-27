<?php

function hoofd ($title) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./includes/style.css">
        <title><?= $title; ?></title>
        <script src="./includes/script.js"></script>
        
    </head>
    <body>
        <header>
            <div>
                <h1>JB</h1>
            </div>
    
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
    
            <ul>
                <li><a href="/login">Login</a></li>
                <li><a href="/register">Register</a></li>
            </ul>
    
        </header>

        <?php
}

?>


