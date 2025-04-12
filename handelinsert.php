<?php 
require_once 'connection.php';


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $firstName = $_POST['FirstName'];
    $lastName = $_POST['LastName'];
    $email = $_POST['email'];


    $query = "INSERT INTO departements (`first_name` , `last_name` , `email`) VALUES ('$firstName' , '$lastName','$email')"; 
    $result = mysqli_query($connection , $query);
    if($result){
        echo "New customer added";
        header('location:index.php');
    }else{
        echo "failed";
    }
}