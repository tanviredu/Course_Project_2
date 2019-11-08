<?php 
    //select * from post where user=user
    //use datatable 
    // and id get link
    require_once('asset/config.php');
    require_once('asset/database.php');
    require_once('asset/log_backend.php');
    session_start();
    $username = $_SESSION['username'];
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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">
  <link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
  <link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=8ffc0b31bc8d9ff82fbb94689dd1d7ff">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <style type="text/css" class="init">
  
  </style>
  <script type="text/javascript" src="/media/js/site.js?_=df7cd4213eec7fc146048acf402cae00"></script>
  <script type="text/javascript" src="/media/js/dynamic.php?comments-page=examples%2Fbasic_init%2Fzero_configuration.html" async></script>
  <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="../resources/demo.js"></script>
  <script type="text/javascript" class="init">
  

$(document).ready(function() {
  $('#example').DataTable();
} );


  </script>

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

  <hr>

  <table id="example" class="table table-hover" style="width:100%">
      <?php
        // here gors the query
        // make the sql
      $sql = "SELECT * FROM post ;";
      $result = $connection->query($sql);
      while($row = mysqli_fetch_array($result)){


      
      ?> 




          <thead>
            <tr>
              <th>ID</th>
              <th>username</th>
              <th>Post Link</th>
              <th>Date</th>
         
                            
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $row['id'] ?></td>
              <td><?php echo $row['username'] ?></td>
              <td><a href="showpost.php?id=<?php echo $row['id']; ?>"><?php echo substr($row['post'], 0, 70);?></a></td>
              
              <td><?php echo $row['date'] ?></td>
              
                            
              
            </tr>
            
          </tbody>
          <tfoot>
                    <tr>


        <?php 
      }
        ?>
              <th>ID</th>
              <th>username</th>
              <th>Post</th>
              <th>Date</th>
              
                            <!-- jodi session na thake toile page
                            jeno aumetically login e chole ase se kaj
                            if(!isset($_SESSION['name'])){
                                header('login.php');
                            }
                             -->
              
            </tr>
          </tfoot>
        </table>







<?php include('footer.php'); ?>