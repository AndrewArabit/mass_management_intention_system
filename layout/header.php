<?php 
define('BASE_URL', 'http://massIntention.com/');

$create_intention_link = BASE_URL . 'create_mass_intention.php';
$index = BASE_URL . 'index.php';
?>


<!doctype html>
<html lang="en">

<head>
  <title>Mass Management Intention System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- datatables -->
  
  <link src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"></link>
  <link src="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css"></link>
</head>


<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="margin: 0px 0px 20px">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="<?= $index ?>">Mass Management Intention System</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="<?= $create_intention_link ?>">
        <i class="bi bi-file-plus-fill"></i> Create Intentions
     </a>
    </li>

  </ul>
</nav>

<div class="container">

    