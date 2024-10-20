<?php

//config
require_once 'C:\xampp\htdocs\company\app\configDB.php';

//UI
require_once '../shared/header.php';
require_once '../shared/navebar.php';

// Delete 
if (isset($_GET['delete'])) 
{
  $id = $_GET['delete'];
  $deleteQuery = "DELETE FROM `employees` where id = $id";
  $delete = mysqli_query($con,$deleteQuery);
  if ($delete) {
    path("employees/list.php");
    # code...
  }
}

//Read Data
$selectQuery = "SELECT * FROM `employees`";
$select = mysqli_query($con, $selectQuery);
$numOfRows = mysqli_num_rows($select);

?>

<div class="container pt-5">
  <h2 class="text-center text-light">List All Employees: <?= $numOfRows ?></h2>
  <div class="card border-0">
    <div class="card-body bg-dark text-light">
      <table class="table table-dark">
        <thead>
          <tr> 
            <th>#</th>
            <th>Employee</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Department ID</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($numOfRows > 0): ?>
            <?php foreach ($select as $index => $employee): ?>
              <!-- start of row -->
              <tr>
                <td><?= $index + 1 ?></td>
                <td><?= $employee['name'] ?></td>
                <td><?= $employee['email'] ?></td>
                <td><?= $employee['phone'] ?></td>
                <td><?= $employee['address'] ?></td>
                <td><?= $employee['department_id'] ?></td>
                <td>
                <a href="edit.php?edit=<?=$employee['id']?>" class="btn btn-warning">Edit</a>
                <a href="?delete=<?= $employee['id']?> " class="btn btn-danger">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php else: ?>
              <!-- If No Data -->
              <tr>
                <td colspan="7" class="text-center">No data to show</td>
              </tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</body>
</html>

<?php
require_once '../shared/footer.php';
?>
