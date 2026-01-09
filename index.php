<?php
$page = 'index';
require __DIR__ . '/cabecalho.php';
?>
  
<section class="hero-slider full-bleed">
  <div class="slider-viewport">
    <ul class="slides" data-slider>
      <li class="slide">
        <img src="../img/rendering_noite.png" alt="<?= t('Rendering') ?>">
        <div class="overlay"></div>
        <div class="caption">
          <h1><?= t('Rendering') ?></h1>
          <p><?= t('Bring your projects to life') ?></p>
          <a href="#home-about"
             class="arrow"
             aria-label="<?= t('Scroll to About us') ?>"></a>
        </div>
      </li>

      <li class="slide">
        <img src="../img/teste2.png" alt="<?= t('2D Drafting') ?>">
        <div class="overlay"></div>
        <div class="caption">
          <h1><?= t('Rendering') ?></h1>
          <p><?= t('Bring your projects to life') ?></p>
          <a href="#home-about"
            class="arrow"
            aria-label="<?= t('Scroll to About us') ?>"></a>
        </div>
      </li>

      <li class="slide slide-main">
        <img src="../img/service3.png" alt="3DSCAN2CAD">
        <div class="overlay"></div>
        <div class="caption">
          <h1>3DSCAN2CAD</h1>
          <p><?= t('Provide a full range of CAD services, including<br>Scan Data Conversion') ?></p>
          <a href="#home-about"
            class="arrow"
            aria-label="<?= t('Scroll to About us') ?>"></a>
        </div>
      </li>
    </ul>
  </div>
    
  <div class="pagination" aria-hidden="true">
    <span class="dot is-active"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
</section>

<section id="home-about" class="home-about">
  <div class="home-about-inner">

    <p class="home-kicker"><?= t('WHO WE ARE') ?></p>
    <h2 class="home-about-title"><?= t('About us') ?></h2>

    <div class="home-about-body">
      <div class="home-about-media">
        <img src="../img/aboutus2.png" alt="<?= t('Team working in the office') ?>">
      </div>

      <div class="home-about-copy">
        <p><?= t('home.about.p1') ?></p>
        <p><?= t('home.about.p2') ?></p>
        <p><?= t('home.about.p3') ?></p>
      </div>
    </div>
  </div>
</section>

<section id="home-services" class="home-services">
  <div class="home-services-inner">

    <p class="home-kicker"><?= t('OUR SERVICES') ?></p>
    <h2 class="home-services-title"><?= t('What we do') ?></h2>

    <div class="home-services-body">
      <!-- COLUNA ESQUERDA: imagem + texto por baixo -->
      <div class="home-services-col">
        <div class="home-services-image">
          <img src="../img/rights_of_light1.png" alt="<?= t('City aerial view') ?>">
        </div>

        <div class="home-services-copy">
          <h3><?= t('Rights of light') ?></h3>
          <a href="rights_of_light.php<?= $lang_query ?? '' ?>" class="home-services-link">
            <?= t('Explore') ?> <span class="arrow-right">→</span>
          </a>
        </div>
      </div>

      <!-- COLUNA DIREITA: só imagem, mesmo tamanho -->
      <div class="home-services-col">
        <div class="home-services-image">
          <img src="../img/rights_of_light2.png" alt="<?= t('Rights of light 3D view') ?>">
        </div>
      </div>
    </div>

  </div>
</section>

<section id="home-detail" class="home-detail">
  <div class="home-detail-inner">

    <div class="home-detail-grid">
      <!-- Imagem da esquerda -->
      <div class="detail-media detail-media--main">
        <img src="../img/3d_modeling1.png" alt="<?= t('3D detail modelling') ?>">
      </div>

      <!-- Imagem da direita -->
      <div class="detail-media detail-media--secondary">
        <img src="../img/3d_modeling2.png" alt="<?= t('3D detail rendering') ?>">
      </div>

      <!-- Texto em baixo da 1.ª imagem -->
      <div class="home-detail-copy">
        <h3><?= t('3D Detail Modeling') ?></h3>
        <a href="detail_modeling.php<?= $lang_query ?? '' ?>" class="home-services-link">
          <?= t('Explore') ?> <span class="arrow-right">→</span>
        </a>
      </div>
    </div>

  </div>
</section>

<section id="home-rendering" class="home-rendering">
  <div class="home-rendering-inner">

    <div class="home-rendering-grid">
      <!-- Imagem 1 -->
      <div class="render-media render-media--main">
        <img src="../img/teste1.png" alt="<?= t('Rendering exterior') ?>">
      </div>

      <!-- Imagem 2 -->
      <div class="render-media render-media--secondary">
        <img src="../img/teste3.png" alt="<?= t('Rendering interior') ?>">
      </div>

      <!-- Texto por baixo da 1ª imagem -->
      <div class="home-rendering-copy">
        <h3><?= t('Rendering') ?></h3>
        <a href="rendering_service.php<?= $lang_query ?? '' ?>" class="home-services-link">
          <?= t('Explore') ?> <span class="arrow-right">→</span>
        </a>
      </div>
    </div>

  </div>
</section>

<section id="home-testimonials" class="home-testimonials">
  <div class="home-testimonials-inner">

    <p class="home-kicker"><?= t('TESTIMONIALS') ?></p>
    <h2 class="home-testimonials-title">
      <?= t('What our clients<br>say about us') ?>
    </h2>

    <hr class="testimonials-separator">

    <div class="home-testimonials-slider-wrapper"></div>

    <!-- SLIDER -->
    <div class="home-testimonials-slider">
      
      <!-- SLIDE 1 -->
      <div class="testimonial-slide">
        <div class="home-testimonials-body">
          <div class="testimonial-meta">
            <p class="testimonial-name">NEIL CAWOOD</p>
            <p class="testimonial-role">
              <?= t('(Director) CPMC – CHARTERED SURVEYING', '(Director) CPMC – CHARTERED SURVEYING') ?>
            </p>
          </div>

          <div class="testimonial-quote">
            <p><?= t(
              'home.testimonial.1',
              'Having used 3DSCAN2CAD for some time now, I would unhesitatingly recommend their services. Working with them has proved to be very refreshing and I find that the 3D models and 2D drawing detail is always superb.'
            ) ?></p>
          </div>
        </div>
      </div>

      <!-- SLIDE 2 -->
      <div class="testimonial-slide">
        <div class="home-testimonials-body">
          <div class="testimonial-meta">
            <p class="testimonial-name">JOHN DOE</p>
            <p class="testimonial-role">
              <?= t('Project Manager – ABC Company', 'Project Manager – ABC Company') ?>
            </p>
          </div>

          <div class="testimonial-quote">
            <p><?= t(
              'home.testimonial.2',
              '3DSCAN2CAD have been a reliable partner, delivering accurate models on tight deadlines. Their communication and flexibility are excellent.'
            ) ?></p>
          </div>
        </div>
      </div>

      <!-- SLIDE 3 -->
      <div class="testimonial-slide">
        <div class="home-testimonials-body">
          <div class="testimonial-meta">
            <p class="testimonial-name">JANE SMITH</p>
            <p class="testimonial-role">
              <?= t('Architect – XYZ Studio', 'Architect – XYZ Studio') ?>
            </p>
          </div>

          <div class="testimonial-quote">
            <p><?= t(
              'home.testimonial.3',
              'We are very impressed with the quality of their work and the attention to detail. Highly recommended for complex projects.'
            ) ?></p>
          </div>
        </div>
      </div>

    </div>

    <div class="home-testimonials-nav">
        <button type="button"
                class="home-testimonials-arrow prev">‹</button>
        <button type="button"
                class="home-testimonials-arrow next">›</button>
      </div>
    </div>

  </div>
</section>


<section id="home-projects" class="home-projects">
  <div class="home-projects-inner">

    <p class="home-kicker"><?= t('OUR PORTFOLIO') ?></p>
    <h2 class="home-projects-title"><?= t('Latest projects') ?></h2>

    <div class="home-projects-slider" data-slider-root>
      <div class="slider-viewport">
        <ul class="slides" data-slider>
          <!-- SLIDE 1 -->
          <li class="slide"
              data-caption="<?= t('2D Drafting from Scan data') ?>">
            <img src="../img/ex2.png" alt="<?= t('2D Drafting from Scan data') ?>">
          </li>

          <!-- SLIDE 2 -->
          <li class="slide"
              data-caption="<?= t('Rights of Light Model from laser scan Survey') ?>">
            <img src="../img/ex3.png" alt="<?= t('Rights of Light Model from laser scan Survey') ?>">
          </li>

          <!-- SLIDE 3 -->
          <li class="slide"
              data-caption="<?= t('Rights of Light Model from laser scan Survey') ?>">
              <a href="model_detail.php<?= $lang_query ?? '' ?>" class="portfolio-link">
            <img src="../img/portfolio1.png" alt="<?= t('Rights of Light Model from laser scan Survey') ?>">
            </a>
          </li>
        </ul>

      </div>

      <div class="home-projects-meta">
        <p class="home-projects-caption">
          <?= t('Rights of Light Model from laser scan Survey') ?>
        </p>

        <div class="home-projects-arrows">
          <button type="button"
                  class="case-nav case-nav-prev"
                  data-prev
                  aria-label="<?= t('Previous project') ?>">
            ←
          </button>
          <button type="button"
                  class="case-nav case-nav-next"
                  data-next
                  aria-label="<?= t('Next project') ?>">
            →
          </button>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="home-more-projects">
  <div class="home-more-projects-inner">
    <a href="portfolio.php<?= $lang_query ?? '' ?>" class="more-projects-link">
      <?= t('MORE PROJECTS') ?> <span class="more-plus">+</span>
    </a>
  </div>
</section>

<script src="../js/testemunhos.js"></script>

<script src="../js/index.js"></script>

<?php require __DIR__ . '/rodape.php'; ?>