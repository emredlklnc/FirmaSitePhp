
<?php 
include 'nedmin/netting/baglan.php';
  $servissor=$db->prepare("select * from servisler");
   $servissor->execute();
 ?>

<section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>SERVİSLERİMİZ</h3>
          <p>Yenilikçi Dünyanın Kapılarını Aralayın</p>
        </header>

        <div class="row">




            <?php     
                      $say=0;
                      while($serviscek=$servissor->fetch(PDO::FETCH_ASSOC))
                              { ?>


                                  <?php   if ($say<3) { ?>


                                      <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
                                        <div class="icon"><i class="ion-ios-<?php echo $serviscek['servis_icon']; ?>-outline"></i></div>
                                        <h4 class="title"><a href="yakinda.php"><?php echo $serviscek['servis_baslik']; ?></a></h4>
                                        <p class="description"><?php echo $serviscek['servis_icerik']; ?></p>
                                      </div>

                                  <?php }else{ ?>

                                      <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                                        <div class="icon"><i class="ion-ios-<?php echo $serviscek['servis_icon']; ?>-outline"></i></div>
                                        <h4 class="title"><a href="yakinda.php"><?php echo $serviscek['servis_baslik']; ?></a></h4>
                                        <p class="description"><?php echo $serviscek['servis_icerik']; ?></p>
                                      </div>

                                  <?php } ?>
                                     

              <?php } ?>



        </div>

      </div>
    </section><!-- #services -->