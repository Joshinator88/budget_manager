<?php

require_once "./database/Database.php";
session_start(); 

$database = new Database();

$database->connect();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./../includes/style.css">
</head>
<body>
<h1>Register</h1>

<?php var_dump($_SESSION) ?>


<form action="/processing" method="POST">

    <span class="inactive <?php echo $_SESSION['usernameTaken']; ?>">This username is already taken</span>
    <label for="username">Username</label>
    <input type="text" name="username" id="username">

    <span class="inactive <?php echo $_SESSION['emailTaken']; ?>">there is already a user registered with the same Email</span>
    <span class="inactive <?php echo $_SESSION['emailNotValid']; ?>">Please enter a valid email adress</span>
    <label for="email">Email:</label>
    <input type="text" name="email" id="email">

    <span class="inactive <?php echo $_SESSION['passwordsDontMatch']; ?>">These passwords don't match</span>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">

    <label for="passwordCheck">Repeat Password:</label>
    <input type="password" name="passwordCheck" id="passwordCheck">

    <input type="submit" name="submit" id="sumit" value="Register">

</form>
    
</body>
</html>