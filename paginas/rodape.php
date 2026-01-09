<footer class="site-footer">
  <div class="footer-inner">

    <section class="footer-contact-block">
      <!-- COLUNA ESQUERDA -->
      <div class="footer-col footer-col-left">
        <p class="footer-kicker"><?= t('Contact us') ?></p>

        <h2 class="footer-title">
          <?= t('Work<br>with us') ?>
        </h2>

        <div class="footer-address">
          <p>
            71-75 Shelton Street, Convent Garden<br>
            London, England, WC2 H9JQ
          </p>

          <p>
            UK: 
            <a href="tel:+447557795968">+44 7557 795 968</a><br>
            Portugal: 
            <a href="tel:+351935584011">+351 935 584 011</a>
          </p>

          <p>
            <a href="mailto:hpinto@3dscan2cad.com">hpinto@3dscan2cad.com</a>
          </p>
        </div>
      </div>

      <!-- COLUNA DIREITA -->
      <div class="footer-col footer-col-right">
        <p>
          <?= t('Outsourcing some or all of your drawing office production to 3DSCAN2CAD gives you access to a highly flexible resource that integrates with your business and puts you in full control of the workflow.') ?>
        </p>

        <p>
          <?= t('Whether you are seeking to manage peaks and troughs in workflow more cost-effectively, or require a complete CAD project implementation, 3DSCAN2CAD is the ideal partner.') ?>
        </p>

        <a href="contactos.php<?= $lang_query ?? '' ?>" class="footer-cta">
          <span class="footer-cta-label"><?= t('CONTACT US') ?></span>
          <span class="footer-cta-arrow">→</span>
        </a>
      </div>
    </section>

    <!-- LINHA INFERIOR -->
    <section class="footer-bottom">
      <div class="footer-bottom-left">
        <div class="footer-logo">
          <img src="../img/logo.png" alt="3DSCAN2CAD" class="footer-mini-logo">
        </div>
        
        <div class="footer-legal">
        <span>
         © 2015&nbsp;
         <a href="index.php<?= $lang_query ?? '' ?>" class="footer-brand">3DSCAN2CAD</a>
         &nbsp;| <?= t('ALL RIGHTS RESERVED') ?> |
         </span>
        <a href="politica_privacidade.php<?= $lang_query ?? '' ?>" class="footer-link">
          <?= t('Privacy Policy') ?>
        </a>
      </div>
      </div>

      <div class="footer-bottom-right"></div>
      <div class="footer-design">
      <a href="https://supremexpansion.com/" target="_blank" rel="noopener">
      <img src="../img/supreme.png" alt="Empresa Supreme" class="footer-design-logo">
      </a>
      <p class="footer-design-caption"> <?= t('A Supremexpansion company') ?></p>
    </div>
    </div>
    <div class="footer-social">
      <a href="https://www.facebook.com" target="_blank" rel="noopener" class="footer-social-link">
        <i class="bi bi-facebook"></i>
      </a>
      <a href="https://www.instagram.com" target="_blank" rel="noopener" class="footer-social-link">
        <i class="bi bi-instagram"></i>
      </a>
      <a href="https://www.linkedin.com" target="_blank" rel="noopener" class="footer-social-link">
        <i class="bi bi-linkedin"></i>
      </a>
      </div>
    </section>

  </div>
</footer>

<button id="btnTopoHeader"
  class="btn-topo-header"
  type="button"
  aria-label="Voltar ao topo">
  <i class="bi bi-arrow-up"></i>
</button>

<script src="../js/cabecalho.js"></script>

</body>
</html>
