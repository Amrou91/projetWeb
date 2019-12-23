
<?php

class UsersManagers{

 function connexion(){
 	return  new PDO('mysql:host=localhost;dbname=projetWeb', 'root', 'root');
 }
/*
 function findAll(){
     $persos = [];
     $db= $this->connexion();
     $request = $db->query("select * from users");
     while ($donnees = $request->fetch(PDO::FETCH_ASSOC)){
         $persos[] = $donnees;
     }
     return $persos;
    } 
*/
function add($nom,$prenom, $email,$password){

    $db = $this->connexion();
    $q = $db->prepare('insert into users (nom,prenom,email,password) values (:nom,:prenom,:email,:password)');
    $q->bindValue(":nom",$nom,PDO::PARAM_STR);
    $q->bindValue(":prenom",$prenom,PDO::PARAM_STR);
    $q->bindValue(":email",$email,PDO::PARAM_STR);
    $q->bindValue(":password",$password,PDO::PARAM_STR);
    $q->execute();
   
    }
 
function connecter($email, $password){
   $db= $this->connexion();
   $request = $db->query("SELECT * from users where email='".$email."' and password='".$password."'"); 
   return $request->fetch(pdo::FETCH_ASSOC);
  }

  function connecter1($email){
    $db= $this->connexion();
    $request = $db->query("SELECT * from users where email='".$email."'"); 
    return $request->fetch(pdo::FETCH_ASSOC);
   }
}