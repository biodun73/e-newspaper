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

 ///////////////////////////////////////////////////////////////////////////////////////////////////
 $select = "SELECT  *   FROM student";
$query= $link->query($select);
 foreach ($query as $row) {
      echo '<h3>'.$row["firstname"]." ".$row["lastname"]." "."was born in"." ".$row["dat"]." ". "and the email address is"." ".$row["emaiL"].'</h3>';
   
 }
?>