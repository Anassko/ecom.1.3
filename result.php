<?php
require_once("functions.php");
var_dump($_POST);

if ($_POST){
    $name=$_POST['fName'];
    if(empty($name)){
        echo "</br>Nom vide";
    }else{
        echo"</br>Mon nom est :" . $name;
    }
}


echo '</br>';
$saltedName = addSalt($_POST['fname']);
var_dump($saltedName);

?>