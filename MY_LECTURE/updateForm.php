<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="../MY_LECTURE/update.php" method="POST">
    <label for="">Firstname</label><br>
    <input type="text" name="first" size="20"><br>
    <input type="submit" name="submit" value="Submit">
    </form>

    <br>
    <div>
    <form action="../MY_LECTURE/update.php" method="POST">
    <input type="number" name="id" size="5"><br>
    <label for="">Firstname</label><br>
    <input type="text" name="first"><br>
    <label for="">Lastname</label><br>
    <input type="text" name="last"><br>
    <label for="">Email Address</label><br>
    <input type="email" name="mail"><br>
    <label for="">Gender</label><br>
    <input type="text" name="gender"><br>
    <label for="">Country</label><br>
    <input type="text" name="country"><br>
    <label for="">Date of Birth</label><br>
    <input type="text" name="dat"><br>
    <input type="submit" name="submit" value="Submit">
    </form>
    </div>

</body>
</html>