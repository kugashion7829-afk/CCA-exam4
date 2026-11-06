'use strict'

const openButton = document.querySelector('.open');
const closeButton = document.querySelector('.close');
const menu = document.querySelector('.linkWrap');

openButton.addEventListener('click', function () {
    if (menu.classList.contains('hidding')) {
        openButton.classList.toggle('invisible');

        menu.classList.replace('hidding', 'show');

        menu.addEventListener('transitionend', function () {
            menu.classList.replace('show', 'showing');
        }, { once: true });

        closeButton.classList.toggle('invisible');
    }
});

function closeMenu() {
    if (!menu.classList.contains('showing')) return;

    closeButton.classList.add('invisible');
    openButton.classList.remove('invisible');

    menu.classList.replace('showing', 'hide');

    menu.addEventListener('transitionend', function () {
        menu.classList.replace('hide', 'hidding');
    }, { once: true });
}

closeButton.addEventListener('click', closeMenu);

document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') closeMenu();
});

document.addEventListener('click', function (event) {
    if (menu.contains(event.target)) return;
    if (event.target.closest('.headerMenu')) return;

    closeMenu();
});