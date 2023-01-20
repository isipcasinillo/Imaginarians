
document.addEventListener('DOMContentLoaded', function() {
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
    if (window.pageYOffset > 0 && window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }
    }

})



// toggling minibar
document.addEventListener('DOMContentLoaded', function() {
    var minibar = document.getElementById("minibar-icon");
    var minibarContainer = document.getElementById("minibar");
    var isHidden = minibarContainer.classList.contains("hidden")


    function togglenav() {
        minibarContainer.classList.toggle("hidden");
    }

    function removenav() {
        if(screen.width >= 900 && isHidden ) {
            minibarContainer.classList.add("hidden");
        }
    }

    window.addEventListener("resize", removenav)
    minibar.addEventListener("click", togglenav);

})

