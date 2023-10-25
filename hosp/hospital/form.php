<?php

if(isset($_POST['submit'])){
    
    $h_id = $_POST['h_id'];
    $hname = $_POST['hname'];
    $phone = $_POST['phone'];
    $wards = $_POST['wards'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $blood = $_POST['blood']
    echo "Hospital Registered Successfully";
    
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
    $sql = "INSERT INTO hospital ( h_id, hname, address, phone, wards, email, pass, blood) VALUES ('$h_id', '$hname', '$address', '$phone', '$wards', '$email', '$pass', '$blood')";// echo $sql;

    if($con->query($sql) == true){
        
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

 
    $con->close();
}
?>