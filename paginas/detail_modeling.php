<?php
$page = 'detail_modeling';              
$page_title = '3D Detail Modeling - 3dscan2cad';
require __DIR__ . '/cabecalho.php';
?>

<main class="detail-page">

  <!-- TÍTULO GRANDE -->
  <section class="detail-hero">
    <h1 class="detail-title"><?= t('3D Detail Modeling') ?></h1>
  </section>

  <!-- IMAGEM GRANDE LOGO A SEGUIR AO TÍTULO -->
  <section class="detail-hero-image">
    <div class="detail-hero-image-inner">
      <img src="../img/detail_modeling.png"
           alt="<?= t('3D Detail Modeling') ?>">
    </div>
  </section>

  <!-- TEXTO INTRODUTÓRIO (PARÁGRAFO EM CIMA) -->
  <section class="detail-intro">
    <div class="detail-intro-inner">
      <p><?= t('detail.intro') ?></p>
    </div>
  </section>

  <!-- BLOCO TEXTO + IMAGEM (SECÇÃO DE BAIXO) -->
  <section class="detail-detail">
    <div class="detail-detail-inner">

      <div class="detail-detail-text">
        <h2><?= t('detail.detail.title') ?></h2>
        <ul>
          <li><?= t('detail.detail.li1') ?></li>
          <li><?= t('detail.detail.li2') ?></li>
          <li><?= t('detail.detail.li3') ?></li>
          <li><?= t('detail.detail.li4') ?></li>
        </ul>
      </div>

      <div class="detail-detail-image">
        <img src="../img/detail_modeling.png"
             alt="<?= t('3D Detail Modeling example') ?>">
      </div>

    </div>
  </section>

</main>

<?php require __DIR__ . '/rodape.php'; ?>
