document.addEventListener('DOMContentLoaded', () => {
  // ✋ bloquear drag em TODAS as imagens do site
  document.querySelectorAll('img').forEach((img) => {
    img.setAttribute('draggable', 'false');
    img.addEventListener('dragstart', (e) => e.preventDefault());
  });

  // ===== LANG SWITCHER (SUPORTA DESKTOP + MOBILE) =====
  const switchers = document.querySelectorAll('.lang-switcher');
  if (switchers.length) {
    const LANG_UI = {
      en: { code: 'EN', flag: '../img/ingles.png',    label: 'English' },
      pt: { code: 'PT', flag: '../img/portugal.png',  label: 'Português' },
      es: { code: 'ES', flag: '../img/espanha.png',   label: 'Español' },
      fr: { code: 'FR', flag: '../img/franca.png',    label: 'Français' },
      it: { code: 'IT', flag: '../img/italia.png',    label: 'Italiano' },
      de: { code: 'DE', flag: '../img/alemanha.png',  label: 'Deutsch' },
      bg: { code: 'BG', flag: '../img/bulgaria.png',  label: 'Български' },
      cs: { code: 'CS', flag: '../img/chequia.png',   label: 'Čeština' },
      hr: { code: 'HR', flag: '../img/croacia.png',   label: 'Hrvatski' },
      da: { code: 'DA', flag: '../img/dinamarca.png', label: 'Dansk' },
      et: { code: 'ET', flag: '../img/estonia.png',   label: 'Eesti' },
      fi: { code: 'FI', flag: '../img/finlandia.png', label: 'Suomi' },
      el: { code: 'EL', flag: '../img/grecia.png',    label: 'Ελληνικά' },
      hu: { code: 'HU', flag: '../img/hungria.png',   label: 'Magyar' },
      ga: { code: 'GA', flag: '../img/irlanda.png',   label: 'Gaeilge' },
      lv: { code: 'LV', flag: '../img/letonia.png',   label: 'Latviešu' },
      lt: { code: 'LT', flag: '../img/lituania.png',  label: 'Lietuvių' },
      mt: { code: 'MT', flag: '../img/malta.png',     label: 'Malti' },
      nl: { code: 'NL', flag: '../img/holanda.png',   label: 'Nederlands' },
      ro: { code: 'RO', flag: '../img/romenia.png',   label: 'Română' },
      sk: { code: 'SK', flag: '../img/eslovaquia.png',label: 'Slovenčina' },
      sl: { code: 'SL', flag: '../img/eslovenia.png', label: 'Slovenščina' },
      sv: { code: 'SV', flag: '../img/suecia.png',    label: 'Svenska' }
    };

    const closeAll = () => {
      switchers.forEach(sw => sw.classList.remove('is-open'));
    };

    switchers.forEach((langSwitcher) => {
      const langButton = langSwitcher.querySelector('.lang-current') || langSwitcher;
      const options = langSwitcher.querySelectorAll('a[data-lang]');
      const langCodeEl = langButton.querySelector('.lang-code');
      const langFlagImg = langButton.querySelector('.lang-flag');
      const searchInput = langSwitcher.querySelector('.lang-search-input');

      let currentLang = langSwitcher.dataset.currentLang || 'en';

      function updateLangUI() {
        const cfg = LANG_UI[currentLang];
        if (cfg && langCodeEl && langFlagImg) {
          langCodeEl.textContent = cfg.code;
          langFlagImg.src = cfg.flag;
          langFlagImg.alt = cfg.label;
        }

        // esconder no dropdown a língua atual
        options.forEach((opt) => {
          const lang = opt.dataset.lang;
          opt.style.display = (lang === currentLang) ? 'none' : 'flex';
        });

        if (searchInput) searchInput.value = '';
      }

      // 🔎 filtro por pesquisa
      if (searchInput) {
        searchInput.addEventListener('click', (e) => e.stopPropagation());
        searchInput.addEventListener('input', () => {
          const term = searchInput.value.trim().toLowerCase();
          options.forEach((opt) => {
            const lang = opt.dataset.lang;
            const text = opt.textContent.toLowerCase();

            if (lang === currentLang) {
              opt.style.display = 'none';
              return;
            }

            opt.style.display = text.includes(term) ? 'flex' : 'none';
          });
        });
      }

      // abrir/fechar dropdown
      langButton.addEventListener('click', (e) => {
        e.preventDefault();
        e.stopPropagation();

        const isOpen = langSwitcher.classList.contains('is-open');
        closeAll();
        if (!isOpen) langSwitcher.classList.add('is-open');
      });

      // clique numa opção: muda o ?lang= e recarrega
      options.forEach((opt) => {
        opt.addEventListener('click', (e) => {
          e.preventDefault();
          const lang = opt.dataset.lang;
          if (!lang || lang === currentLang) {
            langSwitcher.classList.remove('is-open');
            return;
          }

          const url = new URL(window.location.href);
          url.searchParams.set('lang', lang);
          window.location.href = url.toString();
        });
      });

      updateLangUI();
    });

    // fechar ao clicar fora / ESC
    document.addEventListener('click', closeAll);
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeAll();
    });
  }

  // ===== MOBILE MENU (melhorado) =====
  const btn  = document.querySelector('.mobile-menu-btn');
  const nav  = document.querySelector('.top-nav');
  const menu = document.querySelector('#primary-menu');

  if (btn && nav && menu) {
    const isOpen = () => document.body.classList.contains('menu-open');

    const openMenu = () => {
      document.body.classList.add('menu-open');
      btn.setAttribute('aria-expanded', 'true');
    };

    const closeMenu = () => {
      document.body.classList.remove('menu-open');
      btn.setAttribute('aria-expanded', 'false');
    };

    btn.addEventListener('click', (e) => {
      e.stopPropagation();
      if (isOpen()) closeMenu();
      else openMenu();
    });

    menu.querySelectorAll('a').forEach((a) => {
      a.addEventListener('click', closeMenu);
    });

    document.addEventListener('click', (e) => {
      if (!isOpen()) return;

      // se clicares no dropdown de idioma, não fechar
      if (e.target.closest('.lang-switcher')) return;

      // se clicares dentro do nav/topbar, não fechar
      if (e.target.closest('.mobile-topbar') || e.target.closest('.top-nav')) return;

      closeMenu();
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && isOpen()) closeMenu();
    });
  }

    // ===== BOTÃO VOLTAR AO TOPO =====
  const btnTopo = document.getElementById("btnTopoHeader");
  if (btnTopo) {
    const header =
      document.querySelector("header") ||
      document.querySelector(".cabecalho") ||
      document.querySelector("#cabecalho") ||
      document.querySelector(".mobile-topbar"); // fallback mobile

    const getHeaderBottom = () => {
      if (!header) return 120;
      const rect = header.getBoundingClientRect();
      return window.scrollY + rect.bottom;
    };

    let headerBottomPx = getHeaderBottom();

    window.addEventListener("resize", () => {
      headerBottomPx = getHeaderBottom();
    });

    const onScrollTopo = () => {
      const passou = window.scrollY > 300;
      btnTopo.classList.toggle("show", passou);
    };

    window.addEventListener("scroll", onScrollTopo, { passive: true });
    onScrollTopo();

    btnTopo.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

});
