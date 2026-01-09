<?php
$page = 'contactos';
$page_title = 'Contact us - 3dscan2cad'; // se quiseres, depois podemos traduzir isto também
require __DIR__ . '/cabecalho.php';

$gm_lang_map = [
    'en' => 'en',    
    'pt' => 'pt',    
    'es' => 'es',    
    'fr' => 'fr',    
    'it' => 'it',    
    'ch' => 'de',   
    'nr' => 'nl',   
    'al' => 'sq',    
    'bu' => 'bg',    
    'cr' => 'hr',    
    'dn' => 'da',    
    'et' => 'et', 
    'fi' => 'fi',    
    'gr' => 'el',    
    'hu' => 'hu',    
    'ir' => 'ga',   
    'le' => 'lv',   
    'lt' => 'lt',    
    'mt' => 'mt',    
    'ro' => 'ro',   
    'sk' => 'sk',    
    'sl' => 'sl',  
    'su' => 'sv',    
];

$gm_lang = $gm_lang_map[$lang_current] ?? 'en';
?>

<main class="contact-page">

  <!-- TÍTULO -->
  <section class="contact-hero">
    <div class="contact-hero-inner">
      <h1 class="contact-title"><?= t('Contact us') ?></h1>
    </div>
  </section>

  <!-- 3 COLUNAS: PHONE / ADDRESS / EMAIL -->
  <section class="contact-info">
    <div class="contact-info-inner">

      <div class="contact-info-col">
        <h2 class="contact-info-label"><?= t('Phone') ?></h2>
        <p>
          UK: <a href="tel:+447557795968">+44 7557 795 968</a>
        </p>
        <p>Portugal: <a href="tel:+351935584011">+351 935 584 011</a>
      </p>
      </div>

      <div class="contact-info-col">
        <h2 class="contact-info-label"><?= t('Address') ?></h2>
        <p>71-75 Shelton Street, Convent Garden</p>
        <p>London, England, WC2 H9JQ</p>
      </div>

      <div class="contact-info-col">
        <h2 class="contact-info-label"><?= t('Email') ?></h2>
        <p>
          <a href="mailto:hpinto@3dscan2cad.com">hpinto@3dscan2cad.com</a>
        </p>
      </div>

    </div>
  </section>

  <section class="contact-body">
    <div class="contact-body-inner">

      <!-- FORMULÁRIO -->
      <form class="contact-form" action="#" method="post">
        
        <div class="field field-required">
          <input type="text" name="name" placeholder="<?= t('Name') ?>">
          <span class="error-msg"><?= t('This field is required.') ?></span>
        </div>

        
        <div class="field field-required">
          <input type="email" name="email" placeholder="<?= t('Email') ?>">
          <span class="error-msg"><?= t('This field is required.') ?></span>
        </div>

        <!-- OPCIONAL -->
        <div class="field field-required">
          <input type="text" name="subject" placeholder="<?= t('Subject') ?>">
          <span class="error-msg"><?= t('This field is required.') ?></span>
        </div>

        <!-- OPCIONAL -->
        <div class="field field-required">
          <textarea name="message" rows="6" placeholder="<?= t('Message') ?>"></textarea>
          <span class="error-msg"><?= t('This field is required.') ?></span>
        </div>

        <!-- OBRIGATÓRIO (checkbox) -->
        <label class="contact-consent">
          <input type="checkbox" name="consent" id="consent">
          <span>
            <?= t('I consent to having this website store my submitted information so they can respond to my inquiry.') ?>
            <span class="asterisk">*</span>
            <span class="error-msg"><?= t('This field is required.') ?></span>
          </span>
        </label>

        <button type="submit" class="contact-submit">
          <span><?= t('SEND MESSAGE') ?></span>
          <span class="arrow">➜</span>
        </button>
      </form>


      <?php
      // URL original tal como o Google deu (com pt-PT dentro do pb)
      $map_src = 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d877.842116217088!2d-0.12397565883537777!3d51.51482213475052!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876055c6e95fcc9%3A0x279f1503e0e74ece!2sTAKELEAP!5e0!3m2!1spt-PT!2sus!4v1763548431980!5m2!1spt-PT!2sus';

      // troca todas as ocorrências de pt-PT pelo idioma atual (en, es, fr, ...)
      $map_src = str_replace('pt-PT', $gm_lang, $map_src);
      ?>


      <!-- MAPA -->
      <div class="contact-map"> 
        <iframe src="<?= htmlspecialchars($map_src) ?>"
          width="600" 
          height="450" 
          style="border:0;" 
          allowfullscreen="" 
          loading="lazy" 
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    </div>
  </section>

</main>

<script src="../js/contactos.js"></script>
<?php require __DIR__ . '/rodape.php'; ?>
