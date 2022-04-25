<?php
include_once "Function.php";

$userobj = new user;
$First_name =  $_REQUEST["First_name"];
$Second_name =  $_REQUEST["Second_name"];
$Email =  $_REQUEST["Email"];
$User_ID =  $_REQUEST["User_ID"];
$Phone_number =  $_REQUEST["Phone_number"];
$User_type = $_REQUEST["User_type"];


header ("location:User list.php"); 
?>