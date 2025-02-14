<?php include('includes/boot.php'); ?>
<!doctype html>
<html>
    <?php $title = __("О компании Taklog"); ?>
    <?php include('includes/head.php'); ?>
  <body>
    <?php $active = 1; ?>
    <?php include('includes/header.php'); ?>
    
     <!--Banner-->
  <section class="index-banner position-relative">
    <div class="container-fluid px-0">
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/about/banner.png" class="d-block w-100 h-50" alt="...">
            <div class="carousel-caption text-start d-flex flex-column justify-content-center align-items-start h-50">
              <h1 class="text-uppercase display-6 fw-bold position-relative pe-5 "><?= __("TAKLOG INDUSTRY, LLC - "); ?></h1>
              <p class="large fs-5 fw-normal display-5 mb-lg-4"><?= __("ваш стратегический партнер в мире международных перевозок. С 15-летним опытом в сфере грузоперевозок, мы предоставляем комплексные решения, адаптированные под задачи каждого клиента. "); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    
    <!-- About -->
    <section class="py-sm-5 py-4 bg-milk wow fadeInUp">
      <div class="container-fluid common-container">

        <div class="row gx-xl-5 gx-lg-4 gy-3 gx-0">
          <div class="col-lg-6">
            <div>
              <p class="lh-sm small text-black"><?= __(text: "Taklog Industry, LLC — это не просто логистическая компания, а ваш стратегический партнер в мире международных перевозок. С 15-летним опытом в сфере грузоперевозок, мы предоставляем комплексные решения, адаптированные под задачи каждого клиента. Мы организуем сложные маршруты, внедряем мультимодальные перевозки и предлагаем индивидуальные логистические решения, гарантируя надежность и эффективность.");?></p>
              <p class="lh-sm small text-black"><?= __("Наш парк автотранспорта в Европе насчитывает более 40 грузовых автомобилей, в том числе сертифицированные по стандарту ADR для перевозки опасных грузов, рефрижераторы, платформы lowbed для негабаритных грузов. Вся техника соответствует высоким экологическим классам, включая EURO-5 и EURO-6, что позволяет нам обеспечивать не только надежную, но и экологически безопасную логистику.");?></p>
              <p class="lh-sm small text-black"><?= __("Taklog Industries, LLC имеет представительства в ключевых точках Европы и Азии, обеспечивая стратегическое управление и высокое качество сервиса.");?></p>
            </div>
          </div>
          
          <div class="col-lg-6">
              <p class="lh-sm small text-black"><?= __("• Хоф, Германия - промышленный центр с удобным доступом к основным транспортным узлам Европы. Позволяет оперативно координировать перевозки внутри ЕС и СНГ.");?></p>
              <p class="lh-sm small text-black"><?= __("• Мерсин, Турция - крупнейший порт на юге страны, соединяющий морские и наземные маршруты между Европой, Ближним Востоком и Центральной Азией. Наш офис в этом регионе позволяет организовывать эффективную перевалку грузов, оптимизировать логистические цепочки и обеспечивать надежное морское сообщение.");?></p>
              <p class="lh-sm small text-black"><?= __("• Ташкент, Узбекистан - один из ключевых логистических узлов Центральной Азии и исторический центр Великого Шелкового пути, который веками соединял Восток и Запад. Наш офис здесь играет важную роль в организации транзитных перевозок между Китаем, странами СНГ и Ближним Востоком, обеспечивая оптимальные маршруты для международной торговли.");?></p>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Contact form -->
    <section class="pb-lg-5 pb-4 bg-milk about-contact-form wow fadeInUp">
      <div class="container-fluid common-container">
        <div class="banner-contact-form mx-auto rounded-4 p-md-4 p-3 bg-corp text-white">
          <div class="row gy-3">
            <div class="col-lg-3">
              <div>
                <span class="text-uppercase font-gilda fs-3 mb-2 d-block"><?= __("Напишите нам - <br> обсудим вашу <br> перевозку!");?></span>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row g-3">
                <div class="col-md-6">
                  <div>
                    <input type="text" class="form-control bg-transparent rounded-1 text-white shadow-none border-light-subtle" placeholder="<?= __("Имя");?>" id="bannerFormName">
                  </div>
                </div>
                <div class="col-md-6">
                  <div>
                    <input type="text" class="form-control bg-transparent rounded-1 text-white shadow-none border-light-subtle" placeholder="<?= __("Номер телефона");?>" id="bannerFormPhone">
                  </div>
                </div>
                <div class="col-12">
                  <div>
                    <textarea rows="3" class="form-control bg-transparent rounded-1 text-white shadow-none border-light-subtle" placeholder="<?= __("Примечания");?>" id="bannerFormMessage"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="text-lg-end">
                <button class="btn btn-primary rounded-1"><?= __("Отправить запрос");?> <i class="bi bi-arrow-down-right ms-4"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Our values -->
    <section class="py-lg-5 py-4 bg-milk about-values wow fadeInUp">
      <div class="container-fluid common-container">
        <div class="row mb-lg-4 mb-3 gx-lg-4 gx-0">
          <div class="col-lg-8">
            <h2 class="text-uppercase text-corp font-gilda lh-sm mb-lg-4 mb-3"><?= __("НАШИ ЦЕННОСТИ");?></h2>
          </div>
          <div class="col-lg-4">
            <small class="text-black d-block lh-sm"><?= __("В Taklog Logistics мы ориентированы на достижение успеха наших клиентов. Благодаря ответственному подходу, высокому качеству услуг и ценности каждого сотрудника, мы помогаем нашим партнерам достигать их целей.");?></small>
          </div>
        </div>
        <div class="row g-sm-4 gx-0 gy-3">
          <div class="col-lg-4 col-md-6">
            <div class="px-lg-5 p-4 bg-smoke d-flex flex-column justify-content-center align-items-center text-center h-100">
              <img class="img-fluid mb-lg-4 mb-3" src="images/about/trust.png" alt="">
              <span class="font-gilda text-corp text-uppercase lh-sm fs-5"><?= __("Открытость и доверие");?></span>
              <p class="text-black text-uppercase"><?= __("Мы строим прозрачные отношения с клиентами и партнерами, основываясь на честности и искренности");?></p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="px-lg-5 p-4 bg-smoke d-flex flex-column justify-content-center align-items-center text-center h-100">
              <img class="img-fluid mb-lg-4 mb-3" src="images/about/respect.png" alt="">
              <span class="font-gilda text-corp text-uppercase  lh-sm"><?= __("Уважение и равные возможности");?></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="px-lg-5 p-4 bg-smoke d-flex flex-column justify-content-center align-items-center text-center h-100">
              <img class="img-fluid mb-lg-4 mb-3" src="images/about/connection.svg" alt="">
              <span class="font-gilda text-corp text-uppercase lh-sm"><?= __("НЕДОПУЩЕНИЕ ДИСКРИМИНАЦИИ");?></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="px-lg-5 p-4 bg-smoke d-flex flex-column justify-content-center align-items-center text-center h-100">
              <img class="img-fluid mb-lg-4 mb-3" src="images/about/justice.svg" alt="">
              <span class="font-gilda text-corp text-uppercase lh-sm"><?= __("СПРАВЕДЛИВОСТЬ");?></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="px-lg-5 p-4 bg-smoke d-flex flex-column justify-content-center align-items-center text-center h-100">
              <img class="img-fluid mb-lg-4 mb-3" src="images/about/paper.svg" alt="">
              <span class="font-gilda text-corp text-uppercase lh-sm"><?= __("УВАЖЕНИЕ ПРАВ И СОЦИАЛЬНЫЕ ГАРАНТИИ");?></span>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="px-lg-5 p-4 bg-smoke d-flex flex-column justify-content-center align-items-center text-center h-100">
              <img class="img-fluid mb-lg-4 mb-3" src="images/about/leader.svg" alt="">
              <span class="font-gilda text-corp text-uppercase lh-sm"><?= __("ПОДОТЧЕТНОСТЬ И ОТВЕТСТВЕННОСТЬ");?></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!--Our team-->
    <section class="py-lg-5 py-4 bg-milk about-team wow fadeInUp">
      <div class="container-fluid common-container">
        <div class="row gx-xl-5 gx-lg-4 gx-0">
          <div class="col-lg-7">
            <img class="img-fluid d-lg-block d-none h-100 w-100 object-fit-cover" src="images/about/team.png" alt="">
          </div>
          <div class="col-lg-5">
            <div>
              <h6 class="text-gray text-uppercase fw-medium"><?= __("НАША КОМАНДА");?></h6>
              <span class="text-uppercase text-corp font-gilda medium-quote lh-sm d-block mb-2"><?= __("Команда, которой можно восхищаться");?></span>
              <p class="lh-sm text-black small"><?= __("Объединенные общей целью, наши высококвалифицированные специалисты с глубокими знаниями в области логистики успешно решают самые сложные задачи. Благодаря слаженной работе команды мы достигаем выдающихся результатов и пользуемся заслуженной репутацией на рынке.");?></p>
              <span class="text-uppercase text-corp fs-5 lh-sm d-block mb-3 mb-lg-4"><?= __("Качества членов нашей команды:");?></span>
              <div class="row gx-lg-4 gx-0">
                <div class="col-lg-6">
                  <ul class="ps-3 mb-0">
                    <li><span><?= __("Ориентированность на клиента");?></span></li>
                    <li><span><?= __("Честность");?></span></li>
                    <li><span><?= __("Внимание к деталям");?></span></li>
                    <li><span><?= __("Надежность");?></span></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul class="ps-3 mb-0">
                    <li><span><?= __("Пунктуальность");?></span></li>
                    <li><span><?= __("Ответсвенность");?></span></li>
                    <li><span><?= __("Работа на клиента");?></span></li>
                    <li><span><?= __("Порядочность");?></span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Our clients -->
    <section class="py-5 about-clients wow fadeInUp">
      <div class="container-fluid common-container">
        <div class="row gx-lg-4 gx-0 gy-3">
          <div class="col-lg-6">
            <div class="text-lg-end">
              <h6 class="text-white text-uppercase fw-medium"><?= __("НАШИ КЛИЕНТЫ");?></h6>
              <span class="text-uppercase text-white font-gilda fs-4 lh-sm d-block mb-2"><?= __("Мы двигаем ваш<br>БИЗНЕС ВПЕРЁД");?></span>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row gx-sm-4 gx-0 gy-3">
              <div class="col-sm-6">
                <div class="p-3 text-white blue-boxes">
                  <p class="small lh-sm mb-lg-4 mb-3"><?= __("Мы уже много лет сотрудничаем с Taklog. Довольны качеством сервиса и оперативностью их сотрудников.");?></p>
                  <span class="text-uppercase text-end fw-medium d-block small"><?= __("Адбукодиров А.А");?></span>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="p-3 text-white blue-boxes">
                  <p class="small lh-sm mb-lg-4 mb-3"><?= __("Оперативность и профессионализм сотрудников всегда позволяют нам решать поставленные задачи в срок и достигать наших бизнес-целей.");?></p>
                  <span class="text-uppercase text-end fw-medium d-block small"><?= __("Муминов А.А");?></span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row my-lg-5 my-4 numbers-box gx-sm-4 gx-0 gy-4">
          <div class="col-lg-4 col-sm-6">
            <div class="text-white text-center">
              <span class="fw-bold d-block fs-3 mb-2">30+</span>
              <small class="d-block"><?= __("лет опыта");?></small>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="text-white text-center">
              <span class="fw-bold d-block fs-3 mb-2">1,000+</span>
              <small class="d-block"><?= __("Перевезенных трансп. единиц");?></small>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="text-white text-center">
              <span class="fw-bold d-block fs-3 mb-2">800+</span>
              <small class="d-block"><?= __("Довольных клиентов");?></small>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Info -->
    <section class="py-lg-5 py-4 bg-milk wow fadeInUp">
      <div class="container-fluid common-container">
        <div class="row gx-lg-4 gx-0 gy-4">
          <div class="col-lg-4">
            <div class="bg-corp h-100 py-xl-5 p-4 text-white">
              <div class="row gx-3">
                <div class="col-lg-3 col-md-1 col-2">
                  <div class="d-flex flex-column justify-content-center h-100">
                    <img class="img-fluid" src="images/about/ship.svg" alt="">
                  </div>
                </div>
                <div class="col-9">
                  <div class="d-flex flex-column justify-content-center h-100">
                    <span class="fw-medium d-block lh-sm mb-3 text-uppercase"><?= __("НАША КОМАНДА");?></span>
                    <p class="lh-sm small mb-0"><?= __("Внутренние и международные транспортные и логистические услуги");?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bg-corp h-100 py-xl-5 p-4 text-white">
              <div class="row gx-3">
                <div class="col-lg-3 col-md-1 col-2">
                  <div class="d-flex flex-column justify-content-center h-100">
                    <img class="img-fluid" src="images/about/building.svg" alt="">
                  </div>
                </div>
                <div class="col-9">
                  <div class="d-flex flex-column justify-content-center h-100">
                    <span class="fw-medium d-block lh-sm mb-3 text-uppercase"><?= __("Логистика мероприятий");?></span>
                    <p class="lh-sm small mb-0"><?= __("Ваш логистический партнер для спортивных, музыкаотных и торговых мероприятий");?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bg-corp h-100 py-xl-5 p-4 text-white">
              <div class="row gx-3">
                <div class="col-lg-3 col-md-1 col-2">
                  <div class="d-flex flex-column justify-content-center h-100">
                    <img class="img-fluid" src="images/about/location.svg" alt="">
                  </div>
                </div>
                <div class="col-9">
                  <div class="d-flex flex-column justify-content-center h-100">
                    <span class="fw-medium d-block lh-sm mb-3 text-uppercase"><?= __("Переезды и релокации");?></span>
                    <p class="lh-sm small mb-0"><?= __("Безупречные решения для международных переездов и релокаций");?></p>
                  </div>
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