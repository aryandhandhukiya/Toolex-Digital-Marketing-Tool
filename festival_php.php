<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Digital Marketing Tool</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!--<link href="" rel="icon">-->

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
       <!-- <img src="assets/img/logo.png" alt=""> 
        <span class="d-none d-lg-block">NiceAdmin</span>
-->
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="profilephoto.webp" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">A. Dhandhukiya</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Aryan Dhandhukiya</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            
      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="http://localhost/Toolex/index.php">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->




      <li class="nav-item">
        <a class="nav-link collapsed" href="http://localhost/Toolex/festival_php.php">
          <i class="bi bi-envelope"></i>
          <span>Festivals</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="http://localhost/Toolex/customer_php.php">
          <i class="bi bi-person"></i>
          <span>Customer</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="http://localhost/Toolex/pages-login.php">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Logout</span>
        </a>
      </li>

      <!-- End Blank Page Nav -->
		

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      
                  
               
            
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

               

                <div class="card-body">
                  <h5 class="card-title">Festival </h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Festival Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Location</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php
    $servername= "localhost";
    $username= "root";
    $password= "";
    $database= "php_project";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn-> connect_error){

        echo "Connection failed: " . $conn->connect_error;
            }

            function getAllData($conn) {
                $sql = "SELECT id, fest_name, fest_date, location FROM festival"; // Replace "your_table" with the actual table name

                $result = $conn->query($sql);

                if ($result === false) {
                    die("Error: " . $conn->error);
                }

                $data = array();

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $data[] = $row;
                    }
                }
                return $data;
            }
            
                    $data = getAllData($conn);
                foreach ($data as $row) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['fest_name'] . "</td>";
                    echo "<td>" . $row['fest_date'] . "</td>";
                    echo "<td>" . $row['location'] . "</td>";
                    echo "</tr>";
                }

                
                
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (isset($_POST['update'])) {
  // Handle the form submission
  $id = $_POST['id'];
  $fest_name = $_POST['fest_name'];
  $fest_date = $_POST['fest_date'];
  $location = $_POST['locality'];

  $sql = "UPDATE festival SET fest_name='$fest_name', fest_date='$fest_date', location='$location' WHERE id=$id";

  if ($conn->query($sql) === true) {
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $conn->error;
  }
}

elseif (isset($_POST['delete'])) {
  $id = $_POST['id'];

      $sql = "DELETE FROM festival WHERE id=$id";

      if ($conn->query($sql) === true) {
          echo "Record deleted successfully";
      } else {
          echo "Error deleting record: " . $conn->error;
      }
}

elseif (isset($_POST['add'])) {
  // Handle the add form submission
  $id = $_POST['id'];
  $fest_name = $_POST['fest_name'];
  $fest_date = $_POST['fest_date'];
  $location = $_POST['locality'];

  $sql = "INSERT INTO festival (id, fest_name, fest_date, location) VALUES ('$id','$fest_name', '$fest_date', '$location')";

  if ($conn->query($sql) === true) {
      echo "Record added successfully";
  } else {
      echo "Error adding record: " . $conn->error;
  }
}
}
                        $conn->close();

                ?>
                    
                    
                  

                    
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <p class="lead">Festival you want to update</p>
            <div class="container mt-5">
              <form method="post" action="festival_php.php">
                <div class="row">
                  <div class="col">
                    <label for="id">Id</label>
                    <input type="text" name="id" class="form-control" placeholder="Id">
                  </div>
                  <div class="col">
                    <label for="fname">Festival Name</label>
                    <input type="text" name="fest_name" class="form-control" placeholder="Name">
                  </div>
                  <div class="col">
                    <label for="date">Date</label>
                    <input type="text" name="fest_date" class="form-control" placeholder="YYYY-MM-DD">
                  </div>
                  <div class="col">
                    <label for="location">Location</label>
                    <input type="text" name="locality" class="form-control" placeholder="locality">
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col">
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                  </div>
                  <div class="col">
                    <button type="submit" name="delete" class="btn btn-secondary">Delete</button>
                  </div>
                  <div class="col">
                    <button type="submit" name="add" class="btn btn-success">Add</button>
                  </div>
                </div>
                </form>
              </div>
              
              

           
          </div>
             
        </div><!-- End Left side columns -->

       
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Aryan & Aditya</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="#">Aryan</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>