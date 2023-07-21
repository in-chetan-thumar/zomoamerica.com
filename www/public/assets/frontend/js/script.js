var swiper = new Swiper(".thumb-slider", {
    freeMode: true,
    speed: 1000,
    watchSlidesProgress: true,
    slidesPerView: 2,
    spaceBetween: 15,
});

var swiper2 = new Swiper(".product-slider-sub", {
    spaceBetween: 20,
    slidesPerView: 1,
    speed: 1000,
    thumbs: {
        swiper: swiper,
    },
});

$(".history-slider").owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    animateOut: "fadeOut",
    items: 1,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
});

$(window).on("load", function () {
    $("#bouncer_modal").modal({
        fadeDuration: 200,
        escapeClose: false,
        clickClose: false,
        showClose: false,
    });
});

const navbarMenu = document.getElementById("navbar");
const burgerMenu = document.getElementById("burger");
const overlayMenu = document.querySelector(".overlay");

// Show and Hide Navbar Function
const toggleMenu = () => {
    navbarMenu.classList.toggle("active");
    overlayMenu.classList.toggle("active");
};

// Collapsible Mobile Submenu Function
const collapseSubMenu = () => {
    navbarMenu
        .querySelector(".menu-dropdown.active .submenu")
        .removeAttribute("style");
    navbarMenu
        .querySelector(".menu-dropdown.active")
        .classList.remove("active");
};

// Toggle Mobile Submenu Function
const toggleSubMenu = (e) => {
    if (e.target.hasAttribute("data-toggle") && window.innerWidth <= 992) {
        e.preventDefault();
        const menuDropdown = e.target.parentElement;

        // If Dropdown is Expanded, then Collapse It
        if (menuDropdown.classList.contains("active")) {
            collapseSubMenu();
        } else {
            // Collapse Existing Expanded Dropdown
            if (navbarMenu.querySelector(".menu-dropdown.active")) {
                collapseSubMenu();
            }

            // Expanded the New Dropdown
            menuDropdown.classList.add("active");
            const subMenu = menuDropdown.querySelector(".submenu");
            subMenu.style.maxHeight = subMenu.scrollHeight + "px";
        }
    }
};

// Fixed Resize Window Function
const resizeWindow = () => {
    if (window.innerWidth > 1024) {
        if (navbarMenu.classList.contains("active")) {
            toggleMenu();
        }
        if (navbarMenu.querySelector(".menu-dropdown.active")) {
            collapseSubMenu();
        }
    }
};

$(window).scroll(function () {
    if ($(this).scrollTop() > 120) {
        $(".header").addClass("sticky");
    } else {
        $(".header").removeClass("sticky");
    }
    if ($(this).scrollTop() > 120) {
        $(".header").addClass("sticky");
    } else {
        $(".header").removeClass("sticky");
    }
});

// Initialize Event Listeners
burgerMenu.addEventListener("click", toggleMenu);
overlayMenu.addEventListener("click", toggleMenu);
navbarMenu.addEventListener("click", toggleSubMenu);
window.addEventListener("resize", resizeWindow);

$(".home-banner").owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    animateOut: "fadeOut",
    items: 1,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
});

$(".product-slider-in").owlCarousel({
    loop: true,
    margin: 80,
    nav: true,
    dots: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
            margin: 50,
        },
        1000: {
            items: 3,
            margin: 60,
        },
    },
});

$(document).ready(function () {
    var stopAutohide;

    function showWindow() {
        $(".blocker").show();
        // stop scroll
        $("html .home").css("overflow", "hidden");
        stopAutohide = setTimeout(hideWindow, 5000);
    }
    //showWindow()

    function hideWindow() {
        $(".blocker").hide();
        $("html .home").css("overflow", "scroll");
    }

    setTimeout(showWindow, 2000);

    $(".close").click(function () {
        hideWindow();
        celarTimeout(stopAutohide);
    });
});

function reveal() {
    for (
        var e = document.querySelectorAll(".reveal"), s = 0;
        s < e.length;
        s++
    ) {
        var o,
            r = window.innerHeight;
        e[s].getBoundingClientRect().top < r - 150
            ? e[s].classList.add("active")
            : e[s].classList.remove("active");
    }
}

window.addEventListener("scroll", reveal);
