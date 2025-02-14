<!--Header-->
<header class="font-gilda">
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid common-container">
      <div class="row gx-0 w-100">
        <div class="col-xl-3 col-lg-2">
          <div class="d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="/">
              <img class="img-fluid" src="images/logo.svg" alt="">
            </a>
            <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
        </div>
        <div class="col-xl-9 col-lg-10">
          <div class="d-flex flex-column justify-content-center h-100 bordered-right-side">
            <div class="collapse navbar-collapse" id="navbarColor01">
              <ul class="navbar-nav me-auto text-center">
                <li class="nav-item">
                  <a class="nav-link <?= $active == 0 ? 'active' : ''; ?>" href="/index"><?= __("Главная"); ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?= $active == 1 ? 'active' : ''; ?>" href="/about"><?= __("О компании"); ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?= $active == 2 ? 'active' : ''; ?>" href="/services"><?= __("Услуги"); ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?= $active == 3 ? 'active' : ''; ?>" href="/our-works"><?= __("Наши работы"); ?></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link <?= $active == 4 ? 'active' : ''; ?>" href="/offices"><?= __("Офисы"); ?></a>
                </li>
              </ul>
              
              <div class="text-center mt-lg-0 mt-2">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="dropdown" style="font-family: Inter;">
                          <button class="text-uppercase rounded-0 btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= get_locale(); ?>
                          </button>
                          <ul class="dropdown-menu rounded-0">
                            <?php foreach (get_lang_map() as $locale => $name): ?>
                            <li>
                                <a class="dropdown-item" href="<?= sprintf('/?locale=%s', $locale); ?>"><?= $name; ?></a>
                            </li>
                            <?php endforeach; ?>
                          </ul>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <a class="btn btn-outline-dark rounded-0" target="_blank" href="https://t.me/Shaxzod_TaklogIndustry"><?= __("Получить консультацию");?><i class="bi bi-arrow-down-right ms-3"></i></a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>

<?php if (!non_default()): ?>
<style>
h1,
h2,
h3,
h4,
h5,
h6,
.font-gilda {
  font-family: "Gilda Display", "Inter";
}
</style>
<?php endif; ?>