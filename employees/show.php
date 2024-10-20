<?php

//config
require_once 'C:\xampp\htdocs\company\app\configDB.php';

// UI
require_once '../shared/header.php';
require_once '../shared/navebar.php';


$departmentQuery = "SELECT * FROM `departments`";
$departments = mysqli_query($con , $departmentQuery);


$name = '';
$phone = '';
$email = '';
$password = '';
$address = '';
$department_id = '';
$messge = '';
if (isset($_GET['show']))
{
  $id = $_GET['show'];
  $selectEmployee = "SELECT * from `employeeswithdepartments` where id = $id";
  $selectOne = mysqli_query($con , $selectEmployee);
  $row = mysqli_fetch_assoc($selectOne);


    # code...
}

?>


  <body>
    <div class="container col-6 pt-5">
      <h2 class="text-center text-light">Employee: <?=$row['name']?> </h2>
      <div class="card border-0 mx-auto" style="width:400px">
        <img src="https://www.shutterstock.com/image-illustration/user-profile-caution-important-notice-260nw-1724695114.jpg" class="image-fluid"></img>
        <div class="card-body bg-dark text-light">
            <p class="card-text" >Email: <?=$row['email']?></p>
            <p class="card-text" >Phone: <?=$row['phone']?></p>
            <p class="card-text" >Department: <?=$row['department']?></p>
            <p class="card-text" >Address: <?=$row['address']?></p>
        </div>
      </div>
    </div>
  </body>
<?php
require_once '../shared/footer.php';
?>

