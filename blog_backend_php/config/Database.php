<?php

    class Database {
        //DB Parameters for dev environment
        private $host = 'localhost';
        private $db_name = 'blog';
        private $username = 'root';
        private $password = '12345';
        private $pdo;

        // DB Connect
        public function connect() {
            try {
               $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db_name;
               $this->pdo = new PDO($dsn, $this->username, $this->password);
               $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $error) {
                echo 'Connection Error: ' . $error->getMessage();
            }
            return $this->pdo;
        }
    }

?>