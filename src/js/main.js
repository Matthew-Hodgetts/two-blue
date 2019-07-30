import './featherlight';

$("document").ready(() => {

    if ($("body").hasClass("page-template-page-home")) {
        new fullpage('#fullpageHome', {
            licenseKey: '0C39A97C-ABF04D7A-8564CE11-E3142A4B',
            onLeave: function (origin, destination, direction) {
                switch (destination.index) {
                    case 0:
                        addDarkClass();
                        break;
                    case 1:
                        addLightClass();
                        break;
                    case 2:
                        addDarkClass();
                        break;
                    case 3:
                        addLightClass();
                        break;
                    case 5:
                        addLightClass();
                        break;
                    case 7:
                        addLightClass();
                        break;
                    default:
                        // code block
                }
            },
            normalScrollElements: '#header'
        });
    }
    if ($("body").hasClass("page-template-page-wwd") || $("body").hasClass("page-template-page-people") || $("body").hasClass("page-template-page-clients")) {
        new fullpage('#fullpageOther', {
            licenseKey: '0C39A97C-ABF04D7A-8564CE11-E3142A4B',
            onLeave: function (origin, destination, direction) {
                switch (destination.index) {
                    case 0:
                        addDarkClass();
                        break;
                    case 1:
                        addLightClass();
                        break;
                    default:
                        // code block
                }
            },
            normalScrollElements: '#header'
        });
    }

    var addLightClass = function () {
        setTimeout(function () {
            $("#header.header__home").removeClass("header__home--dark");
            $("#header.header__home").addClass("header__home--light");
        }, 500)
    }
    var addDarkClass = function () {
        setTimeout(function () {
            $("#header.header__home").removeClass("header__home--light");
            $("#header.header__home").addClass("header__home--dark");
        }, 500)
    }

    let moveBetweenSlides = true;
    $("button.hamburger").on("click", function () {
        console.log("transitioning menu")
        moveBetweenSlides = !moveBetweenSlides;
        $("button.hamburger").toggleClass("is-active");
        $("#menuHome").toggleClass("is-active");
        fullpage_api.setAllowScrolling(moveBetweenSlides);
    });


    $(".arrow-down").on("click", function () {
        fullpage_api.moveSectionDown();
        $(this).css("display", "none");
    });

    $(".menu-item.one").on("click", function (e) {
        e.preventDefault();
        fullpage_api.setAllowScrolling(true);
        fullpage_api.moveTo(1);
        $("#menuHome, button.hamburger").removeClass("is-active");
    });

    $(".menu-item.one").on("click", function (e) {
        e.preventDefault();
        fullpage_api.setAllowScrolling(true);
        fullpage_api.moveTo(1);
        $("#menuHome, button.hamburger").removeClass("is-active");
    });

    $(".menu-item.two").on("click", function (e) {
        e.preventDefault();
        fullpage_api.setAllowScrolling(true);
        fullpage_api.moveTo(4);
        $("#menuHome, button.hamburger").removeClass("is-active");
    });

    $(".menu-item.three").on("click", function (e) {
        e.preventDefault();
        fullpage_api.setAllowScrolling(true);
        fullpage_api.moveTo(5);
        $("#menuHome, button.hamburger").removeClass("is-active");
    });

    $(".menu-item.four").on("click", function (e) {
        e.preventDefault();
        fullpage_api.setAllowScrolling(true);
        fullpage_api.moveTo(6);
        $("#menuHome, button.hamburger").removeClass("is-active");
    });
    $(".menu-item.five").on("click", function (e) {
        e.preventDefault();
        fullpage_api.setAllowScrolling(true);
        fullpage_api.moveTo(7);
        $("#menuHome, button.hamburger").removeClass("is-active");
    });
    $(".menu-item.six").on("click", function (e) {
        e.preventDefault();
        fullpage_api.setAllowScrolling(true);
        fullpage_api.moveTo(8);
        $("#menuHome, button.hamburger").removeClass("is-active");
    });



});