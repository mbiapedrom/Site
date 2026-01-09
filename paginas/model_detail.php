<?php
$page = 'model_detail';
$page_title = 'Laser scan survey - 3dscan2cad';
require __DIR__ . '/cabecalho.php';
?>

<main class="model-detail-page">

  <!-- TÍTULO GRANDE -->
  <section class="model-detail-hero">
    <h1 class="model-detail-title">
      <?= t('Rights of Light Model from laser scan Survey') ?>
    </h1>
  </section>

  <!-- IMAGEM GRANDE -->
  <section class="model-detail-main-image">
    <div class="model-detail-main-image-inner">
      <img src="../img/portfolio1.png"
           alt="<?= t('Rights of Light Model from laser scan Survey') ?>">
    </div>
  </section>

  <!-- TEXTO EXPLICATIVO -->
  <section class="model-detail-description">
    <div class="model-detail-description-inner">
      <p>
        <?= t(
          'case.rights.description',
          'Due to the legally sensitive nature of rights of light work, we do not provide information about our sites, but this is one of many Rights of Light models 3DScan2CAD have been producing on a daily basis to our clients.'
        ) ?>
      </p>
    </div>
  </section>

  <!-- BLOCO "NEXT PROJECT" -->
  <section class="model-detail-next">
    <div class="model-detail-next-inner">

      <div class="model-detail-next-text">
        <p class="model-detail-next-kicker">
          <?= t('Next project') ?>
        </p>

        <h2 class="model-detail-next-title">
          <?= t('Rights of Light Model from laser scan Survey') ?>
        </h2>
      </div>

      <!-- imagem à direita; neste exemplo mando de volta para o portfolio -->
      <a class="model-detail-next-image" href="portfolio.php<?= $lang_query ?>">
        <img src="../img/portfolio1.png"
             alt="<?= t('Rights of Light Model from laser scan Survey') ?>">
      </a>

    </div>
  </section>

</main>

<?php require __DIR__ . '/rodape.php'; ?>
