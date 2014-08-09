<?php
//System : PsychoMVC
//File : PsychoCommand.php
//Author : Twiceworld PHP
//Description : URL System class
class PsychoURL {
    public function base_url()
    {
        global $config;
        return $config['base_url'];
    }
    public function base_path()
    {
        global $config;
        return $config['base_path'];
    }
}