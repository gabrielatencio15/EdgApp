<?php

function connect(){
    try {
        $connect = new PDO('mysql:host=localhost;port=8889;dbname=EDG_App;charset=utf8;','root','root');
        $connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $connect;	
    } catch (Exception $e) {
        die('Error db(connect) '.$e->getMessage());
    }
}

function queryParams($paramName)
{
    try {
        $SQL = "SELECT * FROM edgParams WHERE paramName = ? AND active = 1";
        $result = connect()->prepare($SQL);
        $result->execute(array($paramName));
        $query = $result->fetchAll(PDO::FETCH_OBJ);	
        return $query;
    } catch (Exception $e) {
        die('Error Param(SMTP) '.$e->getMessage());
    } finally{
        $result = null;
    }
}