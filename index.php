<?php

session_start();
error_reporting(0); 
$userprofile =$_SESSION['user_name'];

include('connection.php');

function send_mail($to_email, $subject, $body, $headers){

    $to_email= $to_email;
    $subject = $subject;
    $body= $body;
    $headers=$headers;
    try {
        if (mail($to_email, $subject, $body, $headers)) {
            echo "Mail sent!!";
        } else {
            echo "Mail could not be sent.";
        }
    }
        catch (Exception $e) {
            echo "Exception: " . $e->getMessage();
        }


}


function detect_bday($conn){

    $conn= $conn;
    $today = date('m-d'); 
    echo"$today";
    $query = "SELECT * FROM customers WHERE DATE_FORMAT(birthday, '%m-%d') = '$today';";
    $bday = mysqli_query($conn, $query);
    

    if ($bday) {
    
        while ($row = mysqli_fetch_assoc($bday)) {
            
            //echo $row['id'] . " ".$row['name'] . " ".$row['email_id'] . " ".$row['birthday'] . " ".$row['location'] . " ". " ".$row['points'] . " ";

            // Fetching festival data here and loop through it
                $headers = "Hey ".$row['name']." Have'nt purchase cake yet ??🥺🥺 No problem we have offers for you ";
                if ($row['points'] >= 1000) {
                    $html_body = "Happy Birthday " . $row['name'] . "! We hope that your day is filled with joy and celebration. As a token of our appreciation, we would like to offer you a special birthday discount of 30% on your next purchase with us at our " . $row['location'] . " store. We value your loyalty as a customer and hope that you continue to choose our products and services for all of your needs. Thank you for being a part of our community.";
                } else {
                    $html_body = "Happy Birthday " . $row['name'] . "! We hope that your day is filled with joy and celebration. Make your birthday more joyful with us at our " . $row['location'] . " store. We value your loyalty as a customer and hope that you continue to choose our products and services for all of your needs. Thank you for being a part of our community.";
                }
                send_mail($row['email_id'], "Happy birthday ".$row['name']."🥳🥳", $html_body, $headers);
        
        } 
    } 

}



function detect_fest($conn){

    $conn= $conn;
    $today = date('Y-m-d'); // Get today's date in the format used in your database

    $query = "SELECT * FROM festival WHERE fest_date = '$today';";
    $fest = mysqli_query($conn, $query);

    if ($fest){
    $query ="select * from customers;";
    $data= mysqli_query($conn, $query);
    
    if ($data) {
    
        while ($row = mysqli_fetch_assoc($data)) {
            // Process and use $row here
            echo $row['id'] . " ".$row['name'] . " ".$row['email_id'] . " ".$row['birthday'] . " ".$row['location'] . " ". " ".$row['points'] . " ";

            while ($row_fest = mysqli_fetch_assoc($fest)) {
                echo" in whike looop";
                $headers="Dear ".$row['name'].",";
                $html_body = "Wishing you and your loved ones a joyous and prosperous ".$row_fest['fest_name']." ! May this festival bring happiness, good health, and abundance into your life. On this special occasion, I hope you get to spend quality time with your family and friends, enjoy delicious food, and create unforgettable memories. Make this festival more special with our special offers on our products.";

                send_mail($row['email_id'], "testing " . $row_fest['fest_name'], $html_body, $headers);

            }
        } 
    } 
    
    else {
        echo "Error: fff " . mysqli_error($conn);
    }
}

}


// insert_authentication_data("adityahakani29@gmail.com", "Aditya", "Adi@123" );
// detect_fest($conn)

if($userprofile != true){
    header('location:pages-login.php');
}
else
{
  detect_fest($conn);
detect_bday($conn);
}


?>


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
      <a href="index.php" class="logo d-flex align-items-center">
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
        <a class="nav-link " href="http://localhost/Php Mini Project/Toolex/index.php">
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
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      
                  
               
            
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                

                <div class="card-body">
                  <h5 class="card-title">Mail Sent</h5>

                  <h4>Festivals</h4>
                  <span>Email sent to 2 customers</span><br/>
                  <span>on the ocassion of Navratri</span>
                  <br/><br/>
                  <h4>Customers</h4>
                  <span>dhandhukiyaaryan05@gmail.com</span><br/>
                  <span>adityahakani29@gmail.com</span>

                  <br/><br/>
                  <h4>Birthday</h4>
                  <span>Birthday mail sent to Neel</span><br/>
                  <span>dhandhukiyaaryan05@gmail.com</span>

                  <br/><br/>
                  <h4>Upcoming Events</h4>
                  <span>Janmashthmi</span><br/>
                  <span>date:2021-08-05</span>

                  <br/><br/>
                  <button type="submit" name="update" class="btn btn-primary">Send Mail</button>
                </div>

              </div>
            </div><!-- End Recent Sales -->

          </div>
        </div><!-- End Left side columns -->

      </div>
    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Aryan</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
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