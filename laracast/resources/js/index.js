const paragraph = document.querySelectorAll('.max-height-limitation')
const heightViolation = new Event('heightViolation')
const threePoint = document.createElement('span')
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

function hasTag(element, tagName) {
    let childrens = element.children;
    for (let i = 0; i < childrens.length; i++) {
        if (isSet(childrens[i].tagName)) {
            if (childrens[i].tagName.toLowerCase() == tagName) {
                return true;
            }
        }
    };
    return false;
}

function isSet(obj) {
    return (obj != null && obj != undefined) ? true : false;
}