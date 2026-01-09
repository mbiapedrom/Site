<?php
$page = 'servicos';
$page_title = 'Services - 3dscan2cad';
require __DIR__ . '/cabecalho.php';
?>

<main class="services-page">

  <section class="services-hero">
    <div class="services-hero-inner">
      <h1 class="services-title"><?= t('Services') ?></h1>

      <div class="services-hero-image">
        <img src="../img/services.png" alt="<?= t('Services elevation drawing') ?>">
      </div>
    </div>
  </section>

  <section class="services-other">
    <div class="services-other-inner">

      <!-- coluna esquerda -->
      <div class="services-other-left">
        <p class="services-other-kicker"><?= t('OTHER SERVICES') ?></p>

        <h2 class="services-other-title">
          <?= t('At 3DScan2CAD we can also<br>provide you with a lot more<br>2D/3D CAD services:') ?>
        </h2>

        <ul class="services-other-list">
          <li><?= t('Mechanical Electrical (HVAC)') ?></li>
          <li><?= t('Topography') ?></li>
          <li><?= t('Interior Design') ?></li>
          <li><?= t('Structures') ?></li>
          <li><?= t('Industrial Piping') ?></li>
          <li><?= t('Stone Masonry') ?></li>
          <li><?= t('Manufacturing') ?></li>
          <li><?= t('Water Ducts') ?></li>
          <li><?= t('Reflective Ceiling Plans') ?></li>
          <li><?= t('Architectural Lightning') ?></li>
          <li><?= t('Tele Communications') ?></li>
        </ul>
      </div>

      <!-- coluna direita -->
      <div class="services-other-right">
        <p>
          <?= t('Our goal is to ensure each and every client receives the highest possible level of quality and service, at a rate well below what they would pay for in-house or domestic services. With highly skilled staff members available, representing a range of expertise, we can provide exceptional service no matter the complexity or size of your project.') ?>

        </p>
      </div>

    </div>
  </section>

</main>

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

<?php require __DIR__ . '/rodape.php'; ?>
