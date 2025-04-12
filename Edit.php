<?Php 
require_once 'connection.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$query = "SELECT * from departements where id = $id";
$result = mysqli_query($connection , $query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $dep = mysqli_fetch_assoc($result) ;
    if(mysqli_num_rows($result)>0){
    ?>
<form action="handelupdate.php?id=<?php echo $dep['id']?>" method="post">
    <label for="">FirstName</label>
    <input type="text" value="<?php echo $dep['first_name'] ?>" name="FirstName">
    <label for="">LastName</label>
    <input type="text" value="<?php echo $dep['last_name'] ?>" name="LastName">
    <label for="">email</label>
    <input type="text" value="<?php echo $dep['email'] ?>" name="email">
    <button type="submit">Submit</button>
</form>
  <?php  }else{
    echo "NOt 
    Found";
  }
    ?>
</body>
</html>