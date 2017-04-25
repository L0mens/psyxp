<?php
/**
 * Created by PhpStorm.
 * User: Lomens
 * Date: 25/04/2017
 * Time: 00:18
 */

$nowamp =false;

try{
    if($nowamp){
        /* BDD M$ AZURE*/
        $bdd = new PDO('mysql:host=eu-cdbr-azure-west-c.cloudapp.net;dbname=LmSBD;charset=utf8', 'b4276ec7494d84', '1303b9ec',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    }else{
        $bdd = new PDO('mysql:host=localhost;dbname=psyxp;charset=utf8', 'root', '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }



}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}



?>