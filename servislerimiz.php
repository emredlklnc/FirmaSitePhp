<?php 
include 'nedmin/netting/baglan.php';
include 'header.php';
include 'slider.php';


$resimsor=$db->prepare("select * from galeriresim order by resim_tarih DESC limit 6");
$resimsor->execute();
   ?>
  

  <main id="main">

  
   
    <?php include 'servisler.php';?>

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Youtue Kanalım</h3>
        <p>Her Alanda Eğlence Dolu İçerikler...</p>
        <a class="cta-btn" href="<?php echo $ayarcek['ayar_youtube']; ?>" target="_blank">KANALIMA GİT</a>
      </div>
    </section><!-- #call-to-action -->




    







<section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">üRÜNLERİMİZ</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
               <li class="active" data-filter="*">All</li>
                              <li data-filter=".cat1">Karikatür</li>
                              <li data-filter=".cat2">Yazılım</li>
                              <li data-filter=".cat3">Bilgisayar</li>
                              <li data-filter=".cat4">Web Tasrımı</li>
                              <li data-filter=".cat5">Sosyal Media</li>
            </ul>


          </div>
        </div>

        <div class="row portfolio-container">




               <?php 
                      while($resimcek=$resimsor->fetch(PDO::FETCH_ASSOC))
                              { 

                              if ($resimcek['resim_kategori']=="Karikatür") { ?>
                                

                                  <div class="col-lg-4 col-md-6 portfolio-item cat1 wow fadeInUp">
                                    <div class="portfolio-wrap">
                                      <figure>
                                        <img src="<?php echo $resimcek['resim_resimyol']; ?>" class="img-fluid" alt="">
                                        <a href="<?php echo $resimcek['resim_resimyol']; ?>" data-lightbox="portfolio" data-title="<?php echo $resimcek['resim_kategori']; ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                      </figure>

                                      <div class="portfolio-info">
                                        <h4><a href="#"><?php echo $resimcek['resim_baslik']; ?></a></h4>
                                        <p><?php echo $resimcek['resim_ad']; ?></p>
                                      </div>
                                    </div>
                                  </div>

                            <?php }elseif($resimcek['resim_kategori']=="Yazılım"){ ?>

                                   <div class="col-lg-4 col-md-6 portfolio-item cat2 wow fadeInUp">
                                    <div class="portfolio-wrap">
                                      <figure>
                                        <img src="<?php echo $resimcek['resim_resimyol']; ?>" class="img-fluid" alt="">
                                        <a href="<?php echo $resimcek['resim_resimyol']; ?>" data-lightbox="portfolio" data-title="<?php echo $resimcek['resim_kategori']; ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                      </figure>

                                      <div class="portfolio-info">
                                        <h4><a href="#"><?php echo $resimcek['resim_baslik']; ?></a></h4>
                                        <p><?php echo $resimcek['resim_ad']; ?></p>
                                      </div>
                                    </div>
                                  </div>

                          <?php }elseif($resimcek['resim_kategori']=="Bilgisayar"){ ?>

                                    <div class="col-lg-4 col-md-6 portfolio-item cat3 wow fadeInUp">
                                    <div class="portfolio-wrap">
                                      <figure>
                                        <img src="<?php echo $resimcek['resim_resimyol']; ?>" class="img-fluid" alt="">
                                        <a href="<?php echo $resimcek['resim_resimyol']; ?>" data-lightbox="portfolio" data-title="<?php echo $resimcek['resim_kategori']; ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                      </figure>

                                      <div class="portfolio-info">
                                        <h4><a href="#"><?php echo $resimcek['resim_baslik']; ?></a></h4>
                                        <p><?php echo $resimcek['resim_ad']; ?></p>
                                      </div>
                                    </div>
                                  </div>

                          <?php }elseif($resimcek['resim_kategori']=="Web Tasrımı"){ ?>

                                      <div class="col-lg-4 col-md-6 portfolio-item cat4 wow fadeInUp">
                                    <div class="portfolio-wrap">
                                      <figure>
                                        <img src="<?php echo $resimcek['resim_resimyol']; ?>" class="img-fluid" alt="">
                                        <a href="<?php echo $resimcek['resim_resimyol']; ?>" data-lightbox="portfolio" data-title="<?php echo $resimcek['resim_kategori']; ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                      </figure>

                                      <div class="portfolio-info">
                                        <h4><a href="#"><?php echo $resimcek['resim_baslik']; ?></a></h4>
                                        <p><?php echo $resimcek['resim_ad']; ?></p>
                                      </div>
                                    </div>
                                  </div>


                          <?php }elseif($resimcek['resim_kategori']=="Sosyal Media"){ ?>

                                       <div class="col-lg-4 col-md-6 portfolio-item cat5 wow fadeInUp">
                                    <div class="portfolio-wrap">
                                      <figure>
                                        <img src="<?php echo $resimcek['resim_resimyol']; ?>" class="img-fluid" alt="">
                                        <a href="<?php echo $resimcek['resim_resimyol']; ?>" data-lightbox="portfolio" data-title="<?php echo $resimcek['resim_kategori']; ?>" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                                        <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                                      </figure>

                                      <div class="portfolio-info">
                                        <h4><a href="#"><?php echo $resimcek['resim_baslik']; ?></a></h4>
                                        <p><?php echo $resimcek['resim_ad']; ?></p>
                                      </div>
                                    </div>
                                  </div>


                              <?php } ?>
                    <?php } ?>


        </div>
                 <div class="container text-center">
                      <a style="float: right;" class="cta-btn" href="icerikgalerim.php">DAHA FAZLASI</a>
              </div>
      </div>
    </section><!-- #portfolio -->




  


 

  
    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Our Clients</h3>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section><!-- #clients -->
    <!--==========================
      Contact Section
    ============================-->
   
  </main>

  <!--==========================
    Footer
  ============================-->
  <?php 

    include 'footer.php';
   ?>