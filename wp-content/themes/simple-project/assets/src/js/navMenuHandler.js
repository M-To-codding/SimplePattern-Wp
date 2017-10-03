"use strict";

function showMenu() {
    var mainMenu = document.querySelector(".main-menu");
    mainMenu.addEventListener("click", addMenuEventListener);
}

function addMenuEventListener() {
    var menuContainer = document.querySelector(".items-container"),
        mainMenu = document.querySelector(".main-menu");

    if (menuContainer.classList.contains("active") && mainMenu.classList.contains("active")) {
        menuContainer.classList.remove("active");
        mainMenu.classList.remove("active");

    } else {
        menuContainer.classList.add("active");
        mainMenu.classList.add("active");
    }
}