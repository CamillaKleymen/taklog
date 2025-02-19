<!-- Footer -->
<footer class="bg-milk pt-5 pb-3">
  <div class="container-fluid common-container">
    <div class="row gy-3 gx-lg-4 gx-0">
      <div class="col-lg-2">
        <img class="img-fluid footer-logo" src="images/logo.svg" alt="">
      </div>
      <div class="col-lg-3">
        <span class="fw-semibold text-corp d-block mb-3"><?= __("Меню");?></span>
        <ul class="list-unstyled footer-menu mb-0">
          <li>
            <a class="text-decoration-none text-black" href="/index"><?= __("Главная");?></a>
          </li>
          <li>
            <a class="text-decoration-none text-black" href="/about"><?= __("О компании");?></a>
          </li>
          <li>
            <a class="text-decoration-none text-black" href="/services"><?= __("Услуги");?></a>
          </li>
          <li>
            <a class="text-decoration-none text-black" href="/our-works"><?= __("Наши работы");?></a>
          </li>
          <li>
            <a class="text-decoration-none text-black" href="/offices"><?= __("Офисы");?></a>
          </li>
        </ul>
      </div>
      <div class="col-lg-4">
        <span class="fw-semibold text-corp d-block mb-3"><?= __("Контакты");?></span>
        <div class="mb-3">
          <small class="text-gray d-block lh-sm mb-2"><?= __("Телефон");?></small>
          <small class="d-block text-black lh-sm"><a class="text-decoration-none text-dark" href="tel:+998 77 007 11 18">+998 77 007 11 18</a></small>
        </div>
        <div class="mb-3">
          <small class="text-gray d-block lh-sm mb-2"><?= __("Почта");?></small>
          
          <small class="d-block text-black lh-sm"><a class="text-decoration-none text-dark" href="mailto:info@taklog.com">info@taklog.com</a></small>
        </div>
        <div class="">
          <small class="text-gray d-block lh-sm mb-2"><?= __("Адрес");?></small>
          <small class="d-block text-black lh-sm">
            <a class="text-dark text-decoration-none" target="_blank" href="https://maps.app.goo.gl/US34J9JCebyizdBx9"><?= __("Узбекистан, Ташкент, ул. Абдуллы Каххара, 56А");?></a>
          </small>
        </div>
      </div>
      <div class="col-lg-3">
        <div>
          <span class="fw-semibold text-corp d-block mb-3"><?= __("Консультация");?></span>
          <p class="text-black lh-sm small"><?= __("Позвоните нам и мы будем рады оказать вам консультационную поддержку.");?></p>
          <a class="btn btn-primary rounded-1" href="/offices"><?= __("Свяжитесь с нами");?></a>
          <small class="d-block lh-sm text-smallest pt-3"><?= __("Подписываясь, вы соглашаетесь с нашей Политикой конфиденциальности и даете согласие на получение обновлений от нашей компании.");?></small>
        </div>
        
        <ul class="list-inline mb-0 mt-4">
            <li class="list-inline-item">
              <a class="text-black" target="_blank" href="https://www.facebook.com/taklog.uz/"><i class="bi bi-facebook"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="text-black" target="_blank" href="https://www.instagram.com/taklog.uz"><i class="bi bi-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="text-black" target="_blank" href="https://t.me/Shaxzod_TaklogIndustry"><i class="bi bi-telegram"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="text-black" target="_blank" href="https://api.whatsapp.com/send?phone=998990801118"><i class="bi bi-whatsapp"></i></a>
            </li>
            <li class="list-inline-item">
              <a class="text-black" target="_blank" href="https://www.linkedin.com/company/taklog-industry-llc/"><i class="bi bi-linkedin"></i></a>
            </li>
        </ul>
      </div>
    </div>
    <div class="border-top pt-3 mt-lg-4 mt-lg-5">
      <div class="row gx-lg-4 gx-0 flex-lg-row-reverse">
        <div class="col-lg-4">
        </div>
        <div class="col-lg-8">
          <div class="d-lg-flex align-items-center h-100 d-none">
            <small class="text-smallest me-3">© 2023 Taklog. All rights reserved.</small>
            <a class="text-black text-smallest me-3" href="#">Cookies Settings</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/jquery@2.1.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="/script.js?<?= time(); ?>"></script>