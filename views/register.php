<?php

session_start(); 
require_once "./includes/header.php";

hoofd("register");

?>



<h1>Register</h1>


<form action="/processing/registration" method="POST">

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
    <input type="submit" name="submit" id="sumit" value="Login">


</form>
    
</body>
</html>