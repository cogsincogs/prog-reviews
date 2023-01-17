const formEl = document.querySelector('.contact');

formEl.addEventListener('submit', event => {
    event.preventDefault();

    const formData = new FormData(formEl);

    fetch('./contact.php', {
        method: 'POST',
        body: formData
    }).then(result => {
        parent.document.querySelector('.contact').reset();
        console.log(result);
    })
})