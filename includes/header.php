<?php
	
	require_once "db.php";

$result = mysqli_query($link, "SELECT * FROM categories");


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>BlogCMS</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Custom styles for this template -->
    <link href="css/blog.css" rel="stylesheet">

  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item " href="#">Home</a>
          <?php while($row = mysqli_fetch_assoc($result)){ ?>
            <a class="blog-nav-item " href="index.php?category=<?php echo $row['id'];?>"><?php echo $row['text'];?> </a>

           <?php
          }
          ?>
        </nav>
      </div>
    </div>

    <div class="container">

      

      <div class="row">

        <div class="col-sm-8 blog-main">