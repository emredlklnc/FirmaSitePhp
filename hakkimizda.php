<?php 
include 'nedmin/netting/baglan.php';

  include 'header.php';

  include 'slider.php';


$hakkımızdasor=$db->prepare("SELECT * from hakkimizda where hakkimizda_id=?");
$hakkımızdasor->execute(array(0));
$hakkımızdacek=$hakkımızdasor->fetch(PDO::FETCH_ASSOC);
   ?>

  <main id="main">

 
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3><?php echo $hakkımızdacek['hakkimizda_baslik']; ?></h3>
          <p><?php echo $hakkımızdacek['hakkimizda_altbaslik']; ?></p>
        </header>

        <div class="row about-cols">

          <div class="col-md-4 wow fadeInUp">
            <div class="about-col">
              <div class="img">
                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Misyonumuz</a></h2>
              <p>
                <?php echo $hakkımızdacek['hakkimizda_misyon']; ?>
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-plan.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-list-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Planlarımız</a></h2>
              <p>
                <?php echo $hakkımızdacek['hakkimizda_icerik']; ?>
              </p>
            </div>
          </div>

          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <div class="img">
                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                <div class="icon"><i class="ion-ios-eye-outline"></i></div>
              </div>
              <h2 class="title"><a href="#">Vizyonumuz</a></h2>
              <p>
                <?php echo $hakkımızdacek['hakkimizda_vizyon']; ?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

 



  </main>

  <!--==========================
    Footer
  ============================-->
  <?php 

    include 'footer.php';
   ?>