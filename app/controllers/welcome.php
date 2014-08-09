<?php
//System : PsychoMVC
//File : welcome.php
//Author : Twiceworld PHP
//Description : Example Controllers
class welcome extends PsychoCommand {
    public function index()
    {
        $this->render("welcome");  //แสดงผล Views welcome
    }
}
