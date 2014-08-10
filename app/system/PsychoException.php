<?php
//System : PsychoMVC
//File : PsychoException.php
//Author : Twiceworld PHP
//Description : Error report
include_once "PsychoSystemCommand.php";
class PsychoException {
    public $error;
    public $error_page = "error.php"; //ชื่อ view error
    
    //ERROR TEXT
    public $error_txt = array(
        "404_CONTROLLER" => "ไม่พบ Controller นี้ในระบบ",
        "404_METHOD" => "ไม่พบ method นี้ในคลาส"
    );
    
    
    public function __construct($error = "")
    {
        $this->error = $this->error_txt[$error];
        $this->render_error();
    }
    
    public function render_error()
    {
        include_once "page" . DS . $this->error_page;
    }
}
    