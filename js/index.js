const menuBtn = document.querySelector('.nav__hamburger');
const mainMenu = document.querySelector('.nav__list');

let menuOpen = false;


const menu = () => {
    if (!menuOpen) {
        menuBtn.classList.add('open');
        mainMenu.classList.add('open');
        menuOpen = true;
    } else {
        menuBtn.classList.remove('open');
        mainMenu.classList.remove('open');
        menuOpen = false;
    }
}

menuBtn.addEventListener('click', menu)