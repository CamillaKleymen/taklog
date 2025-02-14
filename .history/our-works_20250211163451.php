<?php include('includes/boot.php'); ?>
<!doctype html>
<html>
  <?php $title = __("Наши работы"); ?>
  <?php include('includes/head.php'); ?>
  <body>
    <?php $active = 3; ?>
    <?php include('includes/header.php'); ?>
    
    <!--Banner-->
    <section class="our-works-banner position-relative py-5">
      <div class="container-fluid common-container h-100">
        <div class="text-white box d-flex flex-column justify-content-end align-items-start h-100">
          <h1 class="text-uppercase"><?= __("Наши работы"); ?></h1>
          <p class="lh-sm small mb-lg-4 with-arrow position-relative"><?= __("Более 30 лет компания Taklog является надежным партнером в области логистики и экспедирования грузов."); ?></p>
          <a class="btn btn-primary rounded-1" href="/services"><?= __("Заказать услугу"); ?><i class="bi bi-arrow-down-right ms-4"></i></a>
        </div>
      </div>
    </section>

    <!-- Our works -->
    <section class="py-5">
      <div class="container-fluid common-container">
        <h6 class="text-gray text-uppercase lh-sm fw-medium"><?= __("О компании"); ?></h6>
        <span class="text-corp text-uppercase d-block lh-sm medium-quote mb-lg-5 mb-4"><?= __("Примеры перевозок грузов<br> компанией Taklog по всему миру"); ?></span>

        <div class="row gx-md-4 gx-0 gy-4 gy-lg-5">
          <div class="col-lg-4 col-md-6 wow fadeInUp">
            <img class="img-fluid mb-3 w-100" src="images/our-works/work1.png" alt="">
            <div class="row gx-md-4 gx-0 gy-3">
              <div class="col-md-7">
                <div class="d-flex flex-column justify-content-center h-100"class="d-flex flex-column justify-content-center h-100">
                  <span class="text-corp text-uppercase"><?= __("Турция-Германия"); ?></span>
                </div>
              </div>
              <div class="col-md-5">
                <div class="d-md-flex flex-column justify-content-center h-100">
                  <a class="btn btn-outline-dark text-start rounded-1 w-100" target="_blank" href="https://www.instagram.com/taklog.uz"><?= __("Подробнее"); ?><i class="bi bi-arrow-down-right float-end"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp">
            <img class="img-fluid mb-3 w-100" src="images/our-works/work2.png" alt="">
            <div class="row gx-md-4 gx-0 gy-3">
              <div class="col-md-7">
                <div class="d-flex flex-column justify-content-center h-100"class="d-flex flex-column justify-content-center h-100">
                  <span class="text-corp text-uppercase"><?= __("Германия-Узбекистан"); ?></span>
                </div>
              </div>
              <div class="col-md-5">
                <div class="d-md-flex flex-column justify-content-center h-100">
                  <a class="btn btn-outline-dark text-start rounded-1 w-100" target="_blank" href="https://www.instagram.com/taklog.uz"><?= __("Подробнее"); ?><i class="bi bi-arrow-down-right float-end"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 wow fadeInUp">
            <img class="img-fluid mb-3 w-100" src="images/our-works/work3.png" alt="">
            <div class="row gx-md-4 gx-0 gy-3">
              <div class="col-md-7">
                <div class="d-flex flex-column justify-content-center h-100"class="d-flex flex-column justify-content-center h-100">
                  <span class="text-corp text-uppercase"><?= __("Германия-Турция"); ?></span>
                </div>
              </div>
              <div class="col-md-5">
                <div class="d-md-flex flex-column justify-content-center h-100">
                  <a class="btn btn-outline-dark text-start rounded-1 w-100" target="_blank" href="https://www.instagram.com/taklog.uz"><?= __("Подробнее"); ?><i class="bi bi-arrow-down-right float-end"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php include('includes/footer.php'); ?>
  </body>
</html>