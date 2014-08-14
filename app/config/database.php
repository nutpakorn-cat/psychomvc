<?php
//System : PsychoMVC
//File : database.php
//Author : Twiceworld PHP
//Description : Database Setting
/*
ตั้งค่าฐานข้อมูล
ก่อนใช้ในส่วนนี้กรุณาตั้งค่า Switch ของ database เป็น TRUE ก่อน โดยตั้งที่ไฟล์ switch.php
ค่า DEFAULT
$condb['driver'] = "mysql"; //Driver ของฐานข้อมูล
$condb['host'] = "localhost"; //Host ของฐานข้อมูล
$condb['name'] = ""; //Username ฐานข้อมูล
$condb['password'] = ""; //รหัสผ่านฐานข้อมูล
$condb['db'] = ""; //ฐานข้อมูล
$condb['charset'] = "utf-8"; //การเข้ารหัส 
*/
$condb['driver'] = "mysql"; //Driver ของฐานข้อมูล
$condb['host'] = "localhost"; //Host ของฐานข้อมูล
$condb['name'] = "root"; //Username ฐานข้อมูล
$condb['password'] = "123456"; //รหัสผ่านฐานข้อมูล
$condb['db'] = "mvcdb"; //ฐานข้อมูล
$condb['charset'] = "UTF8"; //การเข้ารหัส 