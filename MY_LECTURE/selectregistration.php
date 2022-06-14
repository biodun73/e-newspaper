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
$textare = filter_input(INPUT_POST,'textarea');

 ///////////////////////////////////////////////////////////////////////////////////////////////////
 $select = "SELECT  *   FROM registration";
$query= $link->query($select);
 foreach ($query as $row) {
      echo"<a href='../MY_LECTURE/registerupdate.php'>";
      echo $row['firstname'];
      echo"</a>";
      echo $row["lastname"];
      echo$row["dat"];
      echo$row["emaiL"];
   
 }
?>