

<?php

$dsn = "mysql:host=v.je;dbname=dataDB";
$username = "student";
$password = "student";

$link = new PDO($dsn,$username,$password,[PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION]);

if(!$link){
    die("not connected");
}


$firstname = filter_input(INPUT_POST,'first');
$lastname = filter_input(INPUT_POST,'last');
$dat = filter_input(INPUT_POST,'dat');
$textarea= filter_input(INPUT_POST,'textarea');

$stmt =  $link->prepare("INSERT INTO registration(firstname,lastname,dat,textarea)
VALUES('$firstname ','$lastname','$dat','$textarea')");
$stmt->execute();

header("Location:../MY_LECTURE/registration.php");
?>