<?php

require "./views/home.php";
require "./models/Budget.php";
require "./includes/Variables.php";
require "./includes/functions.php";


    // unset($_POST['addBudget']);
    $Budget = new Budget();
if (isset($_POST['addBudget'])) {
    unset($_SESSION['usedTitle'], $_SESSION['noBudget'], $_SESSION['noTitle']);
        
    if (isset($_POST['budgetTitle'], $_POST['budgetAmount'])) {
        if ($_POST['budgetTitle'] !== "") {
            if ($_POST['budgetAmount'] > 0) {
                if (!$Budget->TitleChecker($_POST['budgetTitle'], $_SESSION['currentUser']['ID'])) {
                        $Budget->Push_budget($_POST['budgetTitle'], $_POST['budgetAmount'], $_SESSION['currentUser']['ID']);
                        unset($_POST['budgetTitle'], $_POST['addBudget'], $_POST['budgetAmount']);
                } else {
                    $_SESSION['usedTitle']  = "wrong";
                }
            } else {
                $_SESSION['noBudget']  = "wrong";
            }
        } else {
            $_SESSION['noTitle']  = "wrong";
        }
    }
    unset($_POST['addBudget']);
    ?>
<script> location.replace("/home"); </script>
    <?php
}


    $budgets = $Budget->getBudgets($_SESSION['currentUser']['ID']);
?>

<div class="container row m-auto">


<?php
foreach ($budgets as $budget) {

    /**
     * creating the budget sections
     */
    ?>
    <div class="card m-3" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= $budget['title'] ?></h5>
            <h6 class="card-subtitle mb-2 text-muted">There is: $<?= ($budget['currentBudget'] / 100) ?> left</h6>
            <p class="card-text">you've used $<?= ($budget['totalBudget'] - $budget['currentBudget']) / 100 ?></p>
            <form method="post">
                <input type="hidden" name="title" id="title" value="<?= $budget['title'] ?>">
                <input type="number" step="0.01" name="spendValue" id="spendValue">
                <input type="submit" name="spendings" id="spendings" value="send">
                <input type="submit" name="reset" id="reset" value="reset">
                <input type="submit" name="remove" id="remove" value="delete">
            </form>
        </div>
    </div>


    <?php
}


/**
 * adding functionality for removing a budget
 */
if (isset($_POST['remove'])) {
    $Budget->budgetDeletor($_SESSION['currentUser']['ID'], $_POST['title']);
    ?>
    <script> location.replace("/home"); </script>
    <?php
}

/**
 * functionality for refilling the budget to 100%
 */
if (isset($_POST['reset'])) {
    $Budget->resetBudget($_SESSION['currentUser']['ID'], $_POST['title']);
    unset($_POST['reset']);
    ?>
    <script> location.replace("/home"); </script>
        <?php
}


/**
 * functionality for updating the budget with the last bought stuff
 */
if (isset($_POST['spendings'])) {
    if ($_POST['spendValue'] !== "") {
        $Budget->budgetUpdator($_SESSION['currentUser']['ID'], $_POST['spendValue'], $_POST['title']);
        unset($_POST['spendValue'], $_POST['title'], $_POST['spendings']);
    } 
    ?>
    <script> location.replace("/home"); </script>
    <?php
}

?>

</div>
