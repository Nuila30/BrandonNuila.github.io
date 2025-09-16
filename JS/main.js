// Animación al hacer scroll
function animateOnScroll() {
    const elements = document.querySelectorAll('.fade-in, .slide-up');
    const triggerBottom = window.innerHeight * 0.8;
  
    elements.forEach(el => {
      const boxTop = el.getBoundingClientRect().top;
  
      if (boxTop < triggerBottom) {
        el.classList.add('visible');
      }
    });
  }
  window.addEventListener('scroll', animateOnScroll);
  window.addEventListener('load', animateOnScroll);
  
  // SweetAlert2 para formulario
  document.getElementById('contactForm').addEventListener('submit', function(e){
    e.preventDefault();
  
    let form = this;
    let formData = new FormData(form);
  
    fetch(form.action, {
      method: 'POST',
      body: formData
    })
    .then(res => res.json())
    .then(data => {
      if(data.status === 'success'){
        Swal.fire({
          icon: 'success',
          title: '¡Mensaje enviado!',
          text: 'Gracias por contactarme, te responderé pronto.',
          timer: 2500,
          showConfirmButton: false
        });
        form.reset();
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Error',
          text: data.message
        });
      }
    })
    .catch(err => {
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'No se pudo enviar el mensaje.'
      });
    });
  });
  // Modal para imágenes de proyectos
const modal = document.getElementById('imgModal');
const modalImg = document.getElementById('modalImg');
const captionText = document.getElementById('caption');
const closeBtn = document.getElementsByClassName('close')[0];

document.querySelectorAll('.clickable-img').forEach(img => {
  img.addEventListener('click', function() {
    modal.style.display = 'block';
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
  });
});

closeBtn.onclick = function() {
  modal.style.display = 'none';
}

window.onclick = function(event) {
  if (event.target === modal) {
    modal.style.display = 'none';
  }
}
