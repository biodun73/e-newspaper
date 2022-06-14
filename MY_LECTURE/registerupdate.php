
  <div>
    <fieldset>
    <legend>UPDATE USER</legend>
    <form action="" method="POST">
    <label>Identity</label>
    <input type="text" name="id"><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    </fieldset>
    </div>
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

$up = "UPDATE registration SET   firstname = '$first' WHERE reg_id = '$id'";
 $link->exec($up);

header("Location:updateForm.php")
?>