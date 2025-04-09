<?php
$_SERVER ="sql102.infinityfree.com	
";
$username ="if0_38684625";
$password = "4SIFI7YZ3SAgT";
$dbname ="if0_38684625_hmdatabase	";
$conm - mysqli_connect($_SERVER,$username,$password,$dbname);

if(!$conm){
    die("connection failed:".mysqli_connect_error());
}

?>