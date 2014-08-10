<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>PsychoMVC - WELCOME</title>
    <style>
    /*
    [Simple CSS] By Twiceworld PHP
    */
    body {
        background-color: #f2f2f2;    
    }
    div.block {
        border-radius: 34px 34px 34px 34px;
        -moz-border-radius: 34px 34px 34px 34px;
        -webkit-border-radius: 34px 34px 34px 34px;
        -webkit-box-shadow: 0px 0px 130px 0px rgba(0,0,0,0.89);
        -moz-box-shadow: 0px 0px 130px 0px rgba(0,0,0,0.89);
        box-shadow: 0px 0px 130px 0px rgba(0,0,0,0.89);
    }
    div.container {
        padding-top:1%;
        padding-left: 25%;
        padding-right: 25%;
    }
    .text-center {
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="block">
            <h1 class="text-center">PsychoMVC</h1>
            <hr>
            <p>&nbsp;&nbsp;ข้อมูลระบบ</p>
            <hr>
            <p>&nbsp;&nbsp;เวอร์ชั่น : <?=$this->sys_cmd->version()?></p>
            <p>&nbsp;&nbsp;แก้ไขล่าสุด : <?=$this->sys_cmd->last_date_build()?></p>
            <p>&nbsp;&nbsp;ผู้พัฒนา : <?=$this->sys_cmd->dev()?></p>
            <hr>
            <br>
        </div>
    </div>
</body>
</html>