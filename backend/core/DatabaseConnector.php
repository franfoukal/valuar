<?php
    

    class DatabaseConnector
    {
        private $config;
        private $dbConnection = null;

        public function __construct()
        {
            $this->config = include("backend/utils/config.php");

            $host = $this->config->DB_HOST;
            $port = $this->config->DB_PORT;
            $db   = $this->config->DB_DATABASE;
            $user = $this->config->DB_USERNAME;
            $pass = $this->config->DB_PASSWORD;

            try {
                $this->dbConnection = new \PDO(
                    "mysql:host=$host;port=$port;charset=utf8mb4;dbname=$db",
                    $user,
                    $pass,
                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
                );
            } catch (\PDOException $e) {
                exit($e->getMessage());
            }
        }

        public function getConnection()
        {
            return $this->dbConnection;
        }
    }


?>