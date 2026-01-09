<?php
$page = 'rendering_service';          
$page_title = 'Rendering - 3dscan2cad';
require __DIR__ . '/cabecalho.php';
?>

<main class="render-page">

  <!-- TÍTULO GRANDE -->
  <section class="render-hero">
    <h1 class="render-title"><?= t('Rendering') ?></h1>
  </section>

  <!-- IMAGEM GRANDE LOGO A SEGUIR AO TÍTULO -->
  <section class="render-hero-image">
    <div class="render-hero-image-inner">
      <img src="../img/rendering_piscina.png"
           alt="<?= t('Rendering exterior') ?>">
    </div>
  </section>

  <!-- TEXTO INTRODUTÓRIO (PARÁGRAFO EM CIMA) -->
  <section class="render-intro">
    <div class="render-intro-inner">
      <p><?= t('rendering.intro') ?></p>
    </div>
  </section>

  <!-- BLOCO TEXTO + IMAGEM (SECÇÃO DE BAIXO) -->
  <section class="render-detail">
    <div class="render-detail-inner">

      <div class="render-detail-text">
        <h2><?= t('rendering.detail.title') ?></h2>
        <ul>
          <li><?= t('rendering.detail.li1') ?></li>
          <li><?= t('rendering.detail.li2') ?></li>
          <li><?= t('rendering.detail.li3') ?></li>
          <li><?= t('rendering.detail.li4') ?></li>
        </ul>
      </div>

      <div class="render-detail-image">
        <img src="../img/rendering_piscina.png"
             alt="<?= t('Rendering example') ?>">
      </div>

    </div>
  </section>

</main>

<?php require __DIR__ . '/rodape.php'; ?>
