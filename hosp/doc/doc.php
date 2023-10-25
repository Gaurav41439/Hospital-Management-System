<?php

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $speciality = $_POST['speciality'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

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
   
    $sql = "INSERT INTO doctor ( name, dob, gender, contact, qualification, experience, speciality, email, pass ) VALUES ('$name', '$dob', '$gender', '$contact', '$qualification', '$experience','$speciality', '$email','$pass')";// echo $sql;
    
    echo $sql;
    if($con->query($sql) == true){
        
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

 
    $con->close();
    }
?>