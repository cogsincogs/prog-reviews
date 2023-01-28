let links = document.querySelectorAll('ul.links li');

links.forEach(link => {
    link.addEventListener('mouseenter', () => {
        link.classList.toggle('hover');
    })
    link.addEventListener('mouseleave', () => {
        link.classList.toggle('hover');
    })
})