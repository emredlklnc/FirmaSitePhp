<?php 
include 'nedmin/netting/baglan.php';
include 'header.php';
include 'slider.php';



?>

 

  <main id="main">

  


  <?php include 'myteam.php';?>
    <!-- #team -->

    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div  class="container">

        <div class="section-header">
          <h3>İletişime Geçin</h3>
          <p>Bize bu iletişim bilgilerinden 7/24 ulaşabilirsiniz</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Adres</h3>
              <address><?php echo $ayarcek['ayar_adres']; ?></address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Telefon Numarası</h3>
              <p><a href="tel:+155895548855"><?php echo $ayarcek['ayar_tel']; ?></a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Mail Adresi</h3>
              <p><a href="mailto:info@example.com"><?php echo $ayarcek['ayar_mail']; ?></a></p>
            </div>
          </div>

        </div>

<hr>
         <div class="row contact-info">

          <div class="col-md-6">
            <div class="contact-address">
                      <iframe style="width: 500px; height: 260px;"
                  frameborder="0" style="border:0"
                  src="https://www.google.com/maps/embed/v1/place?key=<?php echo $ayarcek['ayar_goooglemap']; ?>
                &q=<?php echo $ayarcek['ayar_adres']; ?>" allowfullscreen>
                    </iframe>
            </div>
          </div>

          <div class="col-md-6">
            <br>
                  <div style="width: 450px;" class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Adınız.." data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Adresiniz.." data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Konu.." data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mesajınız.."></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Mesaj Gönder</button></div>
          </form>
        </div>
          </div>

        </div>


        
   

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <?php 

    include 'footer.php';
   ?>