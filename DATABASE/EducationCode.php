b n2<?php ?>
<h2  style="text-align: center;background-color: red;margin-top: 10px;display: block;color:white;">EDUCATION  NEWS</h2>
<?php
//create variables for connection
$host = "localhost";
$username = "root";
$password = "";
$database = "newspapers";

$link = mysqli_connect($host, $username, $password, $database);
///////////////////////////////////////////////////////
//select data article from database
$select = filter_input(INPUT_POST,'select');
$select = "SELECT * FROM education";
$query = mysqli_query($link,$select);
while($row = mysqli_fetch_assoc($query)){
  echo "<div style='display:inline-flex;flex-direction:column;box-sizing:border-box;
  margin-top:20px;width:500px;height:300px;text-align:justify;margin-left:150px;
  padding:10px;margin-bottom:180px;text-decoration:none;color:black'>";
  echo "<img src=" . $row['imag'] . " style=' align:left ; width:350px;height:200px;'>" . "<br>";
  echo "<h3>" . $row['title'] . "</h3>" . "<br>";
  echo "<p>" . $row['article'] . "</p>";
  echo "<p style='font-style:italic;color:black;font-weight:bold'>" .  $row['cat'] . "/ Date: " .  $row['dat'] . "   Author: " .  $row['author'] . "</p>";
  echo "<a href='../HTML/comment.php' style='text-decoration:none;color:black'>post comment</a>"."<br>"."<br>";
echo "</div>"; 
}

//display comment
echo "<div style='display:inline-flex;flex-direction:column;box-sizing:border-box;
margin-top:5px;width:500px;height:100px;text-align:justify;margin-left:150px;
padding:5px;text-decoration:none;color:black'>";
if(@$_SESSION['cat']=='Education'){  
  echo$_SESSION['nam']."<br>";
  echo$_SESSION['article']."<br>";
  echo$_SESSION['dat'];

}
echo "</div>"; 
?>