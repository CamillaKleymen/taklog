<?php include('includes/boot.php'); ?>

<!doctype html>

<html>

  <?php $title = __("Офисы"); ?>

  <?php include('includes/head.php'); ?>

  <body>

    <?php $active = 4; ?>

    <?php include('includes/header.php'); ?>



    <!-- Banner -->

    
  <section class="index-banner position-relative">
    <div class="container-fluid px-0">
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/offices/banner.png" class="d-block w-100 h-50" alt="...">
            <div class="carousel-caption text-start d-flex flex-column justify-content-center align-items-start h-50">
              <h1 class="text-uppercase fw-bold position-relative fs-1 pe-5 display-6"><?= __("Офисы TAKLOG INDUSTRY – "); ?></h1>
              <p class="large fs-5 fw-normal display-5 mb-lg-4"><?= __("оперативность и поддержка всегда рядом "); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



    <!-- Map -->

    <section class="py-lg-5 py-4 offices-map">
      <div class="container-fluid common-container">
        <div class="row gx-xl-5 gx-lg-4 gx-0 gy-4 gy-md-5">
          <div class="col-lg-5 wow fadeInLeft">
            <div class="">
              <div class="">
                <h2><?= __("Узбекистан"); ?></h2>
                <p class="lh-sm text-gray">
                  <?= __("Узбекистан, г. Ташкент, улица Амира Темура, 45/1"); ?><br/>
                  info@taklogindustry.com<br />
                  murad@taklog.uz<br />
                  shakhzod@taklog.uz<br />
                  <a class="text-decoration-none text-dark" href="tel:+998712550508">+998 71 255 05 08</a><br />
                  <a class="text-decoration-none text-dark" href="tel:+998770041118">+998 77 004 11 18</a><br />
                  <a class="text-decoration-none text-dark" href="tel:+998770071118">+998 77 007 11 18</a><br />
                </p>
              </div>
              <div class="">
                <h2><?= __("Германия"); ?></h2>
                <p class="lh-sm text-gray">
                  TAKLOG International<br>
                  Transports GmbH<br>
                  Von-der-Tann Str. 14<br>
                  95028 Hof<br>
                  hof@taklog.de<br>
                  <a class="text-decoration-none text-dark" href="tel:+4992811446925">+49 9281 144 69 25</a><br>
                  <a class="text-decoration-none text-dark" href="tel:+4992811446931">+49 9281 144 69 31</a><br>
                </p>
              </div>
              <div class="accordion-body">
                <h2><?= __("Турция"); ?></h2>
                <p class="lh-sm text-gray">
                  KÜLTÜR MAHALLESİ İSMET İNÖNÜ BULVARI ALTIN ​​ANAHTAR APT. <br />БЛОК D №: 138 ЭТАЖ: 7/25 Акдениз/МЕРСИН
                  <a class="text-decoration-none text-dark" href="tel:+90324237472526">+90 324 237 47 25-26</a><br>
                </p>
              </div>
            </div>
          </div>
          <div class="col-lg-7 wow fadeInRight">
            <img class="img-fluid" src="images/offices/map.svg" alt="">
          </div>
        </div>
      </div>
    </section>



    <?php include('includes/footer.php'); ?>

  </body>

</html>