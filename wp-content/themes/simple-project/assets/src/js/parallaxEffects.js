window.onscroll = function () {
    var scrolledNumber = window.pageYOffset || document.documentElement.scrollTop;
    var mainContent = document.querySelector('.body-bg');

    if (scrolledNumber > 300) {
        mainContent.classList.add('content-bg');
    } else {
        mainContent.classList.remove('content-bg');
    }
}