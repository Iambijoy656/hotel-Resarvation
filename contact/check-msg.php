<?php
session_start();


if(isset($_SESSION["id"]) && $_SESSION["id"]) {
   if($_SESSION["id"] !=1){
       header("location:profile.php");
   }
}else{
    header("location:login.php");
}


require_once '../partial/header.php';

require_once '../config/db.php';

$query= "select * from contact";

$user= $con->query($query)

?>


<?php if(isset($_SESSION["massage"])&& $_SESSION["massage"]){?>
                <div class="alert alert-success" role="alert">
            <?php  echo $_SESSION["massage"]; ?>
            </div>
            <?php }?>

            <?php if(isset($_SESSION["msg"])&& $_SESSION["msg"]){?>
                <div class="alert alert-danger" role="alert">
            <?php  echo $_SESSION["msg"]; ?>
            </div>
            <?php }?>




<table class="table">
  <thead class="thead-dark">
    <tr>
      
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Massage</th>
      <th scope="col"colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row= $user->fetch_assoc()) { ?>
    <tr>
  
      <td> <?php echo $row["name"]; ?> </td>
      <td> <?php echo $row["email"]; ?> </td>
      <td> <?php echo $row["massage"]; ?> </td>
      <td> <a class="btn btn-danger" href="massage-delete.php?id=<?php echo $row["id"]; ?>">Delete</a> </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
