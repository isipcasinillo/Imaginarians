
document.addEventListener('DOMContentLoaded', function() {
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        console.log(window.pageYOffset)
    if (window.pageYOffset > 0 && window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
    }

})