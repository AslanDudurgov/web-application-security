const form = document.querySelector('form');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const name = document.querySelector('input[name="name"]').value;

  const escapedName = name.replace(/</g, '&lt;').replace(/>/g, '&gt;');

  form.querySelector('input[name="name"]').value = escapedName;
  form.submit();
});