<?php

function connexionToSQL(){
    try{
        $cnx=new PDO("mysql:host=localhost;dbname=electra",'root','');
    }catch (PDOException $e){
        echo " erreur ".$e->getMessage();
        exit;
    }
    return $cnx;
}
