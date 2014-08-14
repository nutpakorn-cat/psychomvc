<?php
//System : PsychoMVC
//File : PsychoException.php
//Author : Twiceworld PHP
//Description : Error report
include_once "PsychoSystemCommand.php";
class PsychoException {
    public $error;
    public $error_page = "error.php"; //ชื่อ view error
    
    
    
    public function __construct($error = "")
    {
        $this->error = $error;
        $this->render_error();
    }
    
    public function render_error()
    {
        include_once "page" . DS . $this->error_page;
    }
}
    