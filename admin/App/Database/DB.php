<?php
namespace App\Database;

use PDO;

class DB {

    private $_host = "127.0.0.1";
    private $_database = "schema_name";
    private $_username = "root";
    private $_password = "1";

    public function get_conn() {
        $conn = new PDO("mysql:host=$this->_host;dbname=$this->_database;user=$this->_username;password=$this->_password");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, 0);

        return $conn;
    }

    public function execute($sql){
        $pdo = $this->get_conn();

        return $pdo->query($sql);
    }

}