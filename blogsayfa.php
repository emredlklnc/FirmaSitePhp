<?php 
include 'nedmin/netting/baglan.php';
include 'header.php';
include 'slider.php';



   ?>
  

<main id="main">
            <br><br><br>
              <header class="section-header">
                <h3 class="section-title">HABERLER</h3>
              </header>
     



     <?php 
                           



                                    $sayfada=3;
                                        $sorgu=$db->prepare("SELECT * FROM icerik");
                                        $sorgu->execute();
                                        $toplam_icerik=$sorgu->rowCount();


                                        $toplam_sayfa=ceil($toplam_icerik/$sayfada);


                                        $sayfa=isset($_GET['sayfa'])? (int) $_GET['sayfa']:1;

                                        if ($sayfa<1)$sayfa=1; 
                                        if ($sayfa>$toplam_sayfa) $sayfa=$toplam_sayfa;

                                        $limit=($sayfa-1)*$sayfada;


                      $iceriksor=$db->prepare("select * from icerik order by icerik_zaman DESC limit $limit,$sayfada");
                      $iceriksor->execute();




                                  while($icerikcek=$iceriksor->fetch(PDO::FETCH_ASSOC))
                                  { ?>

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
                                                        <p ><?php echo substr($icerikcek['icerik_detay'],0,150); ?>...</p>
                                                        <a href="blogsayfa-detay.php?icerik_id=<?php echo $icerikcek["icerik_id"];?>">Devamını Oku</a>       
                                                      </div>
                                                      
                                              </div>
                                              <br><br><br>

                                  <?php } ?>


                           <?php 

                          $s=0;

                          while ($s<$toplam_sayfa) {
                            $s++; ?>

                              <?php if ($s==$sayfa) { ?>


                                        <table style="padding-left: 60px; padding-top: 50px;">
                                          <tr>
                                              <td style="padding-left: 60px;">SAYFALAR :</td>
                                              <td><button><b><a href="blog.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a></b></button></td>
                                              

                                          </tr>
                                        </table>
                                              
                                     <?php } else{  ?> 


                                              <table style="padding-left: 60px; padding-top: 50px;">
                                                  <tr>
                                                      <td>SAYFALAR :</td>
                                                      <td><button><b><a style="text-decoration:right;" class="page-link" href="blog.php?sayfa=<?php echo $s; ?>"><?php echo $s; ?></a></b></button></td>
                                                      
                                                  </tr>
                                            </table>

                                              
                                    <?php } ?>

                          <?php } ?>




   
    

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