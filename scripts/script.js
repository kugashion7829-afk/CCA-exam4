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

const exhibits = document.querySelectorAll('#photographSection .exhibit');
const lightObserver = new IntersectionObserver(function(entries){
    entries.forEach(function (entry) {
        if (entry.isIntersecting) {
            entry.target.classList.add('isLit');
            lightObserver.unobserve(entry.target);
        };
    });
},{
    rootMargin: '0px 0px -500px 0px'
}
);

exhibits.forEach(function (exhibit) {
    lightObserver.observe(exhibit);
});

const imageModal = document.querySelector('.imageModal');
const modalImage = document.querySelector('.modalImage');
const modalTrigger = document.querySelectorAll('.modalTrigger');
const modalExTrigger = document.querySelectorAll('.modalExTrigger');

if (imageModal && modalImage) {
    modalTrigger.forEach(function (trigger) {
            trigger.addEventListener('click', function () {
            console.log('画像をクリックしました');

            modalImage.src = trigger.src;
            modalImage.alt = trigger.alt;
            if (modalCaption) {
                modalCaption.textContent = '';
            }
            imageModal.showModal();
        });
    });
}

const modalClose = document.querySelector('.modalclose');

if (imageModal && modalClose) {
    modalClose.addEventListener('click', function(){
        imageModal.close();
    });
}

if (imageModal) {
    imageModal.addEventListener('click', function (event) {
        const rect = imageModal.getBoundingClientRect();
        if (
            event.clientX < rect.left ||
            event.clientX > rect.right ||
            event.clientY < rect.top ||
            event.clientY > rect.bottom 
        ) {
            imageModal.close();
        };
    });
}

const modalCaption = document.querySelector('.modalCaption');

if (imageModal && modalImage && modalCaption) {
    modalExTrigger.forEach(function (trigger) {
        trigger.addEventListener('click', function () {
            const caption = trigger.closest('.photoWrap').querySelector('h2');

            modalImage.src = trigger.src;
            modalImage.alt = trigger.alt;
            modalCaption.textContent = caption.textContent;

            imageModal.showModal();
        });
    });
}