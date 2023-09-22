<?php 

require_once "./includes/header.php";
session_start();


?>

    <h1>login</h1>

    <form action="/processing/login" method="POST">

        <span class="inactive <?php echo $_SESSION['wrongLogin'] ?>">There is no registered user with that combination password and username</span>
        <label for="username">Username</label>
        <input type="text" name="username" id="username">

        <label for="password">password</label>
        <input type="password" name="password" id="password">
        
        <input type="submit" name="submit" value="Login">
    
    </form>
</body>
</html>