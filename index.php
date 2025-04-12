<?php
   require_once 'connection.php';

    $query = 'select * from departements';
    $result = mysqli_query($connection , $query );
    //echo '<pre/>';
    //$customers = mysqli_fetch_all($result , MYSQLI_ASSOC);      //to return all data 

    //while($customers = mysqli_fetch_assoc($result)){
        // echo "<Pre/>";
        // print_r($customers);

    //}   //to return one row (i can also use this to display the all data)
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>id</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>update</th>
            <th>delete</th>
        </thead>
        <?php     while($customers = mysqli_fetch_assoc($result)){ ?>
            <tr class="margin : 2px 0">
                <td><?php echo $customers['id'] ?></td>
                <td><?php echo $customers['first_name'] ?></td>
                <td><?php echo $customers['last_name'] ?></td>
                <td><?php echo $customers['email'] ?></td>
                <td><a href="Edit.php?id=<?php echo $customers['id'] ?>">Update</a></td>
                <td><a href="Delete.php?id=<?php echo $customers['id'] ?>">Delete</a></td>  
                
                <?php  } ?>
        </tr>
    </table>
    <a href="form.php">insert</a>
</body>
</html>