document.addEventListener('click', (event) => {
  if(event.target.closest('.alert')) {
    event.target.closest('.alert').remove();
  }
});