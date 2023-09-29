<?php

require "./database/Database.php";

class Budget
{
    private $pdo;


    public function __construct()
    {
        
        $this->pdo = new Database();
        $this->pdo->connect();
    }

    public function Push_budget($title, $totalBudget, $ownerID)
    {
        $budget = $totalBudget * 100;
        $sql = "INSERT INTO `budgets` (`title`, `totalBudget`, `currentBudget`, `ownerID`) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->connection->prepare($sql);
        $stmt->execute([$title, $budget, $budget, $ownerID]);
    }

    /**
     * this function returns true if there is no other budget with the same title
     * and false if that title is already taken
     */
    public function TitleChecker($title, $id)
    {

        $sql = "SELECT * FROM `budgets` WHERE title=? AND ownerID=?";
        $stmt = $this->pdo->connection->prepare($sql);
        $stmt->execute([$title, $id]);
        $budget = $stmt->fetch();

        

        return $budget;
    }

    /**
     * get all budget of this user
     */
    public function getBudgets($ID)
    {
        $sql = "SELECT title, totalBudget, currentBudget FROM `budgets` WHERE ownerID=?";
        $stmt = $this->pdo->connection->prepare($sql);
        $stmt->execute([$ID]);
        $budget = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $budget;
    }

    /**
     * method for getting the current or total budget
     */
    private function getcurrentOrTotalBudget($ID, $budgetTitle)
    {

        $sql = "SELECT currentBudget, totalBudget FROM `budgets` WHERE ownerID=? AND title=?";
        $stmt = $this->pdo->connection->prepare($sql);
        $stmt->execute([$ID, $budgetTitle]);

        return $stmt->fetch(); 
    }


    
    

    public function resetBudget($ID, $budgetTitle)
    {

        $totalBudget = $this->getcurrentOrTotalBudget($ID, $budgetTitle);

        $sql = "UPDATE `budgets`
        SET currentBudget=?
        WHERE ownerID=? AND title=?";
        $stmt = $this->pdo->connection->prepare($sql);
        $stmt->execute([$totalBudget['totalBudget'], $ID, $budgetTitle]);
    }
    

    /**
     * subtracts the the spend money from the current budget
     */
    public function budgetUpdator($ID, $moneySpend, $budgetTitle)
    {
        $spending = $moneySpend * 100;
        $currentBudget = $this->getcurrentOrTotalBudget($ID, $budgetTitle);
        $currentBudget['currentBudget'] -= $spending;
        $sql = "UPDATE `budgets` 
        SET currentBudget=?
        WHERE ownerID=? AND title=?";

        $stmt = $this->pdo->connection->prepare($sql);
        $stmt->execute([$currentBudget['currentBudget'], $ID, $budgetTitle]);
    }

    /**
     * method for deleting a budget
     */
    public function budgetDeletor($ID, $budgetTitle)
    {
        $sql = "DELETE FROM `budgets` 
        WHERE ownerID=? AND title=?";
        $stmt = $this->pdo->connection->prepare($sql);
        $stmt->execute([$ID, $budgetTitle]);
    }
}
