

<?php

$dsn = "mysql:host=v.je;dbname=dataDB";
$username = "student";
$password = "student";

$link = new PDO($dsn,$username,$password,[PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION]);

if(!$link){
    die("not connected");
}


$first = filter_input(INPUT_POST,'first');
$last = filter_input(INPUT_POST,'last');
$email = filter_input(INPUT_POST,'mail');
$gender = filter_input(INPUT_POST,'gender');
$country = filter_input(INPUT_POST,'country');
$dat = filter_input(INPUT_POST,'dat');

$sql = "INSERT INTO student(firstname,lastname,email,gender,country,dat)  
            VALUES('$first','$last','$email','$gender','$country','$dat')";
 $link->exec($sql);

header("Location:../MY_LECTURE/select.php");
?>