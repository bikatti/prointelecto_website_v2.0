const ipad = window.matchMedia('screen and (max-width: 768px)');
const allScreens = window.matchMedia('screen and (min-width: 300px)');

const menuMb = document.querySelector('.m-itemContent');
const burgerButton = document.querySelector('#burger');
const burgerOutMenu = document.querySelector('#burgerOutMenu');
const burgerOutModal = document.querySelector('#burgerOutModal');
const boxShadow = document.querySelector('.o-navFixedContainer');
const bookmark = document.querySelector('#upBookmark');

// const contactButton = document.querySelector('#contact');
// const contactButton1 = document.querySelector('#contact1');
// const contactButton2 = document.querySelector('#contact2');
// const modalDialog = document.querySelector('.o-contactModal');
// const blurDialog = document.querySelector('.-blur');

ipad.addListener(validation)

function validation(event) {
    if (event.matches) {
        burgerButton.addEventListener('click', hideShow)
        burgerOutMenu.addEventListener('click', hideShow)
    }
    else {
        burgerButton.removeEventListener('click', hideShow)
        burgerOutMenu.addEventListener('click', hideShow)
    }
}

validation(ipad);

function hideShow() {
    if (menuMb.classList.contains('-isActive')) {
        menuMb.classList.remove('-isActive');
    } else {
        menuMb.classList.add('-isActive');
    }
}

// Class modal
// function modalHideShow() {
//     if (modalDialog.classList.contains('-isActive')) {
//         modalDialog.classList.remove('-isActive');
//         modalDialog.classList.remove('o-modal');
//         modalDialog.classList.remove('-open');
//         blurDialog.classList.remove('-isActive');
//     } else {
//         modalDialog.classList.add('-isActive');
//         modalDialog.classList.add('o-modal');
//         modalDialog.classList.add('-open');
//         blurDialog.classList.add('-isActive');
//     }
// }
// allScreens.addListener(validationnoMd)

// function validationnoMd(event) {
//       if (event.matches) {
//           contactButton.addEventListener('click', modalHideShow)
//           contactButton1.addEventListener('click', modalHideShow)
//           contactButton2.addEventListener('click', modalHideShow)
//           burgerOutModal.addEventListener('click', modalHideShow)
//         }
//       else {
//           contactButton.removeEventListener('click', modalHideShow)
//           contactButton1.removeEventListener('click', modalHideShow)
//           contactButton2.removeEventListener('click', modalHideShow)
//           burgerOutModal.addEventListener('click', modalHideShow)
//       }
// }
// validationnoMd(allScreens);