<?php
function databaseConnect(){
    //create variables for connection
    $host = "localhost";
    $username = "root";
   $password = "";
    $database = "newspapers";
    
    $link = mysqli_connect($host, $username,$password, $database);
    if(!$link){
        die("Failed");
    }
   else {
        echo 'Connected'; 
    }
}
databaseConnect();

