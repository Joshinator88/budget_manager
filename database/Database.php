<?php

// hai

class Database
{
    public $connection;
    private $_host, $_username, $_password, $_database;

    // method to create a database connection
    public function connect()
    {

        $iniInfo = parse_ini_file('config.ini');
            
        if (!empty($iniInfo) && $iniInfo !== null) {
            try {
                $this->DatabaseLogin($iniInfo);
                
                $this->connection = new PDO("mysql:host=$this->_host;dbname=$this->_database", $this->_username, $this->_password);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                echo "connected successfully";
            } catch (PDOException $e) {
                echo "Connection failed " . $e->getMessage();
            }
        }
    }


    private function DatabaseLogin($detailfile)
    {
        $this->_host = $detailfile['host'];
        $this->_database = $detailfile['database'];
        $this->_username = $detailfile['username'];
        $this->_password = $detailfile['password'];
    }
}
