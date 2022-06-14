<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="first" size="20"><label>Firstname</label<br>
    <input type="text" name="last" size="20"><label>Lastname</label<br>
    <input type="text" name="mail" size="20"><label>Email</label<br>
   <select name="selec">
   <option value="Firstname">Firstname</option>
   <option value="Lastname">Lastname</option>
   <option value="Email">Email</option>
   </select>
    <input type="submit" name="submit" value="Submit">
    </form>

    <?php
$dsn = "mysql:host=v.je;dbname=dataDB";
$username = "student";
$password = "student";

$link = new PDO($dsn,$username,$password,[PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION]);

if(!$link){
    die("not connected");
}


$select = filter_input(INPUT_POST,'selec');
$first = filter_input(INPUT_POST,'first');
$last = filter_input(INPUT_POST,'last');
$email = filter_input(INPUT_POST,'mail');
$gender = filter_input(INPUT_POST,'gender');
$country = filter_input(INPUT_POST,'country');
$dat = filter_input(INPUT_POST,'dat');

 ///////////////////////////////////////////////////////////////////////////////////////////////////

 switch ($select) {
     case'Firstname':
        $select = "SELECT  *   FROM student WHERE firstname='$first'";
       $query= $link->query($select);
       foreach ($query as $row) {
      echo '<h3>'.$row["firstname"]." ".$row["lastname"]." "."was born in"." ".$row["dat"]." ". "and the email address is"." ".$row["emaiL"].'</h3>';
   
 }
         break;
     case'Lastname':
        $select = "SELECT  *   FROM student WHERE lastname='$last'";
        $query= $link->query($select);
         foreach ($query as $row) {
         echo '<h3>'.$row["firstname"]." ".$row["lastname"]." "."was born in"." ".$row["dat"]." ". "and the email address is"." ".$row["emaiL"].'</h3>';
   
 }
         break;
     case'Email':
        $select = "SELECT  *   FROM student WHERE emaiL='$email'";
        $query= $link->query($select);
       foreach ($query as $row) {
      echo '<h3>'.$row["firstname"]." ".$row["lastname"]." "."was born in"." ".$row["dat"]." ". "and the email address is"." ".$row["emaiL"].'</h3>';
   
 }
         break;
     default:
 }

?>
</body>
</html>