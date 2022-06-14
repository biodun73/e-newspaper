<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../HTML/colorstyle.css">
</head>

<body>
<header class="ad_page">
    <h1>Admin Dashboard</h1>
     
    </header>
    <!--login form-->
<div class="log_admin">
        <form method="post" action="">
                <fieldset id="field">
                    <legend>  <h3>Admin Login</h3></legend>
                    <label>Username</label>
                    <input type="text" name="user" >
                    <label>Password</label>
                    <input type="password" name="pass" >
                    <input type="submit" name="submit" value="Login">
                    <a href="../ADMIN/AdminRegistration.php" style="text-decoration: none;border:2px solid black ;">Register</a>
                </fieldset>    
            </form>
            </table>
        </form>
    </div>
    <!--php code-->
    <?php
        //   //create variables for connection
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "newspapers";

        $link = mysqli_connect($host, $username, $password, $database);
///////////////////////////////////////////////////////
//set up variables
    $usern = filter_input(INPUT_POST,'user');
    $passw = filter_input(INPUT_POST,'pass');
////////////////////////////////////////////////////////////////////////////
//select data from DATABASE
$select = "SELECT DISTINCT * FROM admin WHERE user='$usern' AND pass= '$passw'";
$query = mysqli_query($link,$select);
if(empty($usern) || empty($passw)){ 
    echo"<script>alert('Please fill the form and click login button or click Register button '); </script>";      
}
else{
    
    echo"<script>alert('Welcome please upload your article');</script>";
    header("Location:../HTML/UploadArticle.php");
}

    ?>
</body>

</html>