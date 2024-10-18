<?php
// UI
require_once '../shared/header.php';
require_once '../shared/navebar.php';

?>

    <div class="container col-6 pt-5">
      <h2 class="text-center text-light">Add New Department</h2>
      <div class="card border-0">
        <div class="card-body bg-dark text-light">
          <div class="alert alert-success">
            <p class="fs-4 mb-0">Added Successfully</p>
          </div>
          <form method="POST">
            <div class="form-group mb-2">
              <label for="department" class="form-label"> Department </label>
              <input
                type="text"
                class="form-control"
                id="department"
                name="department"
              />
            </div>
            <div class="text-center">
              <button class="btn btn-primary">Add Department</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>

<?php
require_once '../shared/footer.php';

?>
