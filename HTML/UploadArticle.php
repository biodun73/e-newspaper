<?php ?>
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
        <header class="adminav">
            <div>
                <h1>Admin Dashboard</h1>
                <a href="../ADMIN/Edit.php">Update</a>
                <a href="../ADMIN/Delete.php">Delete</a>
                <a href="../ADMIN/ApproveComment.php">Comment</a>
                <a href="../DATABASE/logout.php">Log out</a>
            </div>
        </header>

        <div style="text-align: center;font-family: 'Roboto', sans-serif;
             margin-left: 55px;font-weight: bold;color: green">
        </div>
        <!-- login form -->
        <div class="upload">
            <fieldset >
                <legend><h3>Upload News Article</h3></legend>
                <form method="POST" action="" enctype="multipart/form-data">
                    <input type="file" name="filem"><br>
                    <label for="user">Author</label><br>
                    <input type="text" name="user"><br>
                    <label for="title">Title</label><br>
                    <input type="text" name="title"><br>
                    <input type="hidden" name="dat" value="<?php echo date('Y-m-d'); ?><br>
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
                    <textarea name="texta" id="" cols="30" rows="7"></textarea><br>
                    <input type="submit" name="submit" value="Upload Article"><br><br>
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

$link = mysqli_connect($host, $username, $password, $database);

$select = filter_input(INPUT_POST, 'select');
@ $image = "../IMAGES/" . $_FILES['filem']['name'];
$autor = filter_input(INPUT_POST, 'user');
$title = filter_input(INPUT_POST, 'title');
$areatext = filter_input(INPUT_POST, 'texta');
$dat = filter_input(INPUT_POST, 'dat');
$categ = filter_input(INPUT_POST, 'cat');
move_uploaded_file(@$_FILES['filem']['tmp_name'], $image);

if ($select == 'Business') {
    $bus = "INSERT INTO business(imag,author,title,article,dat,cat) VALUES(?,?,?,?,?,?)";
    $stmt = $link->prepare($bus);
    $stmt->bind_param("ssssss", $image, $autor, $title, $areatext, $dat, $categ);
    $stmt->execute();
}

if ($select == 'Education') {
    $edu = "INSERT INTO education(imag,author,title,article,dat,cat) VALUES(?,?,?,?,?,?)";
    $stmt = $link->prepare($edu);
    $stmt->bind_param("ssssss", $image, $autor, $title, $areatext, $dat, $categ);
    $stmt->execute();
}

if ($select == 'Technology') {
    $tech = "INSERT INTO technology(imag,author,title,article,dat,cat) VALUES(?,?,?,?,?,?)";
    $stmt = $link->prepare($tech);
    $stmt->bind_param("ssssss", $image, $autor, $title, $areatext, $dat, $categ);
    $stmt->execute();
}

if ($select == 'LocalNews') {
    $local = "INSERT INTO localnews(imag,author,title,article,dat,cat) VALUES(?,?,?,?,?,?)";
    $stmt = $link->prepare($local);
    $stmt->bind_param("ssssss", $image, $autor, $title, $areatext, $dat, $categ);
    $stmt->execute();
}

if ($select == 'Sportnews') {
    $spot = "INSERT INTO sportnews(imag,author,title,article,dat,cat) VALUES(?,?,?,?,?,?)";
    $stmt = $link->prepare($spot);
    $stmt->bind_param("ssssss", $image, $autor, $title, $areatext, $dat, $categ);
    $stmt->execute();
}

if ($select == 'Politics') {
    $pol = "INSERT INTO politics(imag,author,title,article,dat,cat) VALUES(?,?,?,?,?,?)";
    $stmt = $link->prepare($pol);
    $stmt->bind_param("ssssss", $image, $autor, $title, $areatext, $dat, $categ);
    $stmt->execute();
}
?>
        <?php
        include"Footer.php";
        ?>
    </body>
</html>
