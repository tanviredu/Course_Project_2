<?php 
  session_start();
  require_once('asset/config.php');
  require_once('asset/database.php');
  require_once('asset/log_backend.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Write in The Blog</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <?php include('nav.php'); ?>
  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1><?php echo "Welcome ".$_SESSION['username']; ?></h1>
            <span class="subheading">A Blog Theme by Start Bootstrap</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <?php 
    // get the id

    $id = $_GET['id'];
    $username = $_SESSION['username'];

    //make the sql query
    $sql = "SELECT * FROM post WHERE  id={$id};";

    $result=$connection->query($sql);

    while($data = mysqli_fetch_array($result)){

  ?>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
          
          <h5 class="post-subtitle">
              <?php echo $data['post'] ?>
            </h5>
            
          
          <p class="post-meta">Posted by
            <b><?php echo $data['username']; ?></b>
            on 
            <b><?php echo $data['date']; ?></b></p>
        </div>
        <hr>
        
        <!-- Pager -->
        <?php }?>
        <a href="yourpostlist.php"><button class="btn btn-success">GO TO POST LIST</button></a>
      </div>
    </div>
  </div>

  <hr>

 <?php include('footer.php'); ?>