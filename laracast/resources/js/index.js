require('./events');

const paragraph = document.querySelectorAll('.max-height-limitation')
const threePoint = document.createElement('span')
const linkContainer = document.getElementsByClassName('navbar-links')[0]
const links = linkContainer==undefined ? undefined:linkContainer.children


if(links!=undefined){
    for (let i = 0; i < links.length; i++) {
        links[i].addEventListener('click', function (event) {
            for (let j = 0; j < links.length; j++) {
                links[j].classList.remove('active')
            };
            event.target.classList.add('active')
        });
    }
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

function changeTabTitle(title){
    document.title=title;
}

function toggleVisibility(){
    element=document.getElementById('password');
    if(element.type=="password"){
        element.type="text";
    }else{
        element.type="password";
    }
}