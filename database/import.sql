DROP DATABASE IF EXISTS `budget_manager`;

CREATE DATABASE `budget_manager`;

USE `budget_manager`;

CREATE TABLE `users` (
    ID MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL
);

CREATE TABLE `budgets` (
    title VARCHAR(50) NOT NULL,
    totalBudget MEDIUMINT NOT NULL,
    currentBudget MEDIUMINT NOT NULL,
    ownerID MEDIUMINT NOT NULL
)