<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    
<?php
    include('handels/connect.php');
    $getUsers="SELECT * from users";
    $allUsers=mysqli_query($conn,$getUsers);
    $users = mysqli_fetch_all($allUsers,MYSQLI_ASSOC);
  
?>

<?php
 
     
        if(isset($_SESSION['action'])){ ?>
       <div class="alert alert-danger" role="alert">
                <?= $_SESSION['action'];?>
        </div>
     <?php  
            unset($_SESSION['action']) ;
    }

?>
<table class="table table-striped" >
    <tr>
        <th>id</th>
        <th>name</th>
        <th>contact</th>
        <th>gender</th>
        <th>register at</th>
        <th>Action</th>
    </tr>


    <?php 

foreach($users as $index=>$user):
    ?>
<tr>
    
    <td><?= $index +1 ?></td>
    <td><?= $user['firstName']." ".$user['lastName']; ?></td>
    <td><?= $user['contact'] ?></td>
    <td><?php 
        if($user['gender']=='1'){
           echo "female";
        }
           else {
               echo "male";
           }
           ?>
    <td><?= date('j F Y',strtotime($user['created_at'])) ?></td>
    <td>
        <a class="btn btn-warning" href="updateUser.php?id=<?= $user['id'] ?>">update</a>
        <a class="btn btn-danger" href="handels/deleteUser.php?id=<?= $user['id'] ?>">delete</a>
    </td>
</tr>
<?php
endforeach;
    
 
    ?>


</table>
</body>
</html>

  
    


