document.addEventListener('DOMContentLoaded', () => {

  const sliders = document.querySelectorAll('[data-slider]');
  if (!sliders.length) return;

  sliders.forEach((slider) => {
    const viewport = slider.closest('.slider-viewport') || slider.parentElement;
    const root = viewport.parentElement;

    const isProjectsSlider =
      root.classList.contains('home-projects-slider') ||
      root.classList.contains('home-projects');

    if (isProjectsSlider) {
      setupProjectsSlider(slider, viewport, root); // LATEST PROJECTS
    } else {
      setupDefaultSlider(slider, viewport, root);  // RENDERING / OUTROS
    }
  });

  /* ======================================================
     SLIDER NORMAL (rendering, hero, etc) — IGUAL AO ORIGINAL
     ====================================================== */
  function setupDefaultSlider(slider, viewport, root) {
    const slides = Array.from(slider.children);
    const dots = Array.from(root.querySelectorAll('.pagination .dot'));
    const prevBtn = root.querySelector('[data-prev]');
    const nextBtn = root.querySelector('[data-next]');

    let index = 0;
    const maxIndex = slides.length - 1;
    let startX = null;

    function goTo(i) {
      if (i < 0) index = maxIndex;
      else if (i > maxIndex) index = 0;
      else index = i;

      slider.style.transform = `translateX(-${index * 100}%)`;

      dots.forEach((dot, idx) =>
        dot.classList.toggle('is-active', idx === index)
      );
    }

    if (prevBtn) prevBtn.addEventListener('click', () => goTo(index - 1));
    if (nextBtn) nextBtn.addEventListener('click', () => goTo(index + 1));
    dots.forEach((dot, i) => dot.addEventListener('click', () => goTo(i)));

    function handleRelease(endX) {
      if (startX === null) return;

      const dx = endX - startX;
      const threshold = 50;

      if (dx > threshold) goTo(index - 1);
      else if (dx < -threshold) goTo(index + 1);
      else goTo(index);

      startX = null;
      viewport.classList.remove('is-dragging');
    }

    // mouse
    viewport.addEventListener('mousedown', (e) => {
      startX = e.clientX;
      viewport.classList.add('is-dragging');
    });

    viewport.addEventListener('mouseup', (e) => handleRelease(e.clientX));
    viewport.addEventListener('mouseleave', (e) => {
      if (startX !== null) handleRelease(e.clientX);
    });

    // touch
    viewport.addEventListener('touchstart', (e) => {
      const t = e.touches[0];
      if (!t) return;
      startX = t.clientX;
      viewport.classList.add('is-dragging');
    }, { passive: true });

    viewport.addEventListener('touchend', (e) => {
      const t = e.changedTouches[0];
      if (t) handleRelease(t.clientX);
    });

    goTo(0);
  }

  /* ======================================================
     LATEST PROJECTS — LOOP + DRAG SEGURO (SEM SALTOS)
     ====================================================== */
  function setupProjectsSlider(slider, viewport, root) {
    const captionEl = root.querySelector('.home-projects-caption');
    const prevBtn = root.querySelector('[data-prev], .case-nav.prev');
    const nextBtn = root.querySelector('[data-next], .case-nav.next');

    if (slider.dataset.bound === '1') return;
    slider.dataset.bound = '1';

    const originals = Array.from(slider.children);
    if (originals.length < 2) return;

    // clones (1x)
    if (slider.dataset.cloned !== '1') {
      slider.insertBefore(
        originals[originals.length - 1].cloneNode(true),
        slider.firstChild
      );
      slider.appendChild(originals[0].cloneNode(true));
      slider.dataset.cloned = '1';
    }

    const all = Array.from(slider.children);
    const n = originals.length;

    const DUR = 600;
    const EASE = 'cubic-bezier(.22,.8,.2,1)';

    let index = 1;
    let lock = false;

    function gapPx() {
      const cs = getComputedStyle(slider);
      return parseFloat(cs.gap || 0);
    }

    function peekPx() {
      return parseFloat(
        getComputedStyle(viewport).getPropertyValue('--peek')
      ) || 0;
    }

    function stride() {
      return all[0].offsetWidth + gapPx();
    }

    function translateForIndex(i) {
      return -(i * stride()) + peekPx() + (gapPx() / 2);
    }

    function realIndex() {
      if (index === 0) return n;
      if (index === n + 1) return 1;
      return index;
    }

    function setActive() {
      const real = realIndex();

      all.forEach((el, i) => {
        el.classList.remove('is-active', 'is-next');

        if (i === index) el.classList.add('is-active');
        if (i === index + 1 || (index === n && i === 1)) {
          el.classList.add('is-next');
        }
      });

      if (captionEl) {
        captionEl.textContent =
          originals[real - 1]?.dataset.caption || '';
      }
    }

    function goTo(i, animate = true) {
      if (lock) return;
      if (animate) lock = true;

      if (animate) root.classList.add('is-sliding');

      index = i;
      slider.style.transition = animate
        ? `transform ${DUR}ms ${EASE}`
        : 'none';

      slider.style.transform =
        `translate3d(${translateForIndex(index)}px,0,0)`;

      setActive();
    }

    function next() { goTo(index + 1); }
    function prev() { goTo(index - 1); }

    slider.addEventListener('transitionend', () => {
      if (index === n + 1) {
        index = 1;
        slider.style.transition = 'none';
        slider.style.transform =
          `translate3d(${translateForIndex(index)}px,0,0)`;
      }

      if (index === 0) {
        index = n;
        slider.style.transition = 'none';
        slider.style.transform =
          `translate3d(${translateForIndex(index)}px,0,0)`;
      }

      setActive();
      root.classList.remove('is-sliding');
      lock = false;
    });

    if (prevBtn) prevBtn.addEventListener('click', prev);
    if (nextBtn) nextBtn.addEventListener('click', next);

    /* ========= DRAG SIMPLES (igual às setas) ========= */
    let dragStartX = null;

    viewport.addEventListener('mousedown', (e) => {
      dragStartX = e.clientX;
      viewport.classList.add('is-dragging');
    });

    viewport.addEventListener('mouseup', (e) => {
      if (dragStartX === null) return;

      const dx = e.clientX - dragStartX;
      const threshold = viewport.offsetWidth * 0.15;

      if (dx > threshold) prev();
      else if (dx < -threshold) next();

      dragStartX = null;
      viewport.classList.remove('is-dragging');
    });

    viewport.addEventListener('mouseleave', () => {
      dragStartX = null;
      viewport.classList.remove('is-dragging');
    });

    // touch
    viewport.addEventListener('touchstart', (e) => {
      const t = e.touches[0];
      if (!t) return;
      dragStartX = t.clientX;
      viewport.classList.add('is-dragging');
    }, { passive: true });

    viewport.addEventListener('touchend', (e) => {
      const t = e.changedTouches[0];
      if (!t || dragStartX === null) return;

      const dx = t.clientX - dragStartX;
      const threshold = viewport.offsetWidth * 0.15;

      if (dx > threshold) prev();
      else if (dx < -threshold) next();

      dragStartX = null;
      viewport.classList.remove('is-dragging');
    });

    /* init */
    goTo(1, false);

    window.addEventListener('resize', () => {
      goTo(realIndex(), false);
    });
  }

  /* ======================================================
     HERO ARROW — SCROLL SUAVE (ORIGINAL)
     ====================================================== */
  const heroArrows = document.querySelectorAll('.hero-slider .caption .arrow');

  heroArrows.forEach((arrow) => {
    arrow.addEventListener('click', (e) => {
      e.preventDefault();
      const target = document.querySelector('#home-about');
      if (!target) return;
      smoothScrollTo(target, 1000);
    });
  });

  function smoothScrollTo(targetElement, duration) {
    const startY = window.scrollY;
    const targetY = startY + targetElement.getBoundingClientRect().top;
    const startTime = performance.now();

    function ease(t) {
      return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
    }

    function step(now) {
      const p = Math.min((now - startTime) / duration, 1);
      window.scrollTo(
        0,
        startY + (targetY - startY) * ease(p)
      );
      if (p < 1) requestAnimationFrame(step);
    }

    requestAnimationFrame(step);
  }

});
