<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin2 </title>
  <link rel="stylesheet" href="style.css" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css'>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- plugins:css -->
  <link rel="stylesheet" href="assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="assets/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" type="text/css" href="assets/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body class="with-welcome-text">
<header>
      <div class="hero">
        <nav>
          <div class="logo"><img src="LOGOZL-removebg-preview.png" alt=""></div>
          <div class="navlinks">
          <a class="login" href="login.php"><i class="fa-solid fa-user"></i> </a>
            
            <a href="home.php" class="cart_shop" style="font-size: smaller;"><i class="fa-solid fa-right-from-bracket"></i> LOG OUT</a>         
      </div>
          
        </nav>
        
      </div>
</header>
  <div class="container-scroller">
    
    <!-- partial -->
    <div class="container-fluid page-body-wrapper" style="margin: 0; padding:0">
      <!-- partial:partials/_settings-panel.html -->
      

      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    
    
    
    <li class="nav-item nav-category">Forms and Datas</li>
    <li class="nav-item">
      <a class="nav-link"  href="insert_products.php" aria-expanded="false"
        aria-controls="form-elements">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title">Insert Products</span>
        <i class="menu-arrow"></i>
      </a>
      
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
        <i class="menu-icon mdi mdi-chart-line"></i>
        <span class="menu-title"></span>
        <i class="menu-arrow"></i>
      </a>
      
    </li>
    <li class="nav-item">
      <a  class="nav-link"  href="orders.php" aria-expanded="false" aria-controls="tables">
        <i class="menu-icon mdi mdi-table"></i>
        <span class="menu-title">Orders</span>
        <i class="menu-arrow"></i>
      </a>
      
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
        <i class="menu-icon mdi mdi-layers-outline"></i>
        <span class="menu-title">Icons</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="icons">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../pages/icons/mdi.html">Mdi icons</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item nav-category">pages</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="menu-icon mdi mdi-account-circle-outline"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="../pages/samples/login.html"> Login </a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item nav-category">help</li>
    <li class="nav-item">
      <a class="nav-link" href="http://bootstrapdash.com/demo/star-admin2-free/docs/documentation.html">
        <i class="menu-icon mdi mdi-file-document"></i>
        <span class="menu-title">Documentation</span>
      </a>
    </li>
  </ul>
</nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                
                
                        <div class="row flex-grow">
                          <div class="col-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="card-title card-title-dash">Users</h4>
                                    
                                  </div>
                                  <div>
                                    <a href="register.php"><button class="btn btn-primary btn-lg text-white mb-0 me-0" type="button"><i
                                        class="mdi mdi-account-plus"></i>Add new user</button></a>
                                  </div>
                                </div>
                                <div class="table-responsive  mt-1">
                                  <table class="table select-table">
                                    <thead>
                                      <tr>
                                        <th>
                                          USER ID
                                        </th>
                                        <th>USER NAME</th>
                                        <th>PHONE NUMBER</th>
                                        <th>EMAIL</th>
                                        <th>NUMBER OF ORDERS</th>
                                      </tr>
                                    </thead>
                                <?php 
                                  
                                  
                                  include('connect.php');

                                  $sql = "SELECT * FROM `users` ";
                                  $result = mysqli_query($connect , $sql);

                                  
                                  

                                 ?>
                                    <tbody>

                                    <?php while($row = mysqli_fetch_assoc($result)){ ?>
                                      <tr>
                                        <td>
                                          <?php echo $row['user_id'] ?>
                                        </td>
                                        <td>
                                          <div class="d-flex ">
                                            <div>
                                              <h6><?php echo $row['username'] ?></h6>
                                              
                                            </div>
                                          </div>
                                        </td>
                                        <td>
                                          <h6><?php echo $row['phone_number'] ?></h6>
                                        </td>
                                        <td>
                                          <h6><?php echo $row['email'] ?></h6>
                                        </td>
                                        <td>
                                          <div class="badge badge-opacity-warning"><?php
                                            $id = $row['user_id'] ;
                                           $requete = "SELECT * FROM `cart_details` WHERE ip_address='$id'" ;
                                           $resultat = mysqli_query($connect , $requete);
                                           $count_cart_items = mysqli_num_rows($resultat);
                                           echo $count_cart_items ;
                                            
                                          ?></div>
                                        </td>
                                      </tr>
                                      
                                      <?php } ?>
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        

                               
                              
                          
                       
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="assets/vendors/chart.js/Chart.min.js"></script>
  <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="assets/js/dashboard.js"></script>
  <script src="assets/js/proBanner.js"></script>
  <!-- <script src="../../assets/js/Chart.roundedBarCharts.js"></script> -->
  <!-- End custom js for this page-->
</body>

</html>