<?php
include'Header.php';
?>
<body>
<div style="margin-left: 500px;">
    <form action="" method="POST">
        <br>
    <input type="hidden" name="selet"><br>
    <input type="text" name="nam" placeholder=""><br>
     <textarea name="tex" rows="20" cols="70"></textarea><br>
     <input type="hidden" name="dat" value="<?php echo date('y:m:d')?>"><br>

    <select name="select">
                  <option value="LocalNews">LocalNews</option>
                  <option value="Sportnews">SportNews</option>
                  <option value="Education">Education</option>
                  <option value="Technology">Technology</option>
                  <option value="Business">Business</option>
                  <option value="Politics">Politics</option>
                  <option value="Comment">Comment</option>
  </select><br>
<input type="submit" name="submit" value="Submit">
     <a href="../HTML/RegisterComment.php">Register</a> 
 
    </form>
</div>
<?php
//   //create variables for connection
$host = "localhost";
$username = "root";
$password = "@$#abiodun73";
$database = "newspapers";

$link = mysqli_connect($host, $username, $password, $database);
$select = filter_input(INPUT_POST,'select');
$id = filter_input(INPUT_POST,'selet');
$nam = filter_input(INPUT_POST,'nam');
$dat  = filter_input(INPUT_POST,'dat');
$comet = filter_input(INPUT_POST,'tex');


?>

<!-----
------->
<?php
    
    $iput = "INSERT INTO comment(com_id,nam,article,cat,dat) VALUES(?,?,?,?,?)";           
    $stmt = $link->prepare($iput);
    $stmt->bind_param("sssss",$id,$nam,$comet,$select,$dat);
    $stmt->execute();


?>
</body>
</html>