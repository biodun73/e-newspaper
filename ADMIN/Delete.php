<?php session_start();
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
                     <li><a href="../ADMIN/ApproveComment.php">Comment</a></li>
                     <li><a href="../DATABASE/logout.php">Log out</a>
                </ul>
            </div>
        </header>
        
     <div style="text-align: center;font-family: 'EB Garamond', serif;
             margin-left: 55px;font-weight: bold;color: green">
     </div>
        <!-- delete form -->
        <div class="upload">
            <fieldset>
                <legend><h3>Delete  Article</h3></legend>
             <form method="POST" action="" enctype="multipart/form-data">
                <input type="text" name="id" size="5"><br>
                <select name="select">
                                <option value="<?php echo'localnews'?>">Local News</option>
                                <option value="<?php echo'sportnews'?>">Sport News</option>
                                <option value="<?php echo'Education'?>">Education</option>
                                <option value="<?php echo'Technology'?>">Technology</option>
                                <option value="<?php echo'Business'?>">Business</option>
                </select><br>
                <input type="submit" name="submit" value="Delete">
         </form>
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
    
    //link connection
    $link = mysqli_connect($host, $username,$password, $database);

    //set up variable
        $sel = filter_input(INPUT_POST,'select');
        $id = filter_input(INPUT_POST,'id');
        
//delete select category 
         if($sel=='Education'){
            $update = "DELETE FROM  education  where edu_id='".$id."'";
            $query=mysqli_query($link,$update);

         }

         //delete select category 
         if($sel=='Business'){
            $update = "DELETE FROM  business  where bus_id='".$id."'";
            $query=mysqli_query($link,$update);

         }

         //delete select category 
         if($sel=='LocalNews'){
            $update = "DELETE FROM  localnews where local_id='".$id."'";
            $query=mysqli_query($link,$update);
         }

         //delete select category 
         if($sel=='Technology'){
            $update = "DELETE FROM technology  where tech_id='".$id."'";
            $query=mysqli_query($link,$update);
         }

         //delete select category 
         if($sel=='Sportnews'){
            $update = "DELETE FROM  sportnews  where sport_id='".$id."'";
            $query=mysqli_query($link,$update);
         }
         include"../HTML/Footer.php";
        ?>
    </body>
</html>
