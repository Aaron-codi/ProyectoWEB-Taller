// Espera a que cargue el documento
document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('form-contacto');

  form.addEventListener('submit', (event) => {
    event.preventDefault(); 

    // cartel de confirmación
    alert('¡Mensaje enviado correctamente!');

    // Redirige al inicio después de 1 segundo
    setTimeout(() => {
      window.location.href = '../main.html';
    }, 1000);
  });
});