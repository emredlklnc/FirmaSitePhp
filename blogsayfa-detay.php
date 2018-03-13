<?php 
include 'nedmin/netting/baglan.php';
include 'header.php';
include 'slider.php';


$icerik_id=$_GET['icerik_id'];
$iceriksor=$db->prepare("select * from icerik where icerik_id='$icerik_id'");
$iceriksor->execute();
$icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC);
   ?>
  

<main id="main">
               <br><br><br>
              <header class="section-header">
                <h3 class="section-title">HABER DETAYLARI</h3>
              </header>
     



                                                <div style="padding-top: 50px; padding-left: 50px;" class="col-md-12">
                                                      <div class="col-md-7">
                                                        <img src="<?php echo $icerikcek['icerik_resimyol']; ?>" class="img-fluid" alt="">
                                                      </div>
                                                      <div class="col-md-6">

                                                        <ul style="padding-top: 10px; list-style: none outside none; ">
                                                                <li style="position: relative; display: inline; margin: 5px;">BY: ADMIN </li>
                                                                <li style="position: relative; display: inline; margin: 5px;"><?php echo $icerikcek['icerik_zaman']; ?></li>
                                                                <li style="position: relative; display: inline; margin: 5px;"><a href="#"><i class="fa fa-comment-o"></i>26</a></li>
                                                                <li style="position: relative; display: inline; margin: 5px;"><i class="fa fa-heart-o"></i>250</li>
                                                        </ul>
                                                          <a href=""><h3 style="padding-top: 5px;"><?php echo $icerikcek['icerik_baslik']; ?></h3></a>
                                                        <p ><?php echo $icerikcek['icerik_detay']; ?></p>
                                                              
                                                      </div>
                                                      
                                              </div>
                                              <br><br><br>

                                


                     




   
    

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



    

  
  
  
   
  </main>

  <!--==========================
    Footer
  ============================-->
  <?php 

    include 'footer.php';
   ?>