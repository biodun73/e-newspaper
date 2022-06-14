<?php 
session_start();
?>
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
            <div>
                <h1>Admin Dashboard</h1>
            </div>
            <!-- navigation -->
            <div class="adminav">
                <ul>
                     <li><a href="../ADMIN/Edit.php">Update</a></li>
                     <li><a href="../ADMIN/Delete.php">Delete</a></li>
                     <li><a href="../ADMIN/ApproveComment.php">Comment</a>
                     <li><a href="../DATABASE/logout.php">Log out</a>
                </ul>
            </div>
        </header>
        
     <div style="text-align: center;font-family: 'Roboto', sans-serif;
             margin-left: 55px;font-weight: bold;color: green">
     </div>
        <!-- login form -->
        <div class="upload">
            <fieldset>
                <legend><h3>Approve Comment</h3></legend>
             <form method="POST" action="" enctype="multipart/form-data">
             <input type="number" name="selet" value='1'><br>
                <select name="select">
                                <option value="LocalNews">Local News</option>
                                <option value="Sportnews">Sport News</option>
                                <option value="Education">Education</option>
                                <option value="Technology">Technology</option>
                                <option value="Business">Business</option>
                                <option value="Politics">Politics</option>
                                <option value="Comment">Comment</option>
                </select><br>
                <input type="submit" name="submit" value="Comment"><br>
         </form><br>
            </fieldset>
        </div>
         <!-----
        ------->
        <?php
            //create variables for connection
            $host = "localhost";
            $username = "root";
            $password = "";
            $database = "newspapers";
    
    $link = mysqli_connect($host, $username,$password, $database);


        $select = filter_input(INPUT_POST,'select');
        $id = filter_input(INPUT_POST,'selet');
        if($id) {
             $bus = "SELECT * FROM comment WHERE com_id  = '$id' AND cat= '$select'";
             $sel = mysqli_query($link,$bus);
            while($row=mysqli_fetch_assoc($sel)){
                $_SESSION['nam']=$row['nam'];
                $_SESSION['article']=$row['article'];
                $_SESSION['dat']=$row['dat'];
                $_SESSION['cat']=$row['cat'];

            }
        }


        ?>
        <?php
        include"../HTML/Footer.php";
        ?>
    </body>
</html>
