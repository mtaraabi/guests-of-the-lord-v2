<?php
     include 'config.php';
     

      ?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>GL Sponsor</title>
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
    <!--my style-->
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/mystyle.css" rel="stylesheet" type="text/css">
    <!--prograssive web-->
    <link rel="manifest" href="/manifest.json">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="PWAGram">
    <link rel="apple-touch-icon" href="/src/images/icons/apple-icon-57x57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="/src/images/icons/apple-icon-60x60.png" sizes="60x60">
    <link rel="apple-touch-icon" href="/src/images/icons/apple-icon-72x72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="/src/images/icons/apple-icon-76x76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="/src/images/icons/apple-icon-114x114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="/src/images/icons/apple-icon-120x120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="/src/images/icons/apple-icon-144x144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="/src/images/icons/apple-icon-152x152.png" sizes="152x152">
    <link rel="apple-touch-icon" href="/src/images/icons/apple-icon-180x180.png" sizes="180x180">
    <meta name="msapplication-TileImage" content="/src/images/icons/app-icon-144x144.png">
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="theme-color" content="#3f51b5">
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
      <div id="content">

        <!-- Toolbar -->
        <div id="toolbar" class="primary-color">
          <div class="open-left" id="open-left" data-activates="slide-out-left">
            <i class="ion-android-menu"></i>
          </div>
          <span class="title">GL Sponsor</span>
          <div class="open-right">
            <a href="notification.html">
            <i class="ion-android-notifications"><small class="small-number">5</small></i>
            </a>
          </div>
        </div>

        <!-- Main Content -->
        <div class="animated fadeinup">

          <!-- content main page after login  -->
          <div class="animated fadeinup p-20">
              <!-- Form Inputs -->
          <!--<div class="blog-card animated fadein delay-1">
            <div class="blog-preview p-20">-->
          <div>
            <?php 
                    if(isset($_POST['submit'])){

                    $title = $_POST["title"];
                    $description = $_POST["description"];
                    $sponsor_id = 1;
       
       

                    $sql = "INSERT INTO `notification`(`id`, `title`, `description`, `sponsor_id`)
                    VALUES ('', '$title', '$description', '$sponsor_id' )";

                    $create_eve_query = mysqli_query($connection, $sql);
                    //confirm_connection($create_eve_query);
                    //header("Location: index.php");

                        echo '<h4 class="alert">a Notification has been sent succssfully</h4>';
                        $connection->close();

                    };
            ?>
          </div>
          <form class="form-inputs"  method="post">
            
            <h4 class="center">Send a Request to Pilgrims!</h4>
            <div>
              <div class="input-field animated fadeinright">
                <input  name="title" type="text" class="validate" required>
                <label for="title" >Title</label>
              </div>
            </div>
            

            <div class="input-field animated fadeinright delay-5">
              <textarea class="materialize-textarea"  name="description" required></textarea>
              <label for="description">Write your resquest here</label>
            </div>

            <!-- Colored raised button -->
            

            <input type="submit" value="Submit" name="submit" class="waves-effect waves-light btn-large primary-color width-100 animated bouncein delay-6" />
            
          </form>
            <!--</div>-->
            <!--</div>-->
         </div>
          <!-- Footer -->
              <!--<footer class="page-footer primary-color">
              <div class="footer-copyright blue darken-1">
                <div class="container ">
                <div class="col s3">
                Guests of The Lord
                </div>
                
                </div>
              </div>
              </footer>-->


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
    <!--<script src="/src/js/app.js"></script>-->
    
    
  </body>
</html>
