<?php
//System : PsychoMVC
//File : PsychoDB.php
//Author : Twiceworld PHP
//Description : Database class
class PsychoDB {
    protected $db_obj; //Database object
    protected $info = array(); //เก็บข้อมูลต่างๆเอาไว้
    protected $config; //การตั้งค่าต่างๆ
    //ส่วนของ Magic function
    public function __construct()
    {
        global $config;
        global $switch;
        global $condb;
        $this->config = $config;
        if($switch['database']) //ถ้าเปิดโหมดฐานข้อมูล
        {
            try{ 
                //ทำการ Connect
                $this->db_obj = new PDO("{$condb['driver']}:host={$condb['host']};dbname={$condb['db']};", $condb['name'], $condb['password'], array( 
                PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES ' . $condb['charset'] 
                )); 
            }catch (Exception $e){ 
                $ex = new PsychoException("<h1>ERROR DB : ".$e->getMessage()."</h1>");
            } 
        }
    }
    public function __get($id)
    {
        return $this->info[$id];   
    }
    public function __set($id,$value)
    {
        return $this->info[$id] = mysql_real_escape_string($value);
    }
    //READ
    public function read($table = "")
    {
        if(!empty($this->info["order_by"]) && !empty($this->info["order_type"]))
        {
            $product = "SELECT * FROM " . mysql_real_escape_string($table) . " ORDER BY " . $this->info["order_by"] . " " . $this->info["order_type"] . ";";
        }
        else
        {
            $product = "SELECT * FROM " . mysql_real_escape_string($table) . ";";   
        }
        return $this->db_obj->query($product)->fetch(PDO::FETCH_ASSOC);
    }
}