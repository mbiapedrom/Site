<?php
$page = 'politica_privacidade';
require __DIR__ . '/cabecalho.php';
?>

<main class="privacy-page">

  <!-- TÍTULO PRINCIPAL -->
  <section class="privacy-hero">
    <div class="privacy-hero-inner">
      <h1 class="privacy-title"><?= t('Privacy Policy') ?></h1>
    </div>
  </section>

  <!-- CONTEÚDO DA POLÍTICA -->
  <section class="privacy-content">
    <div class="privacy-inner">

      <!-- WHO WE ARE -->
      <h2><?= t('privacy.who_we_are') ?></h2>
      <p><?= t('privacy.who_we_are.p1') ?></p>

      <!-- COMMENTS -->
      <h2><?= t('privacy.comments') ?></h2>
      <p><?= t('privacy.comments.p1') ?></p>
      <p><?= t('privacy.comments.p2') ?></p>

      <!-- MEDIA -->
      <h2><?= t('privacy.media') ?></h2>
      <p><?= t('privacy.media.p1') ?></p>

      <!-- COOKIES -->
      <h2><?= t('privacy.cookies') ?></h2>
      <p><?= t('privacy.cookies.p1') ?></p>
      <p><?= t('privacy.cookies.p2') ?></p>
      <p><?= t('privacy.cookies.p3') ?></p>
      <p><?= t('privacy.cookies.p4') ?></p>

      <!-- EMBEDDED CONTENT -->
      <h2><?= t('privacy.embedded') ?></h2>
      <p><?= t('privacy.embedded.p1') ?></p>
      <p><?= t('privacy.embedded.p2') ?></p>

      <!-- WHO WE SHARE YOUR DATA WITH -->
      <h2><?= t('privacy.share_data') ?></h2>
      <p><?= t('privacy.share_data.p1') ?></p>

      <!-- HOW LONG WE RETAIN YOUR DATA -->
      <h2><?= t('privacy.retention') ?></h2>
      <p><?= t('privacy.retention.p1') ?></p>
      <p><?= t('privacy.retention.p2') ?></p>

      <!-- YOUR RIGHTS -->
      <h2><?= t('privacy.your_rights') ?></h2>
      <p><?= t('privacy.your_rights.p1') ?></p>

      <!-- WHERE WE SEND YOUR DATA -->
      <h2><?= t('privacy.where_send') ?></h2>

      
      <p><?= t('privacy.where_send.p1') ?></p>

    </div>
  </section>

</main>

<?php require __DIR__ . '/rodape.php'; ?>
