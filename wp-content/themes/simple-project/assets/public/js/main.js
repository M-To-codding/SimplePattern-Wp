"use strict";

function showMenu() {
    var mainMenu = document.querySelector(".main-menu");
    mainMenu.addEventListener("click", addMenuEventListener);
}

function addMenuEventListener() {
    var activeClassName = "active";

    var menuContainer = document.querySelector(".items-container"),
        mainMenu = document.querySelector(".main-menu");

    var items = [menuContainer, mainMenu];

    if (allHasClass(items, activeClassName)) {
        removeFromAll(items, activeClassName)
    } else {
        addToAll(items, activeClassName)
    }
}

function allHasClass(items, className) {
    for (var i = 0; i < items.length; i++) {
        if (!items[i].classList.contains(className))
            return false;
    }
    return true;
}

function removeFromAll(items, className) {
    for (var i = 0; i < items.length; i++) {
        items[i].classList.remove(className);
    }
}

function addToAll(items, className) {
    for (var i = 0; i < items.length; i++) {
        items[i].classList.add(className);
    }
}

window.onscroll = function () {
    var scrolledNumber = window.pageYOffset || document.documentElement.scrollTop;
    var mainContent = document.querySelector('.body-bg');

    if (scrolledNumber > 300) {
        mainContent.classList.add('content-bg');
    } else {
        mainContent.classList.remove('content-bg');
    }
}