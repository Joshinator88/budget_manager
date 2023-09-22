<?php

    session_start();
    session_unset();



require "./models/User.php";

$currentUser = new User();


// hashing the password before updating it to the database
$hashedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);

// var_dump($currentUser->getUserName($_POST['username']) !== false);

if ($_POST['submit'] == 'Login') {
    session_destroy();
    header("location: /login");
}

else if ($currentUser->getUserName($_POST['username']) !== false) {
    session_unset();
    $_SESSION['usernameTaken'] = 'wrong';
    header("location: /register");

} else if ($currentUser->getEmail($_POST['email']) !== false) {
    session_unset();
    $_SESSION['emailTaken'] = 'wrong';
    header("location: /register");

} else if (!preg_match("/^[\w._%+-]{1,}@[\w.+-]{1,}\.[a-z]{2,3}$/m", $_POST['email'])) {
    session_unset();
    $_SESSION['emailNotValid'] = 'wrong';
    header("location: /register");

} else if ($_POST['password'] !== $_POST['passwordCheck']) {
    session_unset();
    $_SESSION['passwordsDontMatch'] = 'wrong';
    header("location: /register");
    
} else {
    session_destroy();
    $currentUser->register($_POST['email'], $_POST['username'], $hashedPassword);
}
