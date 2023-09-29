<?php

session_start(); 
require_once "./includes/header.php";

hoofd("register");

?>

    <form class="w-50 mt-5 m-auto border border-info rounded p-2 pt-3 pb-4" action="/processing/registration" method="POST">
        
        <h1 class="m-2">Register</h1>

        <span class="inactive <?php echo $_SESSION['usernameTaken']; ?>">This username is already taken</span>
        <div class="form-group m-1">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Username">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>

        <span class="inactive <?php echo $_SESSION['emailTaken']; ?>">there is already a user registered with the same Email</span>
        <span class="inactive <?php echo $_SESSION['emailNotValid']; ?>">Please enter a valid email adress</span>
        <div class="form-group m-1">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        
        <span class="inactive <?php echo $_SESSION['passwordsDontMatch']; ?>">These passwords don't match</span>
        <div class="form-group m-1">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password"  name="password" placeholder="Password">
        </div>

        <div class="form-group m-1">
            <label for="passwordCheck">Repeat password</label>
            <input type="password" class="form-control" id="passwordCheck"  name="passwordCheck" placeholder="Repaeat password">
        </div>

        <div class="form-group m-2">
        <input type="submit" class="btn btn-primary w-100" type="submit" name="submit" id="sumit" value="Register">
        <input type="submit" class="btn btn-white w-100 border mt-2" type="submit" name="submit" id="sumit" value="Login">
        </div>

    </form>



    
</body>
</html>