
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    var header = document.getElementById("header");
    var navbar = document.getElementById("navbar");
    var sticky = header.offsetTop + header.offsetHeight;

    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}
