<?php
//System : PsychoMVC
//File : welcome.php
//Author : Twiceworld PHP
//Description : Example Controllers
class welcome extends PsychoCommand {
    public function index()
    {
        $this->view->render("welcome");  //แสดงผล Views welcome
        $query = $this->db->read("member");
        foreach($query as $id => $name)
        {
            echo "|$name|<br>";   
        }
    }
}
