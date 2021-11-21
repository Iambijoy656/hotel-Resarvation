<?php
session_start();
require_once 'header.php';

require_once 'db.php';
$query= "select users.*, roles.name as role_name from users inner join roles on users.roles_id = roles.id";

$user= $con->query($query);


?>


<?php if(isset($_SESSION["msg"])&& $_SESSION["msg"]){?>
                <div class="alert alert-success" role="alert">
            <?php  echo $_SESSION["msg"]; ?>
            </div>
            <?php }?>

            <?php if(isset($_SESSION["delete_msg"])&& $_SESSION["delete_msg"]){?>
                <div class="alert alert-danger" role="alert">
            <?php  echo $_SESSION["delete_msg"]; ?>
            </div>
            <?php }?>

          

<table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">phone</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col " colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row= $user->fetch_assoc()) { ?>
    <tr>
  
      <td> <?php echo $row["name"]; ?> </td>
      <td> <?php echo $row["number"]; ?> </td>
      <td> <?php echo $row["email"]; ?> </td>
      <td> <?php echo $row["role_name"]; ?> </td>
      <td> <a class="btn btn-primary" href="user-edit.php?id=<?php echo $row["id"]; ?> ">Edit</a> </td>
      <td> <a class="btn btn-danger" href="user-delete.php?id=<?php echo $row["id"]; ?>"> Delete</a> </td>
    </tr>
    <?php } ?>
  </tbody>
</table>















