<?php
// config 
require_once 'C:\xampp\htdocs\company\app\functions.php';
?>


<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="<?= URL('')?>">Company</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= URL('index.php/')?>"
                >Home</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Employees
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="<?= URL('employees/add.php')?>"
                    >Add Employee</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="<?= URL('employees/list.php')?>"
                    >List Employee</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Department
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="<?= URL('departments/add.php')?>"
                    >Add Department</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="<?= URL('departments/list.php')?>"
                    >List Department</a
                  >
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <script src="./assets/vendors/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
