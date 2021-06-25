<?php
class DbConnect {
    private $hostname = "localhost";
    private $dbname = "php-test";
    private $conn;

    public function connect() {
        $thi->conn = pg_connect("host = $hostname dbname = $dbname");
         
        // return database handler
        return $this->conn;
    }
}
?>
