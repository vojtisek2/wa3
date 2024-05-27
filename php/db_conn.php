<?php
class Database {
    private static $instance;
    private $conn;

    private $servername = "localhost";
    private $username = "root"; //uzivatelske jmeno
    private $password = "password"; //heslo k db
    private $database = "secondhadry"; //jmeno db

    private function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }

    private function __clone() {}

}

$db = Database::getInstance();
$conn = $db->getConnection();

?>
