<?php

namespace com\leoFountas\currecyConverter\dao;

use mysqli, mysqli_result;

class DAO
{
    private string $servername = "localhost";
    private string $username = "root";
    private string $password = "";
    private string $databaseName = "currency_converter";
    protected mysqli $conn;


    function connect(): void
    {
        // Create connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->databaseName);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    function exec($sql): mysqli_result
    {
        //not safe : better use prepare statment in each individual dao
        //cound have sql inhjection if no variables are filtered
        return $this->conn->execute_query($sql);
    }

    function close(): void
    {
        $this->conn->close();
    }
}
