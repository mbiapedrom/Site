<?php
$page = 'portfolio';
$page_title = 'Portfolio - 3dscan2cad';
require __DIR__ . '/cabecalho.php';
?>

<main class="portfolio-page">

  <!-- TÍTULO "Case studies" -->
  <section class="portfolio-hero">
    <h1 class="portfolio-title">
      <?= t('Portfolio', 'Portfolio') ?>
    </h1>
  </section>

  <!-- BLOCOS DE CASE STUDIES (AQUI SÓ 1 IMAGEM: Rights of Light...) -->
  <section class="portfolio-grid">
    <article class="portfolio-item">
      <a href="model_detail.php<?= $lang_query ?>" class="portfolio-link">
      <div class="portfolio-image">
        <!-- aqui usas a imagem que corresponde à segunda do slider (ex3.png) -->
        <img src="../img/portfolio1.png"
             alt="<?= t('Rights of Light Model from laser scan Survey') ?>">
      </div>

      <p class="portfolio-caption">
        <?= t('Rights of Light Model from laser scan Survey') ?>
      </p>
      </a>
    </article>
  </section>

  <!-- TESTEMUNHO IGUAL AO DA HOME -->
 <section id="portfolio-testimonials"
         class="home-testimonials portfolio-testimonials">
  <div class="home-testimonials-inner">

    <p class="home-kicker"><?= t('TESTIMONIALS') ?></p>
    <h2 class="home-testimonials-title">
      <?= t('What our clients<br>say about us') ?>
    </h2>

    <hr class="testimonials-separator">

    <div class="home-testimonials-slider-wrapper"></div>

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


</main>

<script src="../js/testemunhos.js"></script>

<?php require __DIR__ . '/rodape.php'; ?>
