<?php 
require_once 'connection.php';
//Hello from my windows
if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM departements WHERE id=$id";
    $result = mysqli_query($connection , $query);
    if($result){
        echo "Deleted";
        header("location:index.php");
    }else{
        echo "Departements Not Found";
    }
}else{
    echo "NOt FOund";
}

?>
    
