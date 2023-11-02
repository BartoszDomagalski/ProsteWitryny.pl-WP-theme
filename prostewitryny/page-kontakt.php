<?php

/* Template Name: strona-kontakt */ 

get_header(); ?>


<section id="kontakt-baner">
  <div class="container-fluid">
    <div class="row">
      <div class="col page-header-col">
        <h2 class="page-header">
          <strong>Kontakt</strong>
        </h2>
        <hr>
      </div>
    </div>
  </div>
</section>

<section id="kontakt-dane">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-sm-12 col-lg-5">

        <h3 class="column-heading">Formularz <span>kontaktowy</span></h3>

        <?php echo do_shortcode( '[wpforms id="155"]' ); ?>

      </div>
      <div class="col-sm-12 col-lg-6">

        <h3 class="column-heading">Nasze <span>dane</span></h3>

        <div class="contact-icon-box">
          <div class="row no-gutters">
            <div class="col-2 icon-col">
              <i class="fas fa-map-marked-alt"></i>
            </div>
            <div class="col-10">
              <h2 class="contact-icon-title">Adres - Siedziba 1</h2>
              <h3 class="contact-icon-content">
                  <a href="https://goo.gl/maps/mLpyn54mniLeHwPV7" target="_blank">Brogi 19/18, 31-431 Kraków</a>
              </h3>
            </div>
          </div>
        </div>
        <div class="contact-icon-box">
          <div class="row no-gutters">
            <div class="col-2 icon-col">
              <i class="fas fa-map-marked-alt"></i>
            </div>
            <div class="col-10">
              <h2 class="contact-icon-title">Adres - Siedziba 2</h2>
              <h3 class="contact-icon-content">
                  <a href="https://www.google.com/maps/place/MocOZE+-+Fotowoltaika,+Pompy+ciep%C5%82a/@50.232633,20.067362,15z/data=!4m5!3m4!1s0x0:0xa5f4ac864a5d61a!8m2!3d50.232633!4d20.067362" target="_blank">Krakowska 62d, 32-090 Słomniki</a>
              </h3>
            </div>
          </div>
        </div>

        <div class="contact-icon-box">
          <div class="row no-gutters">
            <div class="col-2 icon-col">
              <i class="fas fa-mobile-alt"></i>
            </div>
            <div class="col-10">
              <h2 class="contact-icon-title">Telefon</h2>
              <h3 class="contact-icon-content">
                <a href="tel:+48602726478">+48 602 726 478</a>
              </h3>
            </div>
          </div>
        </div>

        <div class="contact-icon-box">
          <div class="row no-gutters">
            <div class="col-2 icon-col">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="col-10">
              <h2 class="contact-icon-title">Email</h2>
              <h3 class="contact-icon-content">
                <a href="mailto:biuro@prostewitryny.pl">biuro@prostewitryny.pl</a>
              </h3>
            </div>
          </div>
        </div>

        <p class="contact-info-godziny">
          Biuro Obsługi Klienta czynne jest w godzinach:<br>
          Pn-Pt - 10-16<br>
          Zapraszamy do kontaktu
        </p>

        <p class="contact-info-firma">
          <strong>ProsteWitryny.pl - Twoja Prosta Strona Internetowa Kraków</strong><br>
          ProsteWitryny.pl jest częścią Family Party non-profit spółka z ograniczoną odpowiedzialnością z siedzibą w Słomnikach przy ulicy Krakowskiej 62d, 32-090 Słomniki, wpisana do rejestru przedsiębiorców przez Sąd Rejonowy dla Krakowa-Śródmieścia w Krakowie, XII Wydział Gospodarczy pod numerem KRS 0000746071, posiadająca REGON 38110158500000 oraz NIP 6821777738
        </p>

      </div>
    </div>

  </div>

</section>

<section id="map-siedziba-2">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h3 class="column-heading">Mapa <span>Siedziba 1</span></h3>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1280.1554587995577!2d19.959893339014677!3d50.08046541408531!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47165b800dd8a60f%3A0x845faefaac08b0b7!2sProsteWitryny.pl!5e0!3m2!1spl!2spl!4v1693345902385!5m2!1spl!2spl" width="1920" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

      </div>
    </div>
  </div>
</section>

<section id="map-siedziba-2">

<div class="container-fluid">
    <div class="row">
      <div class="col">
        <h3 class="column-heading">Mapa <span>Siedziba 2</span></h3>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2552.174951381386!2d20.06477267689708!3d50.232636403022525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471652f0c26efe05%3A0x5da669398108cfcd!2sKrakowska%2062d%2C%2032-090%20S%C5%82omniki%2C%20Polska!5e0!3m2!1spl!2snl!4v1693309887455!5m2!1spl!2snl" width="1920" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
      </div>
    </div>
  </div>
</section>




<?php get_footer(); ?>