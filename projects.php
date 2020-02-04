<?php

  require('includes/scripts.php');
?>
<!DOCTYPE html>
<html>
<head> 
  <title>Simple PHP Site</title>
  <style>

    body {
      background: #1b1b1b;
    }

    .container{
      max-width:1200px;
      margin: 0 auto;
    }

    header{
      margin: 100px 0 0;
      background: #000;
      color: white;
      text-align: center;
    }

    header a {
      color: #fff;
      padding: 20px;
      display: inline-block;
    }

    section{
      background: #fff;
      min-height: 600px;
    }
  </style>
</head>

<body>
  <div class='container'>
  <?php include('includes/header.php')?>
    <section>
      <h1> Projects </h1>
    </section>
  </div>
</body>

</html>