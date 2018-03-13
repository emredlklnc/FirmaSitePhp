<?php 

include 'nedmin/netting/baglan.php';


$ayarsor=$db->prepare("SELECT * from ayar where ayar_id=?");
$ayarsor->execute(array(0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $ayarcek['ayar_title']; ?></title>

   <meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
    <meta name="keywords" content="<?php echo $ayarcek['ayar_keywords']; ?>">
    <meta name="author" content="<?php echo $ayarcek['ayar_author']; ?>">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
  

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: BizPage
    Theme URL: https://bootstrapmade.com/bizpage-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="index.php" class="scrollto"><?php echo $ayarcek['ayar_logoisim']; ?></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>
<!--class="menu-active"-->
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li ><a href="index.php">ANASAYFA</a></li>
          <li><a href="icerikgalerim.php">İÇERİKLER</a></li>
          <li><a href="blogsayfa.php">BLOG</a></li>
          <li><a href="servislerimiz.php">SERVİSLER</a></li>
          <li><a href="hakkimizda.php">HAKKIMIZDA</a></li>
          <li><a href="iletisim.php">İLETİŞİM</a></li>
          
          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
