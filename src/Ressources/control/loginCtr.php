<?php
session_start();
include "../config/dbConnect.php";
include "../manager/UsersManagers.php";
$_SESSION['email']="";


if($_GET['action'] == 'connexion')

{   
    $email      = $_POST['username'];
    $password        = $_POST['password'];
   
    $manger = new UsersManagers();
    $res=$manger->connecter($email,$password);

    
if($res){
    header("Location:../Views/home.php");
    $_SESSION['email']=$email;}
else {
	header("Location:../Views/login.php?msg=error");
   } 
}