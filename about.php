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
              <p class="large fs-5 fw-normal display-5 mb-lg-4"><?= __("ваш стратегический партнер в мире международных перевозок. С 15- <br> летним опытом в сфере грузоперевозок, мы предоставляем комплексные решения, адаптированные под задачи каждого клиента. "); ?></p>
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
            <p class="lh-sm small text-black"><?= __(text: "Taklog Industry, LLC — это не просто логистическая компания, а ваш стратегический партнер в мире международных перевозок. С 15-летним опытом в сфере грузоперевозок, мы предоставляем комплексные решения, адаптированные под задачи каждого клиента. Мы организуем сложные маршруты, внедряем мультимодальные перевозки и предлагаем индивидуальные логистические решения, гарантируя надежность и эффективность."); ?></p>
            <p class="lh-sm small text-black"><?= __("Наш парк автотранспорта в Европе насчитывает более 40 грузовых автомобилей, в том числе сертифицированные по стандарту ADR для перевозки опасных грузов, рефрижераторы, платформы lowbed для негабаритных грузов. Вся техника соответствует высоким экологическим классам, включая EURO-5 и EURO-6, что позволяет нам обеспечивать не только надежную, но и экологически безопасную логистику."); ?></p>
            <p class="lh-sm small text-black"><?= __("Taklog Industries, LLC имеет представительства в ключевых точках Европы и Азии, обеспечивая стратегическое управление и высокое качество сервиса."); ?></p>
          </div>
        </div>

        <div class="col-lg-6">
          <p class="lh-sm small text-black"><?= __("• Хоф, Германия - промышленный центр с удобным доступом к основным транспортным узлам Европы. Позволяет оперативно координировать перевозки внутри ЕС и СНГ."); ?></p>
          <p class="lh-sm small text-black"><?= __("• Мерсин, Турция - крупнейший порт на юге страны, соединяющий морские и наземные маршруты между Европой, Ближним Востоком и Центральной Азией. Наш офис в этом регионе позволяет организовывать эффективную перевалку грузов, оптимизировать логистические цепочки и обеспечивать надежное морское сообщение."); ?></p>
          <p class="lh-sm small text-black"><?= __("• Ташкент, Узбекистан - один из ключевых логистических узлов Центральной Азии и исторический центр Великого Шелкового пути, который веками соединял Восток и Запад. Наш офис здесь играет важную роль в организации транзитных перевозок между Китаем, странами СНГ и Ближним Востоком, обеспечивая оптимальные маршруты для международной торговли."); ?></p>
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
              <span class="text-uppercase font-gilda fs-3 mb-2 d-block"><?= __("Напишите нам - <br> обсудим вашу <br> перевозку!"); ?></span>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="row g-3">
              <div class="col-md-6">
                <div>
                  <input type="text" class="form-control bg-transparent rounded-1 text-white shadow-none border-light-subtle" placeholder="<?= __("Имя"); ?>" id="bannerFormName">
                </div>
              </div>
              <div class="col-md-6">
                <div>
                  <input type="text" class="form-control bg-transparent rounded-1 text-white shadow-none border-light-subtle" placeholder="<?= __("Номер телефона"); ?>" id="bannerFormPhone">
                </div>
              </div>
              <div class="col-12">
                <div>
                  <textarea rows="3" class="form-control bg-transparent rounded-1 text-white shadow-none border-light-subtle" placeholder="<?= __("Примечания"); ?>" id="bannerFormMessage"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-lg-end">
              <button class="btn btn-primary rounded-1"><?= __("Отправить запрос"); ?> <i class="bi bi-arrow-down-right ms-4"></i></button>
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
          <h2 class="text-uppercase text-corp font-gilda lh-sm mb-lg-4 mb-3"><?= __("НАШИ ЦЕННОСТИ"); ?></h2>
        </div>
        <div class="col-lg-4">
          <small class="text-black d-block lh-sm"><?= __("В Taklog Logistics мы ориентированы на достижение успеха наших клиентов. Благодаря ответственному подходу, высокому качеству услуг и ценности каждого сотрудника, мы помогаем нашим партнерам достигать их целей."); ?></small>
        </div>
      </div>
      <div class="row g-sm-4 gx-0 gy-3">
        <div class="col-lg-4 col-md-6">
          <div class="px-lg-5 p-4 bg-smoke d-flex flex-column justify-content-center align-items-center text-center h-100">
            <img class="img-fluid mb-lg-4 mb-3" src="images/about/trust.png" alt="">
            <span class="font-gilda text-corp text-uppercase lh-sm fs-5"><?= __("Открытость и доверие"); ?></span>
            <p class="text-black text-uppercase"><?= __("Мы строим прозрачные отношения с клиентами и партнерами, основываясь на честности и искренности"); ?></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="px-lg-5 p-4 bg-smoke d-flex flex-column justify-content-center align-items-center text-center h-100">
            <img class="img-fluid mb-lg-4 mb-3" src="images/about/respect.png" alt="">
            <span class="font-gilda text-corp text-uppercase lh-sm fs-5"><?= __("Уважение и равные возможности"); ?></span>
            <p class="text-black text-uppercase"><?= __("Мы создаем среду, в которой каждый чувствует себя ценным, обеспечивая равные условия и уважение ко всем"); ?></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="px-lg-5 p-4 bg-smoke d-flex flex-column justify-content-center align-items-center text-center h-100">
            <img class="img-fluid mb-lg-4 mb-3" src="images/about/star.png" alt="">
            <span class="font-gilda text-corp text-uppercase lh-sm"><?= __("Качество и профессионализм"); ?></span>
            <p class="text-black text-uppercase"><?= __("Мы гарантируем высокий уровень сервиса, ориентированный на эффективное решение сложных задач"); ?></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="px-lg-5 p-4 bg-smoke d-flex flex-column justify-content-center align-items-center text-center h-100">
            <img class="img-fluid mb-lg-4 mb-3" src="images/about/docs.png" alt="">
            <span class="font-gilda text-corp text-uppercase lh-sm"><?= __("Ответственность за результат"); ?></span>
            <p class="text-black text-uppercase"><?= __("Мы принимаем ответственность за каждое наше решение, обеспечивая надежность и выполнение обязательств"); ?></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="px-lg-5 p-4 bg-smoke d-flex flex-column justify-content-center align-items-center text-center h-100">
            <img class="img-fluid mb-lg-4 mb-3" src="images/about/innovation.png" alt="">
            <span class="font-gilda text-corp text-uppercase lh-sm"><?= __("Инновации и устойчивое развитие"); ?></span>
            <p class="text-black text-uppercase"><?= __("Мы внедряем современные технологии и экологические практики, делая наши решения эффективными и безопасными для окружающей среды"); ?></p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="px-lg-5 p-4 bg-smoke d-flex flex-column justify-content-center align-items-center text-center h-100">
            <img class="img-fluid mb-lg-4 mb-3" src="images/about/command.png" alt="">
            <span class="font-gilda text-corp text-uppercase lh-sm"><?= __("Командный дух и партнерство"); ?></span>
            <p class="text-black text-uppercase"><?= __("Мы верим в силу командной работы и создаем партнерские отношения, которые помогают достигать общих целей"); ?></p>
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
          <img class="img-fluid d-lg-block d-none h-75 w-100 object-fit-cover" src="images/about/team.png" alt="">
        </div>
        <div class="col-lg-5">
          <div>
            <h6 class="text-gray text-uppercase fw-medium"><?= __("НАША КОМАНДА"); ?></h6>
            <span class="text-uppercase text-corp font-gilda medium-quote fs-2 fw-medium lh-sm d-block mb-2"><?= __("Команда, которой можно восхищаться"); ?></span>
            <p class="text-black mb-4 mt-4"><?= __("Мы гордимся нашей интернациональной командой, состоящей из экспертов в области международной логистики, которые обладают глубокими знаниями рынка и уникальным опытом в организации грузоперевозок по всему миру. Профессионализм, опыт, глубокие знания рынка и внимание к деталям позволяют нам находить эффективные решения даже для самых сложных задач."); ?></p>
            <span class="text-uppercase text-corp fs-3 fw-medium lh-sm d-block mb-3 mb-lg-4"><?= __("Качества членов нашей команды:"); ?></span>
            <div class="row gx-lg-4 gx-0">
              <div class="col-lg-6">
                <ul class="ps-3 mb-0">
                  <li><span><?= __("Ориентированность на клиента"); ?></span></li>
                  <li><span><?= __("Честность"); ?></span></li>
                  <li><span><?= __("Внимание к деталям"); ?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="ps-3 mb-0">
                  <li><span><?= __("Ориентированность на клиента"); ?></span></li>
                  <li><span><?= __("Честность"); ?></span></li>
                  <li><span><?= __("Внимание к деталям"); ?></span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Our clients -->
  <section class="py-5 about-clients wow fadeInUp h-100 d-flex align-items-center justify-content-center">
    <div class="container-fluid common-container">
      <div class="row justify-content-center my-lg-5 my-4 numbers-box gx-sm-4 gx-0 gy-4">
        <div class="col-lg-4 col-sm-6">
          <div class="text-white text-center">
            <span class="fw-bold d-block fs-1 mb-2">15+</span>
            <small class="d-block"><?= __("Лет опыта"); ?></small>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="text-white text-center">
            <span class="fw-bold d-block fs-1 mb-2">3000+</span>
            <small class="d-block"><?= __("Перевезенных трансп. единиц"); ?></small>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="text-white text-center">
            <span class="fw-bold d-block fs-1 mb-2">5000+</span>
            <small class="d-block"><?= __("Довольных клиентов"); ?></small>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include('includes/footer.php'); ?>
</body>

</html>