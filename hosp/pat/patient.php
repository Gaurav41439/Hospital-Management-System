<?php

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $blood = $_POST['blood'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $issue = $_POST['issue'];

    echo "posted";
}
    else{
        echo " unsuccessfull ";
    }

    {       
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="hospital";

    
    $con=mysqli_connect("localhost","root","","hospital");

    if (mysqli_connect_errno()) {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
     exit;
   }
   
    $sql = "INSERT INTO patient ( name, dob, gender, phone, address, blood, email, pass, issue) VALUES ('$name', '$dob', '$gender', '$phone', '$address', '$blood', '$email','$pass','$issue')";// echo $sql;
    
    echo $sql;
    if($con->query($sql) == true){
        
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

 
    $con->close();
    }
?>