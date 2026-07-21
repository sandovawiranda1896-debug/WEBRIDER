<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>layoutit-project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- header -->
  <div class="container-fluid">
    <?php
    include 'header.php';
    ?>

    <!-- slider -->
    <?php
    include 'slider.php';
    ?>
    
    <!-- menu -->
     <?php
    include 'menu.php';
    ?>

    <!-- content/isi berganti -->
     <?php
        $req = $_GET['hal'];
        if (!empty($req)){
            include_once $req.'.php';
        }
        else {
            include_once 'home.php';
        }
     ?>
    


    <!-- footer -->
    <?php
    include 'footer.php';
    ?>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>