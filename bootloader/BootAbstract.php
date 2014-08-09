<?php
//System : BootAbstract
//File : BootAbstract.php
//Author : Twiceworld PHP
//Description : BootAbstract Class
abstract class BootAbstract {
    /*
    Method Name : getInfoFromUrl
    Description : Get Controller name target from url.
    */
    /*
    Return Value Description
    Type : Array
    Key : Controller , Method and Value
    example url input = www.abc.com/member/get_user/1
    return
    array(
        "0" => "member",
        "1" => "get_user",
        "2" => "1"
    );
    example url input = www.abc.com/
    return
    array(
        "0" => "DEFAULT_CONTROLLER"
    );
    example url input = member/get_user/abc/123456
    return
    array(
        "0" => "member",
        "1" => "get_user",
        "2" => "abc",
        "3" => "123456"
    );
    */
    abstract public function getInfoFromUrl($request_url = "");
}