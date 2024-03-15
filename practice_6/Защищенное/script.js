const form = document.querySelector('form');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const name = document.querySelector('input[name="name"]').value;

  if (name.includes('<') || name.includes('>')) {
    alert('Обнаружена XSS-уязвимость!');
  } else {
    
  }
});