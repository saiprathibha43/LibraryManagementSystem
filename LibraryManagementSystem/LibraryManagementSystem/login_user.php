<?php
error_reporting(E_ERROR | E_PARSE);
$con=mysqli_connect("localhost","root","");
$username=$_POST["validate_username"];
$password=$_POST["validate_password"];
//$q="SELECT * FROM `cwh_database`.`users` WHERE `username`=$username AND `password`=$password;";
//$qres=$con->query($q);
if($con->query("SELECT EXISTS(SELECT * FROM `cwh_database`.`users` WHERE `username`='$username' AND `password`='$password');")==true)
{
    if($username=='user1')
    include 'user1.php';
    else if($username=='user2')
    include 'user2.php';
}
?>