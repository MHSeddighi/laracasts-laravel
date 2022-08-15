
const linkContainer = document.getElementsByClassName('navbar-links')[0]
const links = linkContainer.children
for (let i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function (event) {
        for (let j = 0; j < links.length; j++) {
            links[j].classList.remove('active')
        };
        event.target.classList.add('active')
    });
}

