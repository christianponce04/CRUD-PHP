<?php 
include("db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud php</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <div class="wrapper">
            <div class="form_info">
              <h2>CRUD VANILLA PHP</h2>
            </div>

            <form action="index.php" method="post">
                <input type="text" name="fname" class="input1" placeholder="Enter First Name">
                <input type="text" name="mname" class="input2" placeholder="Enter Middle Name">
                <input type="text" name="lname" class="input3" placeholder="Enter Last Name">
                <input type="submit" value="submit" class="input4">
            </form>

    </div>
    
</body>



</html>