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
              <a class="nav-link active"  data-bs-toggle="tab" href="#airTransportation" aria-selected="true" role="tab"><?= __("Автомобильные перевозки");?></a>
            </li>
            <li class="nav-item  fw-medium" role="presentation">
              <a class="nav-link" data-bs-toggle="tab" href="#roadTransportation" aria-selected="false" tabindex="-1" role="tab"><?= __("Авиационные перевозки");?></a>
            </li>
            <li class="nav-item  fw-medium" role="presentation">
              <a class="nav-link" data-bs-toggle="tab" href="#railwayTransportation" aria-selected="false" tabindex="-1" role="tab"><?= __("Железнодорожные перевозки");?></a>
            </li>
          </ul>
          <div id="myTabContent" class="tab-content pt-lg-4 py-3">
            <div class="tab-pane fade show active" id="airTransportation" role="tabpanel">
              <div class="row gx-xl-5 gx-lg-4 gx-0 mb-xl-5 mb-4 gy-3">
                <div class="col-lg-8">
                  <img class="img-fluid h-100 object-fit-cover" src="images/services/plane.png" alt="">
                </div>
                <div class="col-lg-4">
                  <div>
                    <span class="fw-medium text-red d-block lh-sm fs-5 mb-lg-3 mb-2"><?= __("Автомобильные перевозки");?></span>
                    <p class="lh-sm text-gray small"><?= __("Авиаперевозки – это способ транспортировки грузов и пассажиров с использованием воздушных судов. Это один из самых быстрых и эффективных видов транспорта, особенно для доставки товаров на дальние расстояния.");?></p>
                    <div class="bg-fog p-3 p-lg-4">
                      <p class="lh-sm text-gray small"><?= __("Наш опыт в области перевозок и многолетнее сотрудничество с передовыми компаниями дает вам возможность получить быструю и безопасную доставку вашего груза практически в любой точке мира.");?></p>
                      <p class="lh-sm text-gray small mb-0"><?= __("Мы берем на себя задачу доставки вашего срочного груза.");?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row gx-xl-5 gx-lg-4 gx-0 gy-3">
                <div class="col-lg-8">
                  <div class="accordion inner-accordion" id="accordionExampleLg">
                    <div class="accordion-item rounded-0 border-0">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          <?= __("Полноценный сервис");?>
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExampleLg">
                        <div class="accordion-body">
                          <p class="lh-sm text-gray"><?= __("Taklog Logistics – ваш эксперт в области перевозок. Мы предлагаем полный комплекс услуг, включая таможенное оформление, страхование и отслеживание грузов в режиме реального времени.");?></p>
                          <p class="lh-sm text-gray"><?= __("Наша команда профессионалов гарантирует безопасную и своевременную доставку ваших грузов, независимо от их типа и назначения.");?></p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item rounded-0 border-0">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          <?= __("Соответствия нормам");?>
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExampleLg">
                        <div class="accordion-body">
                          <p class="text-gray"><?= __("Мы гарантируем не только своевременную доставку вашего груза, но и полное соответствие всем международным стандартам и требованиям. Благодаря глубокому пониманию нюансов глобальной торговли и постоянному мониторингу изменений в законодательстве, мы помогаем нашим клиентам избежать рисков и обеспечить бесперебойность поставок.");?></p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item rounded-0 border-0">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <?= __("Полноценный сервис");?>
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExampleLg">
                        <div class="accordion-body">
                            <p class="text-gray"><?= __("Мы берем на себя все сложности таможенного оформления. Благодаря многолетнему опыту и глубоким знаниям таможенного законодательства, мы обеспечиваем беспроблемный проход ваших грузов через таможню. Подготовка и подача всех необходимых документов, включая декларации, сертификаты и лицензии, – это наша повседневная работа.");?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="bg-fog p-3 p-lg-4">
                    <span class="fw-semibold text-corp d-block lh-sm mb-3"><?= __("Свяжитесь с нами");?></span>
                    <p class="text-gray lh-sm small"><?= __("Мы предлагаем комплексное решение для ваших авиаперевозок. От момента приема груза до его доставки в пункт назначения мы берем на себя все организационные вопросы, включая таможенное оформление и страхование.");?></p>
                    <a class="btn btn-primary rounded-1 w-100 text-start" href="/offices"><?= __("Связаться с нами");?><i class="bi bi-arrow-down-right float-end"></i></a>
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
                    <span class="fw-medium text-red d-block lh-sm fs-5 mb-lg-3 mb-2"><?= __("Автомобильные перевозки");?></span>
                    <p class="lh-sm text-gray small"><?= __("Автомобильные перевозки: Самый распространенный вид перевозок, особенно на короткие и средние расстояния. Автомобили обладают высокой маневренностью и могут доставлять грузы практически в любое место.");?></p>
                    <div class="bg-fog p-3 p-lg-4">
                      <p class="lh-sm text-gray small"><?= __("Наш опыт в области перевозок и многолетнее сотрудничество с передовыми компаниями дает вам возможность получить быструю и безопасную доставку вашего груза практически в любой точке мира.");?></p>
                      <p class="lh-sm text-gray small mb-0"><?= __("Мы берем на себя задачу доставки вашего срочного груза.");?></p>
                    </div>
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
                    <span class="fw-medium text-red d-block lh-sm fs-5 mb-lg-3 mb-2"><?= __("Ж/Д перевозки");?></span>
                    <p class="lh-sm text-gray small"><?=__("Железнодорожные перевозки – это один из наиболее распространенных видов грузоперевозок, особенно для транспортировки больших объемов грузов на дальние расстояния. Поезда способны перевозить грузы различных типов и размеров, от сыпучих материалов до контейнеров и специализированного оборудования.");?></p>
                    <div class="bg-fog p-3 p-lg-4">
                      <p class="lh-sm text-gray small"><?= __("Наш опыт в области перевозок и многолетнее сотрудничество с передовыми компаниями дает вам возможность получить быструю и безопасную доставку вашего груза практически в любой точке мира.");?></p>
                      <p class="lh-sm text-gray small mb-0"><?= __("Мы берем на себя задачу доставки вашего срочного груза.");?></p>
                    </div>
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
                        <span class="fw-medium text-red d-block lh-sm fs-5 mb-lg-3 mb-2"><?= __("Авиа-перевозка");?></span>
                        <p class="lh-sm text-gray small"><?= __("Наш опыт в области авиаперевозок и многолетнее сотрудничество с передовыми авиакомпаниями дает вам возможность получить быструю и безопасную доставку вашего груза практически в любой аэропорт мира. Мы берем на себя задачу доставки вашего срочного груза.");?></p>
                        <div class="bg-fog p-3 p-lg-4">
                          <p class="lh-sm text-gray small"><?= __("Наш опыт в области авиаперевозок и многолетнее сотрудничество с передовыми авиакомпаниями дает вам возможность получить быструю и безопасную доставку вашего груза практически в любой аэропорт мира.");?></p>
                          <p class="lh-sm text-gray small mb-0"><?= __("Мы берем на себя задачу доставки вашего срочного груза.");?></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row gx-xl-5 gx-lg-4 gx-0 gy-3">
                    <div class="col-lg-8">
                      <div class="accordion inner-accordion" id="accordionExample">
                        <div class="accordion-item rounded-0 border-0">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Полноценный сервис
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p class="lh-sm text-gray"><?= __("Taklog Logistics – ваш эксперт в области перевозок. Мы предлагаем полный комплекс услуг, включая таможенное оформление, страхование и отслеживание грузов в режиме реального времени.");?></p>
                              <p class="lh-sm text-gray"><?= __("Наша команда профессионалов гарантирует безопасную и своевременную доставку ваших грузов, независимо от их типа и назначения.");?></p>
                            </div>
                          </div>
                        </div>
                        
                        <div class="accordion-item rounded-0 border-0">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <?= __("Соответствия нормам");?>
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="lh-sm text-gray"><?= __("Мы гарантируем не только своевременную доставку вашего груза, но и полное соответствие всем международным стандартам и требованиям. Благодаря глубокому пониманию нюансов глобальной торговли и постоянному мониторингу изменений в законодательстве, мы помогаем нашим клиентам избежать рисков и обеспечить бесперебойность поставок.");?></p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item rounded-0 border-0">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <?= __("Таможенное оформление");?>
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p class="lh-sm text-gray"><?= __("Мы берем на себя все сложности таможенного оформления. Благодаря многолетнему опыту и глубоким знаниям таможенного законодательства, мы обеспечиваем беспроблемный проход ваших грузов через таможню. Подготовка и подача всех необходимых документов, включая декларации, сертификаты и лицензии, – это наша повседневная работа.");?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-lg-4">
                      <div class="bg-fog p-3 p-lg-4">
                        <span class="fw-semibold text-corp d-block lh-sm mb-3"><?= __("Свяжитесь с нами");?></span>
                        <p class="text-gray lh-sm small"><?= __("Наш опыт в области авиаперевозок и многолетнее сотрудничество с передовыми авиакомпаниями дает вам возможность получить быструю и безопасную");?></p>
                        <p class="text-gray lh-sm small"><?= __("доставку вашего груза практически в любой аэропорт мира. Мы берем на себя задачу доставки вашего срочного груза.");?></p>
                        <a class="btn btn-primary rounded-1 w-100 text-start" href="#"><?= __("Связаться с нами");?><i class="bi bi-arrow-down-right float-end"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="accordion-item rounded-0 border-0">
              <h2 class="accordion-header" id="outerHeadingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#outerCollapseTwo" aria-expanded="false" aria-controls="outerCollapseTwo">
                  <?= __("Автомобильная перевозка");?>
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
                  <?= __("Железно-дорожная перевозка");?>
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
              <small class="d-block lh-sm mb-2"><?= __("Полноценный сервис");?></small>
              <span class="d-block lh-sm fs-5 fw-semibold mb-3"><?= __("Нужно доставить товар? Доверьтесь нам!");?></span>
              <p class="lh-sm small"><?= __("Taklog Logistics — ваш надежный партнер для быстрых и качественных перевозок грузов в любую точку мира. Мы предлагаем полный спектр услуг, ориентированных на ваши потребности.");?></p>
              
              <div class="row gx-xl-5 gx-lg-4 gx-0 lined-boxes">
                <div class="col-lg-6">
                  <div class="row gx-3">
                    <div class="col-lg-2 col-md-1 col-2">
                      <img class="img-fluid" src="images/services/location.svg" alt="">
                    </div>
                    <div class="col-lg-10 col-md-11 col-10">
                      <small class="fw-semibold d-block lh-sm mb-1"><?= __("Географический охват");?></small>
                      <small class="d-block lh-sm text-smallest"><?= __("Страны Евросоюза, Турция");?></small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="row gx-3">
                    <div class="col-2">
                      <img class="img-fluid" src="images/services/safety.svg" alt="">
                    </div>
                    <div class="col-10">
                      <small class="fw-semibold d-block lh-sm mb-1"><?= __("100% доверие");?></small>
                      <small class="d-block lh-sm text-smallest"><?= __("Мы верим в силу партнерства и стремимся к совместному процветанию");?></small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="row gx-3">
                    <div class="col-2">
                      <img class="img-fluid" src="images/services/24.svg" alt="">
                    </div>
                    <div class="col-10">
                      <small class="fw-semibold d-block lh-sm mb-1"><?= __("24/7 Поддержка");?></small>
                      <small class="d-block lh-sm text-smallest"><?= __("Оперативность превыше всего: ответ в кратчайшие сроки.");?></small>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="row gx-3">
                    <div class="col-2">
                      <img class="img-fluid" src="images/services/medal.svg" alt="">
                    </div>
                    <div class="col-10">
                      <small class="fw-semibold d-block lh-sm mb-1"><?= __("Гибкость");?></small>
                      <small class="d-block lh-sm text-smallest"><?= __("Мы подходим к каждому клиенту индивидуально, независимо от его размера и специфики бизнеса.");?></small>
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