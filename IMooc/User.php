<?php

namespace IMooc;

//数据对象模式(ORM映射)
use IMooc\Database\MySQLi;

class User
{
    /**********属性(对应表字段)**************/

    protected $db;
    public $id;
    public $name;
    public $mobile;
    public $regtime;

    function __construct($id)
    {
        $this->db = new MySQLi();
        $this->db->connect('127.0.0.1','root','root','test');
        $res = $this->db->query("select * from user limit 1");
        $data = $res->fetch_assoc();
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->mobile = $data['mobile'];
        $this->regtime = time();


    }


    function __destruct()
    {
        // TODO: Implement __destruct() method.

    }

}