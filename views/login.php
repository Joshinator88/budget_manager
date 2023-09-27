<?php 

require_once "./includes/header.php";
session_start();
hoofd("Login");



?>


    
        <form class="w-50 mt-5 m-auto border border-info rounded p-1" action="/processing/login" method="POST">
            <h1 class="m-2">Login</h1>

            <span class="inactive <?php echo $_SESSION['wrongLogin'] ?>">There is no registered user with that combination password and username</span>

            <div class="form-group m-1">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter username">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>

            <div class="form-group m-1">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password"  name="password" placeholder="Password">
            </div>

            <div class="form-group m-2">
            <button type="submit" type="submit" name="submit" id="sumit" class="btn btn-primary w-100">Login</button>
            <button type="submit" type="submit" name="submit" id="sumit" class="btn btn-white w-100 border mt-2">Register</button>
            </div>
        </form>

        

</body>
</html>