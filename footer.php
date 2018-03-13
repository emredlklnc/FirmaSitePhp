<?php 

$twitsor=$db->prepare("SELECT * from twit where twit_id=?");
$twitsor->execute(array(1));
$twitcek=$twitsor->fetch(PDO::FETCH_ASSOC);


$twitsor2=$db->prepare("SELECT * from twit where twit_id=?");
$twitsor2->execute(array(2));
$twitcek2=$twitsor2->fetch(PDO::FETCH_ASSOC);


 ?>


<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3><?php echo $ayarcek['ayar_logoisim']; ?></h3>
            <br>
              <div class="col-md-12">
            <div class="mu-single-footer">
              
              <ul class="list-unstyled">
                  <li class="media">
                   <span class="fa fa-twitter"></span>
                    <div class="media-body">
                      <p><strong>@<?php echo $twitcek['twit_sahibi']; ?></strong> :<?php echo $twitcek['twit_icerik'];?></p>
                      <a href="#">2 hours ago</a>
                    </div>
                  </li>
                  <li class="media">
                    <span class="fa fa-twitter"></span>
                    <div class="media-body">
                      <p><strong>@<?php echo $twitcek2['twit_sahibi'];?></strong> :<?php echo $twitcek2['twit_icerik'];?></p>
                      <a href="#">2 hours ago</a>
                    </div>
                  </li>
              </ul>
            </div>
          </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>KISAYOL LİNKLERİ</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="index.php">Anasayfa</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="hakkimizda.php">Hakkımızda</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="icerikgalerim.php">İçerikler</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="iletisim.php">İletişim</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="iletisim.php">Yedek</a></li>
                          
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>İLETİŞİME GEÇ</h4>
            <p>
              <?php echo $ayarcek['ayar_adres']; ?><br>
              <br>
              <strong>Telefon:</strong><?php echo $ayarcek['ayar_tel']; ?><br>
              <strong>Email:</strong><?php echo $ayarcek['ayar_mail']; ?><br>
            </p>

            <div class="social-links">
              <a href="<?php echo $ayarcek['ayar_twitter']; ?>" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="<?php echo $ayarcek['ayar_facebook']; ?>" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="<?php echo $ayarcek['ayar_copylink']; ?>" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="<?php echo $ayarcek['ayar_google']; ?>" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="<?php echo $ayarcek['ayar_in']; ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>HAYATA DAİR HERŞEY</h4>
            <p>"Hayat; her insanın yaşamak zorunda olduğudur. Hayatın içinde her şeyi bulmak mümkündür. Önemli olan yaşamak zorunda olduğumuz hayata, bütün olumsuzluklarına rağmen yılmadan, kaldığı yerden devam edebilmektir. Unutmayın ki hayat son nefesimize kadar devam eder; boş boş oturmak bile aslında hayatın içinde yaptığımız bir eylemdir. Sevelim, sevilelim, gerisi gelir."</p>
            
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Yunus Emre Dalkılınç</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
        Takip Et <a href="<?php echo $ayarcek['ayar_copylink']; ?>">Yunus Emre</a> 
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>





  

</body>
</html>
