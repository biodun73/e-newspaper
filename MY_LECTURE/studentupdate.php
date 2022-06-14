

<?php

$dsn = "mysql:host=v.je;dbname=dataDB";
$username = "student";
$password = "student";

$link = new PDO($dsn,$username,$password,[PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION]);

if(!$link){
    die("not connected");
}

$id = filter_input(INPUT_POST,'id');
$first = filter_input(INPUT_POST,'first');
$last = filter_input(INPUT_POST,'last');
$email = filter_input(INPUT_POST,'mail');
$gender = filter_input(INPUT_POST,'gender');

$update = "UPDATE student SET  firstname='$first',lastname='$last', gender='$gender',emaiL='$email' WHERE stud_id ='$id'";
 $link->exec($update);
header("Location:../MY_LECTURE/select.php")

?>