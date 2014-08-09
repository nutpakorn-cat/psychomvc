<?php
//System : BootAbstract Version Custom(PsychoMVC)
//File : BootLoader.php
//Author : Twiceworld PHP
//Description : BootLoader main class
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
class BootLoader extends BootAbstract {
    public function getInfoFromUrl($request_url = "")
    {
        global $config; //Set variable $config to a global variable
        global $route; 
        $request_url = strtolower($request_url);
        /* 
        cutFolderName Return
        Count = 1 => This system doesn't contain folder
        Count = 2 => This system is contains in folder
        */
        $cutFolderName = explode($config['folder_name'],$request_url);
        if(count($cutFolderName) == 1)
        {
            $urlWithoutFolder = $request_url;
        }
        else
        {
            $urlWithoutFolder = $cutFolderName[1];
        }
        /*
        urlWithoutIndex return
        count = 1 => use mod rewrite
        */
        $urlWithoutIndex = explode($config['index_file'],$urlWithoutFolder);
        if(count($urlWithoutIndex) == 1)
        {
            $urlAfterCutIndex = substr(strtolower($urlWithoutFolder),1,strlen($urlWithoutFolder));
        }
        else
        {
            $urlAfterCutIndex = substr(strtolower($urlWithoutIndex[1]),1,strlen($urlWithoutIndex[1]));
        }
        $url = explode("/",$urlAfterCutIndex);
        //init
        $target = array();
        foreach($url as $id => $value)
        {
            if(!empty($value)) 
            {
                if($id == 1) //method
                {
                    $target[] = $value;
                }
                else //value
                {
                    $target[] = $value;
                }
            }
            else if(empty($value) && !$id)
            {
                if(empty($value))
                {
                    $target[] = $route['base_controller'];
                }
            }
        }
        return $target;
    }
}