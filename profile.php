<?php
require_once "header.php";
?>
<div class='darzi darzi-image'>


<!-- <?php
echo $_SESSION['name'] . "<br>" ;
echo $_SESSION['email'] . "<br>" ;
echo $_SESSION['experience'] . "<br>" ;
echo $_SESSION['address'] . "<br>" ;


?>
 -->
<!doctype html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/custom.css">
</head>
<body class="bg-light">
  <!--[if lt IE 8]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <![endif]-->

  <div class="container">

    <div class="row jumbotron-container">
      <div class="jumbotron jumbotron-sm-padding text-center bg-white generic-shadow">
        <div class="row">
          <div class="avatar-container">
            <img class="img-circle img-thumbnail avatar" src="https://randomuser.me/api/portraits/med/men/83.jpg" alt="Avatar">
            <span class="glyphicon glyphicon-zoom-in avatar-details avatar-details-shadow cursor-pointer" onclick="alert('Show large avatar')"></span>
          </div>
          <div class="row name-container">
            <p></p>
            <h5></h5>
          </div>
        </div>

        <div class="row">
          <button class="btn btn-sm btn-primary">
            Friends <span class="badge">424</span>
          </button>
          <button onclick="location.href='#sendMessage'" class="btn btn-sm btn-primary">
            Send Message
          </button>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading text-center">
            <h2 class="panel-title">PROFILE</h2>
          </div>
          <div class="panel-body">
            <div class="media">
              <div class="media-left">
                <img src="resources/posts/jerry.jpeg" class="media-object img-thumbnail">
              </div>
              <div class="media-body">
                <h4 class="media-heading">What's the Deal With...</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip<small>...</small>
                  <a href="#">
                    <small>Read more</small>
                  </a>
                </span>
              </div>
            </div>

            <hr>

            <div class="media">
              <div class="media-left">
                <img src="resources/posts/iron-throne.jpg" class="media-object img-thumbnail">
              </div>
              <div class="media-body">
                <h4 class="media-heading">Is Bran Stark the Night King?</h4>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip<small>...</small>
                  <a href="#">
                    <small>Read more</small>
                  </a>
                </span>
              </div>
            </div>

            <div class="text-center panel-button-container">
              <button class="btn btn-sm btn-primary">View all</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Basics</h3>
          </div>
          <div class="panel-body panel-container">
            <address>
              <strong>Name</strong><br>
            <?php   echo $_SESSION['name']  ?>
            </address>

            <address>
              <strong>Birthday</strong><br>
              July 14, 1983
            </address>

            <address>
              <strong>Gender</strong><br>
               <?php echo $_SESSION['genderBox'] ?>
            </address>

            <address>
              <strong>Experience</strong><br>
               <?php echo $_SESSION['experience'] ?>
            </address>

            <address>
              <strong>Member since</strong><br>
              September 24, 2010
            </address>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Contact</h3>
          </div>
          <div class="panel-body">
            <address>
              <strong> <?php echo $_SESSION['address'] ?></strong><br>
            
            </address>

            <address>
              <strong>Username</strong><br>
              lazyduck408
            </address>

            <address>
              <strong>Email</strong><br>
              <a href="mailto: <?php echo $_SESSION['email'] ?>"><?php echo $_SESSION['email'] ?></a>
            </address>

            <address>
              <strong>Phone</strong><br>
              <?php echo $_SESSION['phone'] ?>
            </address>
          </div>
        </div>
      </div>
    </div>

    <!-- Replace with embedded Google Maps widget -->
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-body well-sm text-right">
            <img class="img-responsive" src="resources/map.png" alt="Location">
            <small>1861 Jan Pieterszoon Coenstraat, Maasdriel, Zeeland 69217, Netherlands</small>
          </div>
        </div>
      </div>
    </div>

    
  </div>

</body>
</html>
