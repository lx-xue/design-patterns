<?php
namespace IMooc\Database;

use IMooc\IDatabase;
class PDO implements IDatabase
{
    protected $conn;
    function connect($host, $user, $passwd, $dbname)
    {
        // TODO: Implement connect() method.
        $this->conn = new \PDO("mysql:host=$host;dbname=$dbname",$user,$passwd,'3306');
    }

    public function query($sql)
    {
        // TODO: Implement query() method.
        return $this->conn->query($sql);
    }

    public function close()
    {
        // TODO: Implement close() method.
        unset($this->conn);
    }


}