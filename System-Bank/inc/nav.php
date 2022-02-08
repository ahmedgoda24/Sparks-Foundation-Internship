<!-- nav section starts here -->

<?php
require "classes/Request.php";
require "classes/Session.php";
// require_once "classes/Db.php";



$request=new Request;
$session=new Session;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sparks Bank</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/table.css">
  
  <script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- <link rel = "icon" href = "img/logo.png" type = "image/x-icon"> -->
</head>


<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php">BankSystem</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">



        <ul class="navbar-nav ml-auto mt-2 mt-lg-0 ">
               
             
                <li class="nav-item">
                <a class="nav-link text-white" href="index.php">View All Customers</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="add-customer.php">Add Customer</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="Transfer-history.php">View Transfer History</a>
                </li>
            </ul>

      </div>

    </div>
  </nav>

<?php
  if ($session->has('success')) : ?>
      <div class="alert alert-success text-center">
  
          <?= $session->get('success') ?>
      </div>
  <?php endif;$session->remove("success") ?>
  
   
<?php
    if ($session->has('error')) : ?>
      <div class="alert alert-danger text-center">
  
          <?= $session->get('error') ?>
      </div>
  <?php endif;$session->remove("error") ?>


 