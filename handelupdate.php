<?php 
require_once 'connection.php';


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_GET['id'];
    $firstName = $_POST['FirstName'];
    $lastName = $_POST['LastName'];
    $email = $_POST['email'];

    $query = "UPDATE departements set first_name = '$firstName' , last_name = '$lastName' , email = '$email' 
    where departements.id ='$id'";
    $result = mysqli_query($connection , $query);
    if($result){
        echo "Updated";
        header("location:index.php");
    }else{
        echo "Failed";
    }
}