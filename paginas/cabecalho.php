<?php

require __DIR__ . '/idioma.php';

if (!isset($page)) {
  $page = 'index';
}

if (!isset($page_title)) {
  $page_title = '3dscan2cad';
}

// idioma atual vindo do idioma.php
$lang_current = $lang_code ?? 'en';
$lang_query   = '?lang=' . urlencode($lang_current);

// flags disponíveis
$lang_flags = [
  'en' => ['file' => 'ingles.png',    'alt' => 'English'],
  'pt' => ['file' => 'portugal.png',  'alt' => 'Português'],
  'es' => ['file' => 'espanha.png',   'alt' => 'Español'],
  'fr' => ['file' => 'franca.png',    'alt' => 'Français'],
  'it' => ['file' => 'italia.png',    'alt' => 'Italiano'],
  'de' => ['file' => 'alemanha.png',  'alt' => 'Deutsch'],
  'bg' => ['file' => 'bulgaria.png',  'alt' => 'Български'],
  'cs' => ['file' => 'chequia.png',   'alt' => 'Čeština'],
  'hr' => ['file' => 'croacia.png',   'alt' => 'Hrvatski'],
  'da' => ['file' => 'dinamarca.png', 'alt' => 'Dansk'],
  'et' => ['file' => 'estonia.png',   'alt' => 'Eesti'],
  'fi' => ['file' => 'finlandia.png', 'alt' => 'Suomi'],
  'el' => ['file' => 'grecia.png',    'alt' => 'Ελληνικά'],
  'hu' => ['file' => 'hungria.png',   'alt' => 'Magyar'],
  'ga' => ['file' => 'irlanda.png',   'alt' => 'Gaeilge'],
  'lv' => ['file' => 'letonia.png',   'alt' => 'Latviešu'],
  'lt' => ['file' => 'lituania.png',  'alt' => 'Lietuvių'],
  'mt' => ['file' => 'malta.png',     'alt' => 'Malti'],
  'nl' => ['file' => 'holanda.png',   'alt' => 'Nederlands'],
  'ro' => ['file' => 'romenia.png',   'alt' => 'Română'],
  'sk' => ['file' => 'eslovaquia.png','alt' => 'Slovenčina'],
  'sl' => ['file' => 'eslovenia.png', 'alt' => 'Slovenščina'],
  'sv' => ['file' => 'suecia.png',    'alt' => 'Svenska'],
];

$current_flag = $lang_flags[$lang_current] ?? $lang_flags['en'];
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($lang_current) ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?= isset($page) ? t('page_title_' . $page) : '3DScan2CAD' ?></title>

  <link rel="icon" type="image/png" href="../img/logo2.png">

  <!-- tipografia -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <link rel="stylesheet" href="../css/cabecalho.css">
  <link rel="stylesheet" href="../css/rodape.css">

  <link rel="stylesheet" href="../css/<?= htmlspecialchars($page) ?>.css?v=1">

  <link rel="stylesheet" href="../css/mobile.css?v=1">
  

  <?php if (file_exists(__DIR__ . "/../css/{$page}-mobile.css")): ?>
  <link rel="stylesheet" href="../css/<?= htmlspecialchars($page) ?>-mobile.css?v=1">
  <?php endif; ?>

  <!-- TABLET (global) -->
<link rel="stylesheet" href="../css/tablet.css?v=1">

<!-- TABLET específico da página (opcional, se quiseres no futuro) -->
<?php if (file_exists(__DIR__ . "/../css/{$page}-tablet.css")): ?>
  <link rel="stylesheet"
        href="../css/<?= htmlspecialchars($page) ?>-tablet.css?v=1">
<?php endif; ?>


  <link rel="stylesheet" href="../css/4k.css?v=1" media="(min-width: 2560px)">


  <?php if (file_exists(__DIR__ . "/../css/{$page}-4k.css")): ?>
  <link rel="stylesheet"
      href="../css/<?= htmlspecialchars($page) ?>-4k.css?v=<?= time() ?>"
      media="(min-width: 2560px)">
  <?php endif; ?>


</head>

<body class="page-<?= htmlspecialchars($page) ?>">


<!-- MOBILE TOPBAR (só para mobile) -->
<div class="mobile-topbar">
  <button class="mobile-menu-btn"
          type="button"
          aria-controls="primary-menu"
          aria-expanded="false">
    <i class="bi bi-list"></i>
  </button>

  <!-- logo pequeno -->
  <a class="mobile-logo" href="index.php<?= $lang_query ?>">
    <img src="../img/logo_pag.png" alt="3DScan2CAD">
  </a>

  <!-- ações do lado direito -->
   <div class="mobile-actions">
    <a class="mobile-login" href="login.php<?= $lang_query ?>">LOGIN</a>

    <!-- LANG SWITCHER (MOBILE) -->
    <div class="lang-switcher" data-current-lang="<?= htmlspecialchars($lang_current) ?>">

      <button class="lang-current" type="button">
        <img
          src="../img/<?= htmlspecialchars($current_flag['file']) ?>"
          alt="<?= htmlspecialchars($current_flag['alt']) ?>"
          class="lang-flag"
        >
        <span class="lang-code"><?= strtoupper($lang_current) ?></span>
        <span class="lang-arrow"></span>
      </button>

      <div class="lang-dropdown">
        <input
          type="text"
          class="lang-search-input"
          placeholder="Search language..."
          autocomplete="off"
        >

        <ul class="lang-menu lang-list">
          <?php foreach ($lang_flags as $code => $info): ?>
            <li>
              <a href="#" data-lang="<?= htmlspecialchars($code) ?>">
                <img
                  src="../img/<?= htmlspecialchars($info['file']) ?>"
                  alt="<?= htmlspecialchars($info['alt']) ?>"
                  class="lang-flag"
                >
                <span><?= htmlspecialchars($info['alt']) ?></span>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>

  </div>


   
  </div>
</div>


<aside class="left-rail" aria-hidden="false">
  <a class="brand" href="index.php<?= $lang_query ?>" aria-label="3DSCAN2CAD">
    <img src="../img/logo_pag.png" alt="3DSCAN2CAD">
  </a>
</aside>

<nav class="top-nav" aria-label="Primary">


  <ul id="primary-menu">
    <li>
      <a href="index.php<?= $lang_query ?>"
         class="<?= $page === 'index' ? 'active' : '' ?>">
        <?= t('HOME') ?>
      </a>
    </li>

    <li>
      <a href="servicos.php<?= $lang_query ?>"
         class="<?= $page === 'servicos' ? 'active' : '' ?>">
        <?= t('SERVICES') ?>
      </a>
    </li>

    <li>
      <a href="sobre.php<?= $lang_query ?>"
         class="<?= $page === 'sobre' ? 'active' : '' ?>">
        <?= t('ABOUT US') ?>
      </a>
    </li>

    <li>
      <a href="portfolio.php<?= $lang_query ?>"
         class="<?= $page === 'portfolio' ? 'active' : '' ?>">
        <?= t('PORTFOLIO') ?>
      </a>
    </li>

    <li>
      <a href="contactos.php<?= $lang_query ?>"
         class="<?= $page === 'contactos' ? 'active' : '' ?>">
        <?= t('CONTACT US') ?>
      </a>
    </li>


  <li class="login-item">
    <a class="login-btn" href="login.php<?= $lang_query ?>">LOGIN</a>
  </li>



    <!-- LANG DROPDOWN -->
    <li class="lang-item">
      <div class="lang-switcher" data-current-lang="<?= htmlspecialchars($lang_current) ?>">

        <!-- botão atual -->
        <button class="lang-current" type="button">
          <img
            src="../img/<?= htmlspecialchars($current_flag['file']) ?>"
            alt="<?= htmlspecialchars($current_flag['alt']) ?>"
            class="lang-flag"
          >
          <span class="lang-code"><?= strtoupper($lang_current) ?></span>
          <span class="lang-arrow"></span>
        </button>

        <!-- dropdown com pesquisa + lista com scroll -->
        <div class="lang-dropdown">
          <input
            type="text"
            class="lang-search-input"
            placeholder="Search language..."
            autocomplete="off"
          >

          <ul class="lang-menu lang-list">
            <?php foreach ($lang_flags as $code => $info): ?>
              <li>
                <a href="#" data-lang="<?= htmlspecialchars($code) ?>">
                  <img
                    src="../img/<?= htmlspecialchars($info['file']) ?>"
                    alt="<?= htmlspecialchars($info['alt']) ?>"
                    class="lang-flag"
                  >
                  <span><?= htmlspecialchars($info['alt']) ?></span>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </li>
  </ul>
</nav>
