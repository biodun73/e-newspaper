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
        <!-- edit form -->
        <div class="upload">
            
            <fieldset>
                <legend><h3>Update Edit Article</h3></legend>
             <form method="POST" action="" enctype="multipart/form-data">
                <input type="text" name="id" size="5">
                 <input type="file" name="filem"><br>
                <label for="user">Author</label><br>
                <input type="text" name="user"><br>
                <label for="title">Title</label><br>
                <input type="text" name="title"><br>
                <input type="hidden" name="dat" value="<?php echo date('Y-m-d h: i : sa'); ?><br>
                <label for="title">Article type</label><br>
                <input type="text" name="cat"><br>
                <select name="select">
                                 <option value="LocalNews">Local News</option>
                                <option value="Sportnews">Sport News</option>
                                <option value="Education">Education</option>
                                <option value="Technology">Technology</option>
                                <option value="Business">Business</option>
                                <option value="Politics">Politics</option>
        
                </select><br>
                <textarea name="texta" id="" cols="30" rows="10"></textarea><br>
                <input type="submit" name="submit" value="Update and Edit Article">
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

    //set up variables
        $select = filter_input(INPUT_POST,'select');
        $id = filter_input(INPUT_POST,'id');
        @ $image = "../IMAGES/". $_FILES['filem']['name'];
        $autor = filter_input(INPUT_POST,'user');
        $title = filter_input(INPUT_POST,'title');
        $areatext= filter_input(INPUT_POST,'texta');
        $dat = filter_input(INPUT_POST,'dat');
        $categ = filter_input(INPUT_POST,'cat');
        move_uploaded_file(@$_FILES['filem']['tmp_name'],$image);
   
         //edit category
         if($select=='Business'){
            $update = "UPDATE  business SET  title='".$title."',
            imag='".$image."', author='".$autor."',dat='".$dat."',article='".$areatext."' where bus_id='".$id."'";
            $query=mysqli_query($link,$update);

         }

          //edit category
         if($select=='LocalNews'){
            $update = "UPDATE  localnews SET  title='".$title."',
            imag='".$image."', author='".$autor."',dat='".$dat."',article='".$areatext."' where local_id='".$id."'";
            $query=mysqli_query($link,$update);
         }

          //edit category
         if($select=='Education'){
            $update = "UPDATE technology SET  title='".$title."',
            imag='".$image."', author='".$autor."',dat='".$dat."',article='".$areatext."' where edu_id='".$id."'";
            $query=mysqli_query($link,$update);
         }

          //edit category
         if($select=='Technology'){
            $update = "UPDATE sportnews SET title='".$title."',
            imag='".$image."', author='".$autor."',dat='".$dat."',article='".$areatext."' where tech_id='".$id."'";
            $query=mysqli_query($link,$update);
         }
         
          //edit category
          if($select=='Politics'){
            $update = "UPDATE sportnews SET title='".$title."',
            imag='".$image."', author='".$autor."',dat='".$dat."',article='".$areatext."' where pol_id='".$id."'";
            $query=mysqli_query($link,$update);
         }

         
          //edit category
          if($select=='Sportnews'){
            $update = "UPDATE sportnews SET title='".$title."',
            imag='".$image."', author='".$autor."',dat='".$dat."',article='".$areatext."' where sport_id='".$id."'";
            $query=mysqli_query($link,$update);
         }
         include"../HTML/Footer.php";
        ?>
        
    </body>
</html>
