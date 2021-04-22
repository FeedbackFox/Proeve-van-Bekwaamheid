const menuBtn = document.querySelector('.icon');
const menuImg = document.querySelector('.logo');
const menuLinks = document.querySelector('.links');
const menuNav = document.querySelector('.topnav');
let menuOpen = false;
menuBtn.addEventListener('click', () => {
    if (!menuOpen) {
        menuBtn.classList.add('open');
        menuImg.classList.add('open');
        menuNav.classList.add('open');
        menuLinks.classList.add('open');
        menuOpen = true;
    } else {
        menuBtn.classList.remove('open');
        menuImg.classList.remove('open');
        menuNav.classList.remove('open');
        menuLinks.classList.remove('open');
        menuOpen = false
    }
});


var slideIndex = 0;
// showDivs(slideIndex);
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("slide");
    var dots = document.getElementsByClassName("demo");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" slide-solid-dot", "");
    }
    slideIndex++;
    if (slideIndex > x.length) { slideIndex = 1 }
    x[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " slide-solid-dot";
    setTimeout(carousel, 5000);
}