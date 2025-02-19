<?php include('includes/boot.php'); ?>
<!doctype html>
<html>
<?php $title = __("TakLog - грузоперевозки из Европы в Узбекистан по оптимальной цене!"); ?>
<?php include('includes/head.php'); ?>

<body>
  <?php $active = 0; ?>
  <?php include('includes/header.php'); ?>

  <!--Banner-->
  <section class="index-banner position-relative">
    <div class="container-fluid px-0">
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/index/banner.png" class="d-block w-100" alt="...">
            <div class="carousel-caption text-start">
              <h1 class="text-uppercase display-6 fw-bold position-relative pe-5 "><?= __("TAKLOG INDUSTRY, LLC – "); ?></h1>
              <p class="large fs-5 fw-normal display-5 mb-lg-4"><?= __("ваш надежный партнер в сфере международных перевозок"); ?></p>
              <!-- <a class="btn btn-primary rounded-1" href="/services"><?= __("Заказать услугу"); ?><i class="bi bi-arrow-down-right ms-4"></i></a> -->
            </div>
          </div>
          <!-- <div class="carousel-item">
              <img src="images/index/banner2.png" class="d-block w-100" alt="...">
              <div class="carousel-caption text-start">
                <h1 class="text-uppercase with-arrow position-relative"><?= __("Надежно перевезем <br> ваш груз в нужную<br> вам точку"); ?></h1>
                <p class="lh-sm small mb-lg-4"><?= __("Более 30 лет компания Taklog является надежным партнером в области логистики и экспедирования грузов."); ?></p>
                <a class="btn btn-primary rounded-1" href="/services"><?= __("Заказать услугу"); ?><i class="bi bi-arrow-down-right ms-4"></i></a>
              </div>
            </div> -->
        </div>
      </div>
      <div class="banner-contact-form mx-auto rounded-4 p-md-4 p-3 bg-corp text-white position-absolute start-0 end-0 wow fadeInUp">
        <form class="row gy-3" method="POST" action="/sender">
          <div class="col-lg-3">
            <div>
              <span class="text-uppercase font-gilda fs-3 mb-2 d-block"><?= __("Напишите нам - обсудим вашу перевозку!"); ?></span>
              <!-- <p class="fw-medium small lh-sm"><?= __("Напишите нам - обсудим вашу перевозку!"); ?></p> -->
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row g-3">
              <div class="col-md-6">
                <div>
                  <input required name="name" type="text" class="form-control bg-transparent rounded-1 text-white shadow-none border-light-subtle" placeholder="<?= __("Имя"); ?>" id="bannerFormName">
                </div>
              </div>
              <div class="col-md-6">
                <div>
                  <input required name="phone" type="text" class="form-control bg-transparent rounded-1 text-white shadow-none border-light-subtle" placeholder="<?= __("Номер телефона"); ?>" id="bannerFormPhone">
                </div>
              </div>
              <div class="col-12">
                <div>
                  <textarea required name="message" rows="3" class="form-control bg-transparent rounded-1 text-white shadow-none border-light-subtle" placeholder="<?= __("Информация по заказу"); ?>" id="bannerFormMessage"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-lg-end">
              <button type="submit" class="btn btn-primary rounded-1"><?= __("Отправить запрос"); ?> <i class="bi bi-arrow-down-right ms-4"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <!-- About -->
  <!-- <section class="index-about bg-milk wow fadeInLeft">
      <div class="container-fluid common-container">
        <div class="row gx-xl-5 gx-lg-4 gy-4 gx-0">
          <div class="col-lg-5">
            <div>
              <h6 class="text-gray text-uppercase fw-medium"><?= __("О компании"); ?></h6>
              <span class="text-uppercase text-corp font-gilda big-quote lh-sm d-block mb-2"><?= __("Доставим ваш товар в целости и <span class=\"text-red\">сохранности</span>"); ?></span>
              <p class="lh-sm small fw-medium text-gray"><?= __("В 2004 году благодаря господину Такилю мы получили тогдашний филиал транспортов TBT. Цель состояла в том, чтобы получить мощную основу в восточном и юго-восточном регионах. Для этого в качестве ВОРОТ в восточном направлении был создан Склад в Дрездене, откуда велась основная деятельность в сторону Восточной Европы."); ?></p>
              <a class="text-decoration-none text-red small fw-medium" href="/about"><?= __("Узнать больше"); ?><i class="bi bi-arrow-down-right ms-4"></i></a>
            </div>
          </div>
          <div class="col-lg-7">
            <img class="img-fluid" src="images/index/about.png" alt="">
          </div>
        </div>
      </div>
    </section> -->

  <!-- Our advantages -->
  <section class="bg-smoke index-advantages pt-5 mt-5">
    <div class="container-fluid px-5">
      <div class="row gx-0 px-5">
        <div class="col-lg-6">
          <div class="left-content-box d-flex flex-column text-start justify-content-center h-100 px-5 w-75">
            <span class="text-uppercase text-corp font-gilda big-quote lh-sm d-block mb-2">
              <?= __("<span class='font-inter fw-semibold'>Taklog INDUSTRY</span> - <br>"); ?>
            </span>
            <p class="fw-medium fs-3 text-corp font-gilda big-quote lh-sm d-block mb-2">
              <?= __("больше чем просто логистика"); ?>
            </p>
            <p class="fw-normal text-gray font-gilda d-block mb-2">
              <?= __("Мы предоставляем нашим клиентам не просто логистические услуги, а надежные и комплексные решения, которые упрощают сложные процессы и способствуют их развитию. TAKLOG строит свою работу на принципах эффективности, точности и индивидуального подхода, помогая вам достигать новых бизнес-целей."); ?>
            </p>
            <p class="fw-normal text-gray font-gilda d-block mb-2">
              <?= __("Мы понимаем, что логистика — это не только перевозка грузов, но и ключ к успешной организации поставок. Наша команда экспертов доступна 24/7, чтобы обеспечить надежность и оперативность на каждом этапе сотрудничества. Ваши успехи — наша приоритетная задача."); ?>
            </p>
            <p class="fw-normal text-gray font-gilda d-block mb-2">
              <?= __("Наша экспертиза охватывает ключевые регионы и направления, где мы предлагаем решения, адаптированные под ваши задачи и географические особенности:"); ?>
            </p>
            <!-- <a class="text-decoration-none text-red small fw-medium" href="/about">
              <?= __("Узнать больше"); ?>
              <i class="bi bi-arrow-down-right ms-4"></i>
            </a> -->
          </div>
        </div>

        <div class="col-lg-6">
          <div class="right-content-box mt-4">
            <div class="bg-corp py-lg-5 p-4 box1 wow fadeInUp">
              <div class="row gy-3 gx-lg-4 gx-0">
                <div class="col-lg-2">
                  <div class="d-lg-flex flex-column justify-content-center h-100 align-items-center px-lg-2">
                    <!-- <img class="img-fluid" src="images/index/advantage1.svg" alt=""> -->
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="text-white">
                    <span class="d-block fw-bold text-uppercase lh-sm mb-3"><?= __("Европа"); ?></span>
                    <p class="small lh-sm mb-0"><?= __("Мы обслуживаем основные маршруты в Европе, включая Польшу, Германию, Италию, Словению, Австрию, Чехию, Испанию и Францию. Наша команда обеспечивает точное соблюдение сроков, надежность и контроль перевозки на всех этапах, что позволяет оперативно решать задачи наших клиентов."); ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-white py-lg-5 p-4 box2 wow fadeInUp">
              <div class="row gy-3 gx-lg-4 gx-0">
                <div class="col-lg-2">
                  <div class="d-lg-flex flex-column justify-content-center h-100 align-items-center px-lg-2">
                    <!-- <img class="img-fluid" src="images/index/advantage2.svg" alt=""> -->
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="text-corp">
                    <span class="d-block fw-bold text-uppercase lh-sm mb-3"><?= __("СНГ"); ?></span>
                    <p class="small lh-sm mb-0"><?= __("Перевозки охватывают Узбекистан, Казахстан, Россию, Беларусь, Туркменистан, Таджикистан и Кыргызстан. Мы предоставляем решения для внутренних и международных перевозок, уделяя внимание надежности маршрутов, логистической поддержке и минимизации затрат для ваших бизнес-потребностей."); ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="bg-orange py-lg-5 p-4 box3 wow fadeInUp">
              <div class="row gy-3 gx-lg-4 gx-0">
                <div class="col-lg-2">
                  <div class="d-lg-flex flex-column justify-content-center h-100 align-items-center px-lg-2">
                    <!-- <img class="img-fluid" src="images/index/advantage3.svg" alt=""> -->
                  </div>
                </div>
                <div class="col-lg-7">
                  <div class="text-corp">
                    <span class="d-block fw-bold text-uppercase lh-sm mb-3"><?= __("Турция и Китай"); ?></span>
                    <p class="small lh-sm mb-0"><?= __("Оптимальные маршруты из Китая через Турцию в СНГ и Европу позволяют доставлять грузы быстро и эффективно. Мы предлагаем услуги для экспорта и импорта, включая контроль груза на всем пути и адаптацию маршрутов под специфические требования клиентов."); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="py-5 bg-ocean rounded-4 index-services position-relative wow fadeInUp">
    <div class="container-fluid common-container">
      <!-- <h6 class="text-gray text-uppercase fw-medium mb-lg-4"><?= __("Наши услуги"); ?></h6> -->
      <div class="row gx-lg-4 gx-0 gy-2 mb-lg-3">
        <div class="col-lg-8">
          <span class="text-uppercase text-corp font-gilda fw-medium medium-quote lh-sm d-block mb-2 subtitle"><?= __("транспорт для <br> всех задач"); ?></span>
        </div>
        <!-- <div class="col-lg-4">
          <p class="lh-sm small fw-medium text-corp"><?= __("Компания TAKLOG оказывает полную поддержку нашим клиентам, от отправки до таможенного оформления и заполнения сопроводительной документации вашего груза — TAKLOG предлагает полный пакет услуг."); ?></p>
          <a class="text-decoration-none text-red small fw-medium" href="/services"><?= __("Узнать больше"); ?> <i class="bi bi-arrow-down-right ms-4"></i></a>
        </div> -->
      </div>
      <div class="slider-services py-4">
        <div class="d-flex flex-column justify-content-between h-100">
          <div class="text-corp">
            <img class="img-fluid mb-3" src="images/index/about1.png" alt="">
            <span class="text-uppercase d-block lh-sm mb-2"><?= __("Автомобильная перевозка"); ?></span>
            <p class="small lh-sm"><?= __("Наш автопарк насчитывает более 40 грузовых автомобилей, включая рефрижераторы, платформы lowbed для негабаритных грузов, а также транспорт, сертифицированный по стандарту ADR для перевозки опасных грузов и соответствующий экологическим классам EURO-5 и EURO-6 "); ?></p>
          </div>
          <div class="">
            <a class="btn btn-outline-dark rounded-1 text-start w-100" href="/services"><?= __("Узнать больше"); ?><i class="bi bi-arrow-down-right float-end"></i></a>
          </div>
        </div>
        <div class="d-flex flex-column justify-content-between h-100">
          <div class="text-corp">
            <img class="img-fluid mb-3" src="images/index/about3.png" alt="">
            <span class="text-uppercase d-block lh-sm mb-2"><?= __("АвиаЦИОННЫЕ перевозкИ"); ?></span>
            <p class="small lh-sm"><?= __("Когда время имеет значение, мы обеспечим быструю и надежную доставку вашего груза, доставляя его авиационным транспортом. Гарантируем точное соблюдение сроков, безопасность груза и полное логистическое сопровождение"); ?></p>
          </div>
          <div class="">
            <a class="btn btn-outline-dark rounded-1 text-start w-100" href="/services"><?= __("Узнать больше"); ?><i class="bi bi-arrow-down-right float-end"></i></a>
          </div>
        </div>
        <div class="d-flex flex-column justify-content-between h-100">
          <div class="text-corp">
            <img class="img-fluid mb-3" src="images/index/about2.png" alt="">
            <span class="text-uppercase d-block lh-sm mb-2"><?= __("ЖелезнодорожнЫЕ перевозкИ"); ?></span>
            <p class="small lh-sm"><?= __("Когда время имеет значение, мы обеспечим быструю и надежную доставку вашего груза, доставляя его авиационным транспортом. Гарантируем точное соблюдение сроков, безопасность груза и полное логистическое сопровождение"); ?></p>
          </div>
          <div class="">
            <a class="btn btn-outline-dark rounded-1 text-start w-100" href="/services"><?= __("Узнать больше"); ?><i class="bi bi-arrow-down-right float-end"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Logistics -->
  <section class="index-logistics bg-milk wow fadeInUp">
    <div class="container-fluid common-container">
      <span class="text-uppercase text-corp font-gilda medium-quote lh-sm d-block mb-lg-4 mb-3 subtitle"><?= __("ПОЛНЫЙ ЦИКЛ МЕЖДУНАРОДНОЙ ЛОГИСТИКИ"); ?><span class="font-inter fw-semibold"></span></span>
    </div>

    <div class="px-lg-4">
      <div class="slider-logistics py-4">
        <div class="box position-relative border rounded-1 border-secondary p-3 h-100">
          <span class="d-block lh-sm text-uppercase text-corp fw-medium mb-2"><?= __("Оформление и отправка документов"); ?></span>
          <ul class="ps-3 text-gray">
            <li><span><?= __("Подготовка и оформление TIR-Carnet, CMR, EX1 и AWB для международных перевозок"); ?></span></li>
            <li><span><?= __("Оформление фитосанитарных и ветеринарных сертификатов"); ?></span></li>
            <li><span><?= __("Получение разрешений на перевозку опасных и негабаритных грузов"); ?></span></li>
            <li><span><?= __("Проверка сертификатов соответствия и безопасности для экспортных товаров"); ?></span></li>
            <li><span><?= __("Подготовка документов для сертификации грузов в соответствии с международными нормами"); ?></span></li>
          </ul>
        </div>
        <div class="box position-relative border rounded-1 border-secondary p-3 h-100">
          <span class="d-block lh-sm text-uppercase text-corp fw-medium mb-2"><?= __("Таможенное оформление"); ?></span>
          <ul class="ps-3 text-gray">
            <li><span><?= __("Полное сопровождение грузов на этапах таможенной очистки (экспорт/импорт)"); ?></span></li>
            <li><span><?= __("Содействие в ускоренном прохождении таможенных процедур"); ?></span></li>
            <li><span><?= __("Подготовка и регистрация транзитных деклараций"); ?></span></li>
            <li><span><?= __("Организация таможенного контроля для опасных и негабаритных грузов"); ?></span></li>
            <li><span><?= __("Оформление временного ввоза и реэкспорта"); ?></span></li>
          </ul>
        </div>
        <div class="box position-relative border rounded-1 border-secondary p-3 h-100">
          <span class="d-block lh-sm text-uppercase text-corp fw-medium mb-2"><?= __("Логистическая координация"); ?></span>
          <ul class="ps-3 text-gray">
            <li><span><?= __("Консультирование по выбору оптимальных маршрутов"); ?></span></li>
            <li><span><?= __("Организация мультимодальных перевозок с минимальными затратами "); ?></span></li>
            <li><span><?= __("Мониторинг, контроль сроков и статуса грузов на всех этапах перевозки "); ?></span></li>
            <li><span><?= __("Координация специальных условий транспортировки для грузов с особыми требованиями (температурный режим, ADR и т.д.)"); ?></span></li>
            <li><span><?= __("Подготовка индивидуальных логистических решений под нестандартные задачиV"); ?></span></li>
           
          </ul>
        </div>
        <div class="box position-relative border rounded-1 border-secondary p-3 h-100">
          <span class="d-block lh-sm text-uppercase text-corp fw-medium mb-2"><?= __("Специальные услуги"); ?></span>
          <ul class="ps-3 text-gray">
            <li><span><?= __("Сопровождение и перегруз груза в ключевых узлах Германии, Турции, стран Прибалтики и Узбекистана"); ?></span></li>
            <li><span><?= __("Организация перевозки негабаритных грузов с использованием низкорамных платформ и lowbed трейлеров"); ?></span></li>
            <li><span><?= __("Страхование грузов и обеспечение дополнительных мер безопасности"); ?></span></li>
            <li><span><?= __("Услуги по складированию и консолидации грузов перед отправкой"); ?></span></li>
            <li><span><?= __("Организация доставки грузов с особыми условиями (хрупкие, скоропортящиеся товары)"); ?></span></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Trust us -->
  <!-- <section class="index-trust-us wow fadeInUp">
    <div class="container-fluid common-container">
      <span class="text-uppercase text-white font-gilda medium-quote lh-sm d-block mb-5 subtitle"><?= __("Нужно доставить товар? <br>Доверьтесь нам!"); ?></span>
      <div class="trust-form-box rounded-4 p-md-4 p-3 bg-corp text-white">
        <p class="fw-medium small lh-sm"><?= __("Более 30 лет компания Taklog является надежным партнером в области логистики и экспедирования грузов."); ?></p>
        <form class="row gy-3 gx-2" method="POST" action="/sender">
          <div class="col-lg-9">
            <div class="row g-3">
              <div class="col-md-6">
                <div>
                  <input required name="name" type="text" class="form-control bg-transparent rounded-1 text-white shadow-none border-light-subtle" placeholder="<?= __("Имя"); ?>" id="trustFormName">
                </div>
              </div>
              <div class="col-md-6">
                <div>
                  <input required name="phone" type="text" class="form-control bg-transparent rounded-1 text-white shadow-none border-light-subtle" placeholder="<?= __("Номер телефона"); ?>" id="trustFormPhone">
                </div>
              </div>
              <div class="col-12">
                <div>
                  <textarea required name="message" rows="3" class="form-control bg-transparent rounded-1 text-white shadow-none border-light-subtle" placeholder="<?= __("Комментарии"); ?>" id="trustFormMessage"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-lg-end">
              <button type="submit" class="btn btn-primary rounded-1"><?= __("Заказать услугу"); ?> <i class="bi bi-arrow-down-right ms-3"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section> -->

  <!-- Our partners -->
  <!-- <section class="py-5 index-partners wow fadeInUp">
    <div class="container-fluid common-container">
      <h6 class="text-gray text-uppercase fw-medium mb-lg-3"><?= __("Наши партнеры"); ?></h6>
      <span class="text-uppercase text-corp font-gilda medium-quote lh-sm d-block mb-3 mb-lg-4 subtitle"><span class="font-inter fw-semibold">Taklog</span><?= __("успешно сотрудничает с Европейскими компаниями"); ?></span>
      <div class="slider-partners py-4">
        <div>
          <img class="img-fluid d-block m-auto" src="images/index/unsere.png" alt="" />
        </div>
        <div>
          <img class="img-fluid d-block m-auto" src="images/index/rutam.png" alt="" />
        </div>
        <div>
          <img class="img-fluid d-block m-auto" src="images/index/rtib.png" alt="" />
        </div>
        <div>
          <img class="img-fluid d-block m-auto" src="images/index/unt.png" alt="" />
        </div>
      </div>
      <div class="pt-lg-4 pt-3">
        <a href="/about" class="btn btn-primary rounded-1"><?= __("Узнать больше"); ?><i class="bi bi-arrow-down-right ms-4"></i></a>
      </div>
    </div>
  </section> -->

  <?php include('includes/footer.php'); ?>
</body>

</html>