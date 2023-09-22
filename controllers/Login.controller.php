<?php 

require "./models/User.php";
session_start();

$user = new User();

if ($user->getCredentials($_POST['username'], $_POST['password'])) {
    header("location: /home");
} else {
    $_SESSION['wrongLogin'] = 'wrong';
    header("location: /login");
}