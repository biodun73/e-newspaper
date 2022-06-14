<?php
//log out with session
session_start();
session_destroy();
header("Location:../ADMIN/AdminPage.php");
?>