<?php

//config
require_once 'C:\xampp\htdocs\company\app\configDB.php';

//UI
require_once '../shared/header.php';
require_once '../shared/navebar.php';

$selectQuery = "SELECT * FROM `employees`";
$select = mysqli_query($con, $selectQuery);
$numOfRows = mysqli_num_rows($select);

?>

<div class="container pt-5">
  <h2 class="text-center text-light">List All Employees</h2>
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
                <a href="edit.php?edit=<?=$department['id']?>" class="btn btn-warning">Edit</a>
                <a href="?delete=<?= $department['id']?> " class="btn btn-danger">Delete</a>
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
