<?php 
 
 include("db.php");

 if(isset($_POST["submit"])){

    $fname= $_POST["fname"];
    $mname= $_POST["mname"];
    $lname= $_POST["lname"];

    echo $fname;

    // $sql = "INSERT INTO users (FNAME,MNAME,FNAME) VALUES('$fname','$mname','$lname')";
    // if($conn->query($sql)){
    //     $_SESSION['success'] ="data inserted sucessfully";
    // }
    // else{
    //     $_SESSION['error'] = "failed inserted";
    // }

 }



?>