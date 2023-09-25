const form = document.getElementById('form');
const error = document.getElementById('error');

function send(e) {
  e.preventDefault();
  const formData = new FormData(form);
  const xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      console.log('Successfully!');
    }
  };

  xhttp.open('POST', 'php/send.php', true);
  xhttp.send(formData);
  error.classList.remove('non-visible');
}

function start() {
  form.addEventListener('submit', send);

  setTimeout(() => {
    error.classList.add('non-visible');
  }, 10000);
}

start();
