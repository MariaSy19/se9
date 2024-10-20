<?php

//config
require_once 'C:\xampp\htdocs\company\app\configDB.php';

// UI
require_once '../shared/header.php';
require_once '../shared/navebar.php';

$messge = '';
if (isset($_POST['submit'])) 
{
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  $department_id = $_POST['department_id'];

  $insertQuery = "INSERT INTO `employees` values (null,'$name','$email',$department_id,'$phone','$address','$password')";
  $insert = mysqli_query($con, $insertQuery);
  if ($insert) {
    $messge = 'Employee Added Successfully';
    } 
}

$departmentQuery = "SELECT * FROM `departments`";
$departments = mysqli_query($con , $departmentQuery);
?>


  <body>
    <div class="container col-6 pt-5">
      <h2 class="text-center text-light">Add New Employee</h2>
      <div class="card border-0">
        <div class="card-body bg-dark text-light">
          <!-- Start Of Event -->
          <?php if(!empty($messge)):?>
          <div class="alert alert-success">
            <p class="fs-4 mb-0">Employee Added Successfully</p>
          </div>
          <?php endif;?>
          <!-- End of Event -->
          <form method="POST">
            <div class="row">
              <div class="form-group col-md-6 mb-2">
                <label for="name" class="form-label"> Name </label>
                <input type="text" class="form-control" id="name" name="name" />
              </div>
              <div class="form-group col-md-6 mb-2">
                <label for="email" class="form-label"> Email </label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                />
              </div>
              <div class="form-group col-md-6 mb-2">
                <label for="phone" class="form-label"> Phone </label>
                <input
                  type="text"
                  class="form-control"
                  id="phone"
                  name="phone"
                />
              </div>
              <div class="form-group col-md-6 mb-2">
                <label for="password" class="form-label"> Password </label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                />
              </div>
              <div class="form-group col-md-6 mb-2">
                <label for="address" class="form-label"> Address </label>
                <input
                  type="text"
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
                  <option value="<?=$department['id']?>"><?=$department['department']?></option>
                  <?php endforeach;?>
        
                </select>
              </div>
              <div class="col-12 text-center">
                <button class="btn btn-primary" name="submit">
                  Add Employee
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

