document.addEventListener('DOMContentLoaded', function () {
  // SLIDER principal de testemunhos na home
  const slider = document.querySelector('.home-testimonials-slider');
  const slides = slider ? slider.querySelectorAll('.testimonial-slide') : null;
  const btnPrev = document.querySelector('.home-testimonials-arrow.prev');
  const btnNext = document.querySelector('.home-testimonials-arrow.next');

  if (!slider || !slides || !slides.length) {
    return; // nada encontrado
  }

  const total = slides.length;
  let currentIndex = 0;

  // função que faz o loop infinito (0 .. total-1)
  function normalizeIndex(index) {
    return ((index % total) + total) % total;
  }

  function goTo(index) {
    currentIndex = normalizeIndex(index);

    const targetX = slider.clientWidth * currentIndex;
    slider.scrollTo({
      left: targetX,
      behavior: 'smooth'
    });
  }

  // --------------------
  // SETAS (loop infinito)
  // --------------------
  if (btnPrev) {
    btnPrev.addEventListener('click', function () {
      goTo(currentIndex - 1);  // se estiver em 0, vai para o último
    });
  }

  if (btnNext) {
    btnNext.addEventListener('click', function () {
      goTo(currentIndex + 1);  // se estiver no último, volta para 0
    });
  }

  // --------------------
  // SWIPE COM RATO (drag simples com loop)
  // --------------------
  let mouseStartX = null;

  slider.addEventListener('mousedown', function (e) {
    mouseStartX = e.clientX;
    e.preventDefault();
  });

  window.addEventListener('mouseup', function (e) {
    if (mouseStartX === null) return;

    const dx = e.clientX - mouseStartX; // positivo = arrastou para a direita, negativo = esquerda
    const threshold = 50;               // mínimo de px para contar como swipe

    if (dx <= -threshold) {
      // arrastou para a esquerda → próximo (loop)
      goTo(currentIndex + 1);
    } else if (dx >= threshold) {
      // arrastou para a direita → anterior (loop)
      goTo(currentIndex - 1);
    }

    mouseStartX = null;
  });

  // --------------------
  // SWIPE TOUCH (telemóvel / tablet, também com loop)
  // --------------------
  let touchStartX = null;

  slider.addEventListener('touchstart', function (e) {
    const t = e.touches[0];
    touchStartX = t.clientX;
  }, { passive: true });

  slider.addEventListener('touchend', function (e) {
    if (touchStartX === null) return;

    const t = e.changedTouches[0];
    const dx = t.clientX - touchStartX;
    const threshold = 50;

    if (dx <= -threshold) {
      goTo(currentIndex + 1);
    } else if (dx >= threshold) {
      goTo(currentIndex - 1);
    }

    touchStartX = null;
  }, { passive: true });

  // começar no primeiro slide
  goTo(0);
});
