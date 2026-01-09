document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('.contact-form');
  if (!form) return;

  // Só os campos obrigatórios (Name e Email)
  const requiredWrappers = Array.from(
    form.querySelectorAll('.field-required')
  );

  const consent      = document.getElementById('consent');
  const consentLabel = document.querySelector('.contact-consent');

  function validateField(wrapper) {
    const input = wrapper.querySelector('input, textarea');
    if (!input) return true;

    const value = input.value.trim();

    if (!value) {
      wrapper.classList.add('error');   // ativa borda + texto
      return false;
    } else {
      wrapper.classList.remove('error');
      return true;
    }
  }

  form.addEventListener('submit', function (e) {
    let isValid = true;

    // valida Name e Email
    requiredWrappers.forEach(function (wrapper) {
      if (!validateField(wrapper)) {
        isValid = false;
      }
    });

    // valida checkbox
    if (consent && consentLabel) {
      if (!consent.checked) {
        consentLabel.classList.add('error');
        isValid = false;
      } else {
        consentLabel.classList.remove('error');
      }
    }

    if (!isValid) {
      e.preventDefault(); // não envia o form se houver erros
    }
  });

  // limpar erro quando o user começa a escrever
  requiredWrappers.forEach(function (wrapper) {
    const input = wrapper.querySelector('input, textarea');
    if (!input) return;

    input.addEventListener('input', function () {
      if (input.value.trim() !== '') {
        wrapper.classList.remove('error');
      }
    });
  });

  // limpar erro da checkbox quando se marca
  if (consent && consentLabel) {
    consent.addEventListener('change', function () {
      if (consent.checked) {
        consentLabel.classList.remove('error');
      }
    });
  }
});
