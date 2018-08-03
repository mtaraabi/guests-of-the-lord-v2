<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Guests of The Lord</title>
    <meta content="IE=edge" http-equiv="x-ua-compatible">
    <meta content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="yes" name="apple-touch-fullscreen">
    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Icons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" media="all" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link href="css/keyframes.css" rel="stylesheet" type="text/css">
    <link href="css/materialize.min.css" rel="stylesheet" type="text/css">
    <link href="css/swiper.css" rel="stylesheet" type="text/css">
    <link href="css/swipebox.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
     <link href="css/mystyle.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <div class="m-scene" id="main"> <!-- Main Container -->

      <!-- Left Sidebar -->
      <ul id="slide-out-left" class="side-nav collapsible">
        <li>
          <div class="sidenav-header primary-color">

            <div class="nav-avatar">
              <img class="circle avatar" src="img/user.jpg" alt="">
              <div class="avatar-body">
                <h3>"User Name"</h3>
                <p>"Motawaf"</p>
              </div>
            </div>
          </div>
        </li>
        <li>
          <li><a href="index.html" class="no-child"><i class="ion-android-home"></i> Home</a></li>
          <li><a href="request.html" class="no-child"><i class="ion-ios-chatboxes"></i> Requests</a></li>
          <li><a href="send.php" class="no-child"><i class="ion-android-send"></i> Send a Notification</a></li>
          <li><a href="find.html" class="no-child"><i class="ion-android-map"></i> Find a Pligrim</a></li>
          <li><a href="list.php" class="no-child"><i class="ion-android-list"></i> Pilgrims List</a></li>
          <li><a href="group.php" class="no-child"><i class="ion-ios-list-outline"></i> Sponsor Group</a></li>
          <li><a href="user.php" class="no-child"><i class="ion-android-person"></i> User Info</a></li>
          <li><a href="contact.html" class="no-child"><i class="ion-android-map"></i> Contact</a></li>
       </li>

      </ul>
      <!-- End of Sidebars -->

      <!-- Page Content -->
      <div id="content" class="page">

        <!-- Toolbar -->
        <div id="toolbar" class="primary-color">
          <div class="open-left" id="open-left" data-activates="slide-out-left">
            <i class="ion-android-menu"></i>
          </div>
          <span class="title">User Info</span>
          <div class="open-right" id="open-right" data-activates="slide-out">
            <i class="ion-android-person"></i>
          </div>
        </div>

        <!-- Main Content -->
        <div class="animated fadeinup">
          <!-- user info -->
          <div class="blog-card animated fadein delay-1">
            <div class="blog-preview p-20">
              <h4 class="uppercase">User Information</h4>
              <div class="row">
                <div class="col s12"> Age:</div>
                <div class="col s12"> Sex:</div>
                <div class="col s12"> Nationalty:</div><br><br>
                <div class="margin-up-20-p"></div>
                <h4 class="uppercase">Sponser Information</h4>
                <div class="col s12"> Sponser Name:</div>
                <div class="col s12"> Contact Person:</div>
                <div class="col s12"> Contact Number:</div>
              </div>
            </div>       
          </div>
             <!-- Footer -->
              <footer class="page-footer primary-color">
              <div class="footer-copyright blue darken-1">
                <div class="container">
                Guests of The Lord
                </div>
              </div>
              </footer>
        
        </div> <!-- End of Main Contents -->


      </div> <!-- End of Page Content -->
        
    </div> <!-- End of Page Container -->


    <script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/jquery.swipebox.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/masonry.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/functions.js"></script>
  </body>
</html>
