<?php include('includes/boot.php'); ?>
<!doctype html>
<html>
<?php $title = __("Услуги"); ?>
<?php include('includes/head.php'); ?>

<body>
  <?php $active = 2; ?>
  <?php include('includes/header.php'); ?>

  <!-- Banner -->
  <section class="index-banner position-relative">
    <div class="container-fluid px-0">
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/services/banner.png" class="d-block w-100 h-50" alt="...">
            <div class="carousel-caption text-start d-flex flex-column justify-content-center align-items-start h-50">
              <h1 class="text-uppercase fw-bold position-relative fs-1 pe-5 display-6"><?= __("Услуги"); ?></h1>
              <p class="large fs-5 fw-normal display-5 mb-lg-4"><?= __("Более 30 лет компания Taklog является надежнымпартнером в области логистики и экспедирования грузов. "); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Services -->
  <section class="pb-4 services-section wow fadeInUp">
    <div class="container-fluid common-container">
      <div class="d-lg-block d-none">
        <ul class="nav nav-tabs nav-justified border-0" role="tablist">
          <li class="nav-item fw-medium" role="presentation">
            <a class="nav-link active" data-bs-toggle="tab" href="#airTransportation" aria-selected="true" role="tab"><?= __("Автомобильные перевозки"); ?></a>
          </li>
          <li class="nav-item fw-medium" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" href="#roadTransportation" aria-selected="false" tabindex="-1" role="tab"><?= __("Авиационные перевозки"); ?></a>
          </li>
          <li class="nav-item fw-medium" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" href="#railwayTransportation" aria-selected="false" tabindex="-1" role="tab"><?= __("Железнодорожные перевозки"); ?></a>
          </li>
        </ul>
        <div id="myTabContent" class="tab-content pt-lg-4 py-3">
          <div class="tab-pane fade show active" id="airTransportation" role="tabpanel">
            <div class="row gx-xl-5 gx-lg-4 gx-0 mb-xl-5 mb-4 gy-3">
              <div class="col-lg-8">
                <img class="img-fluid h-100 object-fit-cover" src="images/services/train.png" alt="">
              </div>
              <div class="col-lg-4">
                <div>
                  <span class="fw-medium text-red d-block lh-sm fs-3 mb-lg-3 mb-2"><?= __("Автомобильные перевозки"); ?></span>
                  <p class="lh-sm text-gray fs-5"><?= __("Taklog Industries, LLC предлагает надежные и эффективные автомобильные перевозки, охватывающие основные маршруты Европы, Центральной Азии, Турции и СНГ. Наш автопарк включает более 40 современных транспортных средств - рефрижераторы, платформы lowbed для негабаритных грузов и автомобили, сертифицированные по стандарту ADR для перевозки опасных грузов, соответствующие, в том числе, экологическим стандартам EURO-5 и EURO-6."); ?></p>
                  <p class="lh-sm text-gray fs-5"><?= __("Наши клиенты получают доступ к широкой сети авиаперевозчиков и оптимизированным маршрутам, что позволяет максимально эффективно планировать логистику. Мы берём на себя оформление всей документации, таможенное сопровождение и координацию грузов в аэропортах."); ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="roadTransportation" role="tabpanel">
            <div class="row gx-xl-5 gx-lg-4 gx-0 mb-xl-5 mb-4 gy-3">
              <div class="col-lg-8">
                <img class="img-fluid h-100 object-fit-cover" src="images/services/Truck.jpg" alt="">
              </div>
              <div class="col-lg-4">
                <div>
                  <span class="fw-medium text-red d-block lh-sm fs-3 mb-lg-3 mb-2"><?= __("Автомобильные перевозки"); ?></span>
                  <p class="lh-sm text-gray fs-5"><?= __("Taklog Industries, LLC предлагает надежные и эффективные автомобильные перевозки, охватывающие основные маршруты Европы, Центральной Азии, Турции и СНГ. Наш автопарк включает более 40 современных транспортных средств - рефрижераторы, платформы lowbed для негабаритных грузов и автомобили, сертифицированные по стандарту ADR для перевозки опасных грузов, соответствующие, в том числе, экологическим стандартам EURO-5 и EURO-6."); ?></p>
                  <p class="lh-sm text-gray fs-5"><?= __("Наши клиенты получают доступ к широкой сети авиаперевозчиков и оптимизированным маршрутам, что позволяет максимально эффективно планировать логистику. Мы берём на себя оформление всей документации, таможенное сопровождение и координацию грузов в аэропортах."); ?></p>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="railwayTransportation" role="tabpanel">
            <div class="row gx-xl-5 gx-lg-4 gx-0 mb-xl-5 mb-4 gy-3">
              <div class="col-lg-8">
                <img class="img-fluid h-100 object-fit-cover" src="images/services/Railway.jpg" alt="">
              </div>
              <div class="col-lg-4">
                <div>
                  <span class="fw-medium text-red d-block lh-sm fs-3 mb-lg-3 mb-2"><?= __("Автомобильные перевозки"); ?></span>
                  <p class="lh-sm text-gray fs-5"><?= __("Taklog Industries, LLC предлагает надежные и эффективные автомобильные перевозки, охватывающие основные маршруты Европы, Центральной Азии, Турции и СНГ. Наш автопарк включает более 40 современных транспортных средств - рефрижераторы, платформы lowbed для негабаритных грузов и автомобили, сертифицированные по стандарту ADR для перевозки опасных грузов, соответствующие, в том числе, экологическим стандартам EURO-5 и EURO-6."); ?></p>
                  <p class="lh-sm text-gray fs-5"><?= __("Наши клиенты получают доступ к широкой сети авиаперевозчиков и оптимизированным маршрутам, что позволяет максимально эффективно планировать логистику. Мы берём на себя оформление всей документации, таможенное сопровождение и координацию грузов в аэропортах."); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-lg-none">
        <div class="accordion outer-accordion" id="servicesAccordion">
          <div class="accordion-item rounded-0 border-0">
            <h2 class="accordion-header" id="outerHeadingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#outerCollapseOne" aria-expanded="true" aria-controls="outerCollapseOne">
                Авиа-перевозка
              </button>
            </h2>
            <div id="outerCollapseOne" class="accordion-collapse collapse show" aria-labelledby="outerHeadingOne" data-bs-parent="#servicesAccordion">
              <div class="accordion-body">
                <div class="row gx-xl-5 gx-lg-4 gx-0 mb-xl-5 mb-4 gy-3">
                  <div class="col-lg-8">
                    <img class="img-fluid h-100 object-fit-cover" src="images/services/plane.png" alt="">
                  </div>
                  <div class="col-lg-4">
                    <div>
                      <span class="fw-medium text-red d-block lh-sm fs-3 mb-lg-3 mb-2"><?= __("Автомобильные перевозки"); ?></span>
                      <p class="lh-sm text-gray fs-5"><?= __("Taklog Industries, LLC предлагает надежные и эффективные автомобильные перевозки, охватывающие основные маршруты Европы, Центральной Азии, Турции и СНГ. Наш автопарк включает более 40 современных транспортных средств - рефрижераторы, платформы lowbed для негабаритных грузов и автомобили, сертифицированные по стандарту ADR для перевозки опасных грузов, соответствующие, в том числе, экологическим стандартам EURO-5 и EURO-6."); ?></p>
                      <p class="lh-sm text-gray fs-5"><?= __("Наши клиенты получают доступ к широкой сети авиаперевозчиков и оптимизированным маршрутам, что позволяет максимально эффективно планировать логистику. Мы берём на себя оформление всей документации, таможенное сопровождение и координацию грузов в аэропортах."); ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item rounded-0 border-0">
            <h2 class="accordion-header" id="outerHeadingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#outerCollapseTwo" aria-expanded="false" aria-controls="outerCollapseTwo">
                <?= __("Автомобильная перевозка"); ?>
              </button>
            </h2>
            <div id="outerCollapseTwo" class="accordion-collapse collapse" aria-labelledby="outerHeadingTwo" data-bs-parent="#servicesAccordion">
              <div class="accordion-body">
                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
          <div class="accordion-item rounded-0 border-0">
            <h2 class="accordion-header" id="outerHeadingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#outerCollapseThree" aria-expanded="false" aria-controls="outerCollapseThree">
                <?= __("Железно-дорожная перевозка"); ?>
              </button>
            </h2>
            <div id="outerCollapseThree" class="accordion-collapse collapse" aria-labelledby="outerHeadingThree" data-bs-parent="#servicesAccordion">
              <div class="accordion-body">
                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust us -->
  <section class="services-trust wow fadeInUp">
    <div class="container-fluid px-0">
      <div class="row gx-0">
        <div class="col-lg-8">
          <div class="bg-corp text-white h-100 p-lg-5 p-4">
            <!-- <small class="d-block lh-sm mb-2"><?= __("Полноценный сервис"); ?></small> -->
            <h1 class="d-block fs-1 fw-medium mb-3"><?= __("Логистика без границ — решения, <br> адаптированные под вас"); ?></h1>
            <!-- <p class="lh-sm small"><?= __("Taklog Logistics — ваш надежный партнер для быстрых и качественных перевозок грузов в любую точку мира. Мы предлагаем полный спектр услуг, ориентированных на ваши потребности."); ?></p> -->

            <div class="row gx-xl-5 gx-lg-4 gx-0 pt-5 px-5 lined-boxes">
              <div class="col-lg-6">
                <div class="row gx-3">
                  <div class="col-lg-2 col-md-1 col-2">
                    <img class="img-fluid" src="images/services/location.svg" alt="">
                  </div>
                  <div class="col-lg-10 col-md-11 col-10">
                    <p class="fw-semibold d-block lh-sm mb-1"><?= __("Географический охват"); ?></p>
                    <ul class="d-block lh-sm text-small">
                      <li><?= __("•	Перевозки по всему Евросоюзу, Турции, странам СНГ и Центральной Азии"); ?></li>
                      <li><?= __("•	Организация доставки в труднодоступные регионы и зоны повышенного риска"); ?></li>
                      <li><?= __("•	Уникальные мультимодальные маршруты"); ?></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row gx-3">
                  <div class="col-2">
                    <img class="img-fluid" src="images/services/safety.svg" alt="">
                  </div>
                  <div class="col-lg-10 col-md-11 col-10">
                    <p class="fw-semibold d-block lh-sm mb-1"><?= __("Инновационные технологии"); ?></p>
                    <ul class="d-block lh-sm text-small">
                      <li><?= __("•	•	GPS-мониторинг для полного контроля за грузом"); ?></li>
                      <li><?= __("•	•	Интеграция с онлайн-платформами для отслеживания и управления перевозками"); ?></li>
                      <li><?= __("•	•	Электронный документооборот для ускорения обработки заказовты"); ?></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row gx-3">
                  <div class="col-2">
                    <img class="img-fluid" src="images/services/24.svg" alt="">
                  </div>
                  <div class="col-lg-10 col-md-11 col-10">
                    <p class="fw-semibold d-block lh-sm mb-1"><?= __("Географический охват"); ?></p>
                    <ul class="d-block lh-sm text-small">
                      <li><?= __("•	Перевозки по всему Евросоюзу, Турции, странам СНГ и Центральной Азии"); ?></li>
                      <li><?= __("•	Организация доставки в труднодоступные регионы и зоны повышенного риска"); ?></li>
                      <li><?= __("•	Уникальные мультимодальные маршруты"); ?></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="row gx-3">
                  <div class="col-2">
                    <img class="img-fluid" src="images/services/medal.svg" alt="">
                  </div>
                  <div class="col-lg-10 col-md-11 col-10">
                    <p class="fw-semibold d-block lh-sm mb-1"><?= __("Географический охват"); ?></p>
                    <ul class="d-block lh-sm text-small">
                      <li><?= __("•	Перевозки по всему Евросоюзу, Турции, странам СНГ и Центральной Азии"); ?></li>
                      <li><?= __("•	Организация доставки в труднодоступные регионы и зоны повышенного риска"); ?></li>
                      <li><?= __("•	Уникальные мультимодальные маршруты"); ?></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <img class="img-fluid w-100 h-100 object-fit-cover" src="images/services/man.png" alt="">
        </div>
      </div>
    </div>
  </section>
  <?php include('includes/footer.php'); ?>
</body>

</html>