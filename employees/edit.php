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
if (isset($_GET['edit']))
{
  $id = $_GET['edit'];
  $selectEmployee = "SELECT * from `employees` where id = $id";
  $selectOne = mysqli_query($con , $selectEmployee);
  $row = mysqli_fetch_assoc($selectOne);
  $name = $row['name'];
  $email = $row['email'];
  $phone = $row['phone'];
  $address = $row['address'];
  $password = $row['password'];
  $department_id = $row['department_id'];

  if (isset($_POST['update'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $password = $_POST['password'];
  $department_id = $_POST['department_id'];
  $updateQuery = "UPDATE `employees` set `name` = '$name' , email = '$email' , department_id = $department_id , phone = '$phone', `address` = '$address', `password` = '$password' where id = $id ";
  $update = mysqli_query($con , $updateQuery);
  if ($update) {
    $messge = ' Updated Successfully';

    path('employees/list.php');

  }
    # code...
  }
  
  }
?>


  <body>
    <div class="container col-6 pt-5">
      <h2 class="text-center text-light"> Update Employee</h2>
      <div class="card border-0">
        <div class="card-body bg-dark text-light">
          <!-- Start Of Event -->
           <?php if(!empty($messge)):?>
          <div class="alert alert-success">
            <p class="fs-4 mb-0"><?= $messge?></p>
          </div>
          <?php endif;?>
          <!-- End of Event -->
          <form method="POST">
            <div class="row">
              <div class="form-group col-md-6 mb-2">
                <label for="name" class="form-label"> Name </label>
                <input type="text" value = "<?= $name?>" class="form-control" id="name" name="name" />
              </div>
              <div class="form-group col-md-6 mb-2">
                <label for="email" class="form-label"> Email </label>
                <input
                  type="email"
                  value = "<?= $email?>"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group col-md-6 mb-2">
                <label for="phone" class="form-label"> Phone </label>
                <input
                  type="text"
                  value = "<?= $phone?>"
                  class="form-control"
                  id="phone"
                  name="phone"
                />
              </div>
              <div class="form-group col-md-6 mb-2">
                <label for="password" class="form-label"> Password </label>
                <input
                  type="password"
                  value = "<?= $password?>"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>
              <div class="form-group col-md-6 mb-2">
                <label for="address" class="form-label"> Address </label>
                <input
                  type="text"
                  value = "<?= $address?>"
                  class="form-control"
                  id="address"
                  name="address"
                />
              </div>
              <div class="form-group col-md-6 mb-2">
                <label for="department" class="form-label"> department </label>
                <select
                  name="department_id"
                  id="department"
                  class="form-select"
                >
                <?php foreach($departments as  $department ):?> 
                  <?php if($department_id == $department['id']):?>
                    <option  selected value="<?=$department['id']?>"><?=$department['department']?></option>
                  <?php else:?>
                    <option  value="<?=$department['id']?>"><?=$department['department']?></option>
                  <?php endif;?>
                <?php endforeach;?>
        
                </select>
              </div>
              <div class="col-12 text-center">
                <button class="btn btn-warning" name="update">
                  Update Employee
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
<?php
require_once '../shared/footer.php';
?>

