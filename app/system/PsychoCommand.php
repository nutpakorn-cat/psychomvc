<?php
//System : PsychoMVC
//File : PsychoCommand.php
//Author : Twiceworld PHP
//Description : Command System class
/*
include zone
*/
include_once "PsychoURL.php";
include_once "PsychoView.php";
include_once "PsychoSystemCommand.php";
class PsychoCommand {
    public $url;
    public $sys_cmd;
    public $view;
    public function __construct()
    {
        $this->url = new PsychoURL();
        $this->sys_cmd = new PsychoSystemCommand();
        $this->view = new PsychoView($this->url);
    }
}