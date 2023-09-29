<?php

session_start();
require "./includes/header.php";
if (!isset($_SESSION['currentUser'])) {
    session_destroy();
    header("location: /login");
    die();
}
hoofd($_SESSION['currentUser']['name']);

?>

    <div class="container">
        <h2>$title</h2>
        <h3>$budget</h3>
        <form method="post">
            <span class="inactive <?= $_SESSION['usedTitle'] ?>">Please give your budget a unique name</span>
            <span class="inactive <?= $_SESSION['noTitle'] ?>">Please give your budget a name</span>
            <label for="budgetTitile">Budget Title</label>
            <input type="text" name="budgetTitle" id="budgetTitle">

            <span class="inactive <?= $_SESSION['noBudget'] ?>">your budget needs to be greater than 0</span>
            <label for="budgetTitile">Budget</label>
            <input type="number" name="budgetAmount" id="budgetAmount" step="0.01">

            <input type="submit" name="addBudget" id="addBudget" value="Add budget">
        </form>
    </div>

</body>
</html>