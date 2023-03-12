"use strict"
const isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};
if (isMobile.any()) document.body.classList.add("_touch");
else document.body.classList.add("_pc");
let menuArrows = document.querySelectorAll(".menu__arrow");
let burger = document.querySelector(".menu__icon");
burger.addEventListener('click', showMenu);
if(menuArrows.length > 0){
    menuArrows.forEach(element => {
        element.addEventListener("click", showMenu);
    });
}
function showMenu(e){
    e.target.parentNode.classList.toggle("_active");
    document.body.classList.toggle("_lock");
    document.querySelector(".header__logo").classList.toggle("_onMenu");
}