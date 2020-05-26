<?php
    class db{
        // Properties
        private $dbhost = 'sql10.freemysqlhosting.net';
        private $dbuser = 'sql10343323';
        private $dbpass = 'K13WhJgcQ2';
        private $dbname = 'sql10343323';
        // Connect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }
