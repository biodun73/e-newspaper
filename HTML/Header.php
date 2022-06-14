<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title> Local Newspaper</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../HTML/colorstyle.css">
</head>

<body>

    <!-- heading -->
    <header class="heading">
        <div class="head-title">
            <h1>Online Newspaper</h1>
        </div>
        <!-- navigation -->
        <div id="main">
        <button class="buttonOpen" onclick="openCat()">☰</button> 
        </div>
   <!--Horizontal navigation tabs-->
        <div class="nav">
            <ul>
                <li><a href="../HTML/HomePage.php">Home</a></li>
                <li><a href="../HTML/LocalNews.php">Local news</a></li>
                <li><a href="../HTML/SportNews.php">Sport news</a></li>
                <li><a href="../HTML/Education.php">Education</a></li>
                <li><a href="../HTML/Technology.php">Technology</a></li>
                <li><a href="../HTML/business.php">Business</a></li>
                <li><a href="../HTML/politic.php">Politics</a></li>
            </ul>
        </div>

   

        <!--Hidding side navigation tabs-->
        <div id="catside" class="catbar">
        <a href="javascript:void(0)" class="buttonClose" onclick="closeCat()">X</a>
         <a href="../HTML/HomePage.php">Home</a>
         <a href="../HTML/LocalNews.php">Local News</a>
         <a href="../HTML/SportNews.php">Sport News</a>
         <a href="../HTML/Education.php">Education</a>
         <a href="../HTML/Technology.php">Technology</a>
         <a href="../HTML/business.php">Business</a>
         <a href="../HTML/politic.php">Politics</a>
        </div>

        
    </header>

    <!--Javascript code-->
    <script>
function openCat() {
  document.getElementById("catside").style.width = "200px";
  document.getElementById("main").style.marginLeft = "200px";
}

function closeCat() {
  document.getElementById("catside").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>

</body>
</html>