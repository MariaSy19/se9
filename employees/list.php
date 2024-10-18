<?php
//UI
require_once './shared/header.php';
require_once './shared/navebar.php';

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
                <th>email</th>
                <th>phone</th>
                <th>address</th>
                <th>department ID</th>
                <th>actions</th>
              </tr>
            </thead>
            <tbody>
              <!-- start of row -->
              <tr>
                <td>1</td>
                <td>Ahmed</td>
                <td>ahmed@gmail.com</td>
                <td>01234567891</td>
                <td>Giza, Egypt</td>
                <td>1</td>
                <td>
                  <a href="" class="btn btn-warning">Edit</a>
                  <a href="" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              <!-- end of Row -->
              <tr>
                <td>2</td>
                <td>Ahmed</td>
                <td>ahmed@gmail.com</td>
                <td>01234567891</td>
                <td>Giza, Egypt</td>
                <td>1</td>
                <td>
                  <a href="" class="btn btn-warning">Edit</a>
                  <a href="" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Ahmed</td>
                <td>ahmed@gmail.com</td>
                <td>01234567891</td>
                <td>Giza, Egypt</td>
                <td>1</td>
                <td>
                  <a href="" class="btn btn-warning">Edit</a>
                  <a href="" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              <!-- If No Data -->
              <tr>
                <td colspan="7" class="text-center">no data to show</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>

<?php
require_once './shared/footer.php';

?>
