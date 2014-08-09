<?php
//System : PsychoMVC
//File : PsychoCommand.php
//Author : Twiceworld PHP
//Description : Command System class
/*
include zone
*/
include_once "PsychoURL.php";
class PsychoCommand extends PsychoURL {
    
    public function render($view = "")
    {
        include_once $this->base_path() . "app" . DS . "views" . DS . $view . ".php";
    }
}