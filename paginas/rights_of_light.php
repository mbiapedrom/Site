<?php
$page = 'rights_of_light';
$page_title = 'Rights of light - 3dscan2cad';
require __DIR__ . '/cabecalho.php';
?>

<main class="rights-page">

  <!-- TÍTULO GRANDE -->
  <section class="rights-hero">
    <h1 class="rights-title"><?= t('Rights of light') ?></h1>
  </section>

  <!-- IMAGEM GRANDE LOGO A SEGUIR AO TÍTULO -->
  <section class="rights-hero-image">
    <div class="rights-hero-image-inner">
      <img src="../img/service_rights.png"
           alt="<?= t('Rights of light 3D model') ?>">
    </div>
  </section>

  <!-- TEXTO INTRODUTÓRIO -->
  <section class="rights-intro">
    <div class="rights-intro-inner">
      <p>
        <?= t('rights.intro') ?>
      </p>
    </div>
  </section>

  <!-- BLOCO TEXTO + IMAGEM (SECÇÃO DE BAIXO) -->
  <section class="rights-detail">
    <div class="rights-detail-inner">

      <div class="rights-detail-text">
        <h2><?= t('rights.detail.title') ?></h2>
        <ul>
          <li><?= t('rights.detail.li1') ?></li>
          <li><?= t('rights.detail.li2') ?></li>
          <li><?= t('rights.detail.li3') ?></li>
          <li><?= t('rights.detail.li4') ?></li>
        </ul>
      </div>

      <div class="rights-detail-image">
        <img src="../img/service_rights.png"
             alt="<?= t('Rights of light 3D model') ?>">
      </div>

    </div>
  </section>
</main>

<?php require __DIR__ . '/rodape.php'; ?>
