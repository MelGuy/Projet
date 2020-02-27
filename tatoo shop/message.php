<?php
include "bdd.php";

if($_POST){
    
    if(!empty($_POST['mail']) && !empty($_POST['message'])){
         //$result = true;
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        $object = $_POST['object'];
        $message = $_POST['message'];
    
        $req = $bdd->prepare(
            "INSERT INTO contact (name, mail, object, message) 
            VALUES (?, ?, ?, ?)"
            );
        
            $sendMessage = $req->execute([$name, $mail, $object, $message]);
            header("location:index.php");
            
        }

}





