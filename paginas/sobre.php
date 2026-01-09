<?php
$page = 'sobre';
$page_title = 'About us - 3dscan2cad';
require __DIR__ . '/cabecalho.php';
?>

<main class="about-page">

  <!-- TÍTULO ABOUT US -->
  <section class="about-hero">
    <div class="about-hero-inner">
      <h1 class="about-title"><?= t('About us') ?></h1>
    </div>
  </section>

  <!-- VIDEO HERO -->
  <section class="about-hero-video">
    <div class="about-hero-video-inner">
      <video class="about-video"
             autoplay
             muted
             loop
             playsinline>
        <source src="../video/video.mp4" type="video/mp4">
        <?= t('Your browser does not support HTML5 video.') ?>
      </video>
    </div>
  </section>

  <!-- INTRO / TEXTO INICIAL -->
  <section class="about-intro">
    <div class="about-intro-inner">
      <p><?= t('about.intro') ?></p>
    </div>
  </section>

  <!-- OUR MISSION -->
  <section class="about-block about-mission">
    <div class="about-block-inner">
      <h2 class="about-block-title"><?= t('about.mission.title') ?></h2>
      <p><?= t('about.mission.body') ?></p>
    </div>
  </section>

  <!-- IMAGEM GRANDE ENTRE OS TEXTOS -->
  <section class="about-image-block">
    <div class="about-image-inner">
      <img src="../img/About_us2.png" alt="<?= t('3DScan2CAD project') ?>">
    </div>
  </section>

  <!-- THE SOLUTION -->
  <section class="about-block about-solution">
    <div class="about-block-inner">
      <h2 class="about-block-title"><?= t('about.solution.title') ?></h2>
      <p><?= t('about.solution.body') ?></p>
    </div>
  </section>

  <section class="about-team">
    <div class="about-team-inner">
      <h2 class="about-team-title"><?= t('Meet the team') ?></h2>

      <div class="about-team-grid">
        <!-- CARD 1 -->
        <article class="team-card">
          <img src="../img/carg1.png" alt="<?= t('Team member 1') ?>">
          <h3 class="team-name">Lorem Ipsum</h3>
          <p class="team-role"><?= t('Role') ?></p>
        </article>

        <!-- CARD 2 -->
        <article class="team-card">
          <img src="../img/carg2.png" alt="<?= t('Team member 2') ?>">
          <h3 class="team-name">Lorem Ipsum</h3>
          <p class="team-role"><?= t('Role') ?></p>
        </article>

        <!-- CARD 3 -->
        <article class="team-card">
          <img src="../img/carg3.png" alt="<?= t('Team member 3') ?>">
          <h3 class="team-name">Lorem Ipsum</h3>
          <p class="team-role"><?= t('Role') ?></p>
        </article>

        <!-- CARD 4 -->
        <article class="team-card">
          <img src="../img/carg2.png" alt="<?= t('Team member 4') ?>">
          <h3 class="team-name">Lorem Ipsum</h3>
          <p class="team-role"><?= t('Role') ?></p>
        </article>

        <!-- CARD 5 -->
        <article class="team-card">
          <img src="../img/carg3.png" alt="<?= t('Team member 5') ?>">
          <h3 class="team-name">Lorem Ipsum</h3>
          <p class="team-role"><?= t('Role') ?></p>
        </article>

        <!-- CARD 6 -->
        <article class="team-card">
          <img src="../img/carg1.png" alt="<?= t('Team member 6') ?>">
          <h3 class="team-name">Lorem Ipsum</h3>
          <p class="team-role"><?= t('Role') ?></p>
        </article>
      </div>
    </div>
  </section>

</main>

<?php require __DIR__ . '/rodape.php'; ?>
