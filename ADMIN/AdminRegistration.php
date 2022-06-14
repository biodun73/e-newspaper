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
     <!-- heading -->
     <header class="ad_page">
    <h1>Admin Dashboard</h1>
        <!--Register form -->
        <div class="regis">
            <h3>Register Admin</h3>
            <form method="post" action="">
                <fieldset id="field">
                    <legend>User Registration</legend>
                    <label>Username</label>
                    <input type="text" name="user" >
                    <label>Password</label>
                    <input type="password" name="pass" >
                    <label>Confirm Password</label>
                    <input type="password" name="cpass" >
                    <input type="submit" name="submit" value="Register">
                </fieldset>    
            </form>
        </div>
     </header>

        <?php
         //create variables for connection
         $host = "localhost";
         $username = "root";
         $password = "";
         $database = "newspapers";

          $link = mysqli_connect($host, $username, $password, $database);
///////////////////////////////////////////////////////
// set up variables
            $username = filter_input(INPUT_POST,'user');
            $password = filter_input(INPUT_POST,'pass');
            $cpassword = filter_input(INPUT_POST,'cpass');

            //enter data into DATABASE
            $insert = "INSERT INTO admin(user,pass,cpass) VALUES(?,?,?)";
            $stmt=$link->prepare($insert);
            $stmt->bind_param('sss',$username,$password,$cpassword);
            $stmt->execute();
            if(empty($username)||empty($password)||empty($cpassword)){
                echo"<script>alert('Please fill the form and register as a user');</script>";
               
            }
            else{
                header("Location:../HTML/UploadArticle.php");
                echo"<script>alert('Welcome please upload your article');</script>";
            }
           
        ?>
 
    </body>
</html>
