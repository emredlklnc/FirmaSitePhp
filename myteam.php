<?php 

include 'nedmin/netting/baglan.php';

$teamsor=$db->prepare("select * from team");
$teamsor->execute();

 ?>



<section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>Takım Arkadaşlarımız</h3>
          <p>Takım Arkadaşlarımızı Sosyal Mediadan Takip Edin</p>
        </div>

        <div class="row">


          <?php 
                      while($teamcek=$teamsor->fetch(PDO::FETCH_ASSOC))
                              {   ?>


                  <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <div class="member">
                      <img src="<?php echo $teamcek['team_resimyol']; ?>" class="img-fluid" alt="">
                      <div class="member-info">
                        <div class="member-info-content">
                          <h4><?php echo $teamcek['team_adsoyad']; ?></h4>
                          <span><?php echo $teamcek['team_meslek']; ?></span>
                          <div class="social">
                            <a href="<?php echo $teamcek['team_t']; ?>"><i class="fa fa-twitter"></i></a>
                            <a href="<?php echo $teamcek['team_f']; ?>"><i class="fa fa-facebook"></i></a>
                            <a href="<?php echo $teamcek['team_g']; ?>"><i class="fa fa-google-plus"></i></a>
                            <a href="<?php echo $teamcek['team_in']; ?>"><i class="fa fa-linkedin"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

      <?php } ?>

         

        

        </div>

      </div>
    </section>