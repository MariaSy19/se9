<?php
//UI
require_once '../shared/header.php';
require_once '../shared/navebar.php';

?>

    <div class="container col-6 pt-5">
      <h2 class="text-center text-light">List All Departments</h2>
      <div class="card border-0">
        <div class="card-body bg-dark text-light">
          <table class="table table-dark">
            <thead>
              <tr>
                <th>#</th>
                <th>department</th>
                <th>actions</th>
              </tr>
            </thead>
            <tbody>
              <!-- start of row -->
              <tr>
                <td>1</td>
                <td>Hr</td>
                <td>
                  <a href="" class="btn btn-warning">Edit</a>
                  <a href="" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              <!-- end of Row -->
              <tr>
                <td>2</td>
                <td>Sales</td>
                <td>
                  <a href="" class="btn btn-warning">Edit</a>
                  <a href="" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Marketing</td>
                <td>
                  <a href="" class="btn btn-warning">Edit</a>
                  <a href="" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              <!-- If No Data -->
              <tr>
                <td colspan="3" class="text-center">no data to show</td>
              </tr>
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
