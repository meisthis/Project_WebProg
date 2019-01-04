var prevScroll = window.pageYOffset;
window.onscroll = function() {
    var currentScroll = window.pageYOffset;
    if (prevScroll > currentScroll) {
        document.getElementsByClassName("header")[0].style.top = "0"
    } else {
        document.getElementsByClassName("header")[0].style.top = "-100px";
    }
    prevScroll = currentScroll;
}