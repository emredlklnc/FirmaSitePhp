<?php 
include 'nedmin/netting/baglan.php';
include 'header.php';
include 'slider.php';


$resimsor=$db->prepare("select * from galeriresim order by resim_tarih DESC limit 6");
$resimsor->execute();



$reklamsor=$db->prepare("SELECT * from reklamresim where reklam_id=?");
$reklamsor->execute(array(0));
$reklamcek=$reklamsor->fetch(PDO::FETCH_ASSOC);
   ?>
  

  <main id="main">

    <!--==========================
      Featured Services Section
    ============================-->
    <section id="featured-services">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 box">
            <i class="ion-ios-bookmarks-outline"></i>
            <h4 class="title"><a href="">Kitap</a></h4>
            <p class="description">Konu edebiyat olunca; okumayı alışkanlık haline getirenler ve sadece ‘okumaları söylendiği için zorla okuyanlar’ olarak ayırabiliriz insanları. Bir de; çeşitli bahanelere sığınıp bir türlü okumaya zaman yaratamayanlar var tabii! Aşağıdaki 6 adımı tamamladıkça, okumayı günlük bir rutin haline getirip tam bir kitap kurduna dönüştüğünüzü göreceksiniz!</p>
          </div>

          <div class="col-lg-4 box box-bg">
            <i class="ion-ios-stopwatch-outline"></i>
            <h4 class="title"><a href="">Zamanlama</a></h4>
            <p class="description">“Keşke biraz daha zamanım olsaydı!” Siz de sık sık böyle düşünüyor musunuz? Aslında tüm insanlar zaman konusunda eşittir. Zengin ve güçlü insanlar fakirlere göre daha fazla zamana sahip değildir. Ayrıca zengin ya da fakir olsun kimse zamanı biriktiremez. Zaman geçtiğinde bir daha geri alınamaz. Öyleyse en iyisi sahip olduğumuz zamanı akıllıca kullanmaktır. Peki nasıl? Şimdi zamanı akıllıca kullanmak konusunda birçok kişiye yardımcı olmuş dört öneriyi görelim.</p>
          </div>

          <div class="col-lg-4 box">
            <i class="ion-ios-heart-outline"></i>
            <h4 class="title"><a href="">Sosyal İlişkiler</a></h4>
            <p class="description">Sosyal hayattaki düzeni ve güvenliği sağlamaya yarayan çeşitli sosyal kuralların mevcut olduğunu evvelce belirtmiştik. Bu kuralları, kaynaklarını göz önünde bulundurarak;1-din kuralları,2-ahlak kuralları,3– görgü kuralları,4– hukuk kuralları</p>
          </div>

        </div>
      </div>
    </section><!-- #featured-services -->

    <!--==========================


    <!--==========================
      Services Section
    ============================-->
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



    <!--==========================
      Facts Section
    ============================-->
    <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Facts</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $reklamcek['reklam_alan1deger']; ?></span>
            <p><?php echo $reklamcek['reklam_alan1']; ?></p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $reklamcek['reklam_alan2deger']; ?></span>
            <p><?php echo $reklamcek['reklam_alan2']; ?></p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $reklamcek['reklam_alan3deger']; ?></span>
            <p><?php echo $reklamcek['reklam_alan3']; ?></p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up"><?php echo $reklamcek['reklam_alan4deger']; ?></span>
            <p><?php echo $reklamcek['reklam_alan4']; ?></p>
  				</div>

  			</div>

        <div class="facts-img">
          <img src="<?php echo $reklamcek['reklam_resimyol']; ?>" alt="" class="img-fluid">
        </div>

      </div>
    </section><!-- #facts -->

    <!--==========================
      Portfolio Section
    ============================-->
    







<section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">ÜRÜNLERİMİZ</h3>
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



<?php include 'myteam.php' ?>
  


    <!--==========================
      Clients Section
    ============================-->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- #testimonials -->

  
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