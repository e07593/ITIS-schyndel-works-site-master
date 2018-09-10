<?php
//Name: index.php
//Task: Home page.
//Auth: Rohit Lakhanpal
//LMod: 25/04/2017

// Include relevant modules
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/common/constants.php";
include_once($path);

// Page Properties
$page_title=basename(__FILE__, '.php').".php"; // File Name is the page header
$page_description="This page serves as the home page for [".getcwd()."].";
    
$server_var = $_SERVER['PHP_AUTH_DIGEST'];
$auth_info = "<div class=\"alert alert-danger\"><strong>Danger!</strong> This page is meant to be protected by digest-authentication.</div>";
if (isset($server_var)) {
    $auth_info = "<div class=\"alert alert-success\"><strong>Success!</strong> This page is protected by digest-authentication. Welcome ".$server_var.".</div>";
}

?>



  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Home Page">
    <meta name="author" content="Schyndel Works">

    <title>
      <?php echo $site_title; ?>
    </title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="/assets/css/site.css" rel="stylesheet" />

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
  </head>

  <body>

    <!-- Navigation -->
    <?php echo $nav_html; ?>

      <!-- Page Content -->
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h1><?php echo $page_title; ?></h1>
            <p class="lead">
              <?php echo $page_description; ?>
            </p>

            <!-- Echo auth info -->
            <?php echo $auth_info; ?>
          </div>
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container -->

  </body>

  </html>