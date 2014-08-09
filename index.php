<?php
//System : PsychoMVC
//File : index.php
//Author : Twiceworld PHP
//Description : ไฟล์หลัก
/* 
[หลักการทำงาน]
=> กำหนดตัวแปรหลัก เช่น ชื่อโฟเดอร์ application 
=> จากนั้นโหลด Config เพื่อโหลดตัวแปรตั้งค่าเสริม
=> โหลดไฟล์ต่างๆที่จำเป็นมา
=> เช็ค url ว่าต้องการชี้เป้าหมายไปที่ Controller ตัวไหนและ method อะไร value อะไร
=> ทำการไปยัง controller นั้น
*/
/* 
ตัวแปรหลัก 
ตัวแปร $_BASE_APP คือกำหนดชื่อโฟเดอร์ application ค่า default คือ : app
*/
$_BASE_APP = "app";

//กำหนด Constant ชื่อ DS ค่าเป็นเครื่องหมาย \
define("DS",DIRECTORY_SEPARATOR);

/*
โหลด Config
*/
include_once $_BASE_APP . DS . "config" . DS . "base.php"; //การตั้งค่าหลัก
include_once $_BASE_APP . DS . "system" . DS . "PsychoCommand.php"; //คำสั่งหลัก
include_once $_BASE_APP . DS . "config" . DS . "route.php"; //การตั้งค่า Route
/* โหลดระบบ MVCBootloader */
include_once "bootloader" . DS . "BootAbstract.php";

include_once "bootloader" . DS . "BootLoader.php";

$boot = new BootLoader();

$target = $boot->getInfoFromUrl($_SERVER['REQUEST_URI']); //เป้าหมาย Controller Method และ value


$controller = "";
$method = "";
$val = array();
//แปลง array เป็นตัวแปร
foreach($target as $id => $v)
{
    if(!$id)
    {
        $controller = $v;
    }
    else if($id == 1)
    {
        $method = $v;
    }
    else
    {
        $val[] = $v;
    }
}

//เรียกใช้งาน Controller
include_once $_BASE_APP . DS . "controllers" . DS . $controller . ".php";
$loadController = new $controller();
if(empty($method)) //ถ้าไม่ได้ระบุ method
{
    $loadController->index();
}
else if(count($val) == 0) //ถ้าเรียกแค่ method
{
    $loadController->$method();
}
else
{
    call_user_func_array(array($loadController,$method),$val); 
}