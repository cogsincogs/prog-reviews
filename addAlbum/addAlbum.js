const formEl = document.querySelector('.add-album');

formEl.addEventListener('submit', event => {
    event.preventDefault();

    const formData = new FormData(formEl);

    fetch('./addAlbum.php', {
        method: 'POST',
        body: formData
    }).then(result => {
        parent.document.querySelector('.add-album').reset();
        // would eventually redirect user to the album page they had just created
    })
})