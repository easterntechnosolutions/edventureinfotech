jQuery(document).ready(function () {
    "use strict";
    var e = $("header").height();
    $(".theme-layout").css({ "padding-top": e }),
        $(".account-btn").on("click", function () {
            $(".account-popup-sec").addClass("active"), $("html").addClass("no-scroll");
        }),
        $(".close-popup").on("click", function () {
            $(".account-popup-sec").removeClass("active"), $("html").removeClass("no-scroll");
        }),
        $(window).scroll(function () {
            $(window).scrollTop() >= 50 ? $("header").addClass("sticky") : ($("header").removeClass("sticky"), $("header").addClass(""));
        }),
        $(".parallax").scroll({ bgParallax: !0 }),
        $(function () {
            $("#toggle-widget .content").hide(),
                $("#toggle-widget h2:first").addClass("active").next().slideDown("fast"),
                $("#toggle-widget h2").on("click", function () {
                    $(this).next().is(":hidden") && ($("#toggle-widget h2").removeClass("active").next().slideUp("fast"), $(this).toggleClass("active").next().slideDown("fast"));
                });
        }),
        $("#responsive-menu").on("click", function () {
            $("#site-navigation").toggle(), $("body").toggleClass("open_closed_megamnu"), $(".wp-megamenu-sub-menu").toggle(), $("#site-navigation ul ul.menu").css({ display: "none !important" });
        }),
        $(".boxed-style").on("click", function () {
            $(".theme-layout").addClass("boxed"), $("body").addClass("fixed-bg-boxed");
        }),
        $(".full-width").on("click", function () {
            $(".theme-layout").removeClass("boxed"), $("body").removeClass("fixed-bg-boxed");
        });
}),
    jQuery(document).ready(function () {
        $(".page-loading").fadeOut();
    }),
    jQuery(document).ready(function () {
        $(window).scroll(function () {
            $(this).scrollTop() > 100 ? $(".scrollup").fadeIn() : $(".scrollup").fadeOut();
        }),
            $(".scrollup").click(function () {
                return $("html, body").animate({ scrollTop: 0 }, 600), !1;
            });
    }),
    jQuery(document).ready(function (e) {
        e("#menu-website-development-btn").on("click", function (n) {
//             e("#site-navigation ul ul.menu").removeClass("open_important"),
			e("#menu-website-development").toggleClass("open_important"),
			e("#menu-website-development-btn").toggleClass("fa-caret-up fa-caret-down");
        }),
		e("#menu-mobile-app-development-btn").on("click", function (n) {
			e("#menu-mobile-app-development").toggleClass("open_important"),
			e("#menu-mobile-app-development-btn").toggleClass("fa-caret-up fa-caret-down");
		}),
		e("#menu-digital-marketing-btn").on("click", function (n) {
			e("#menu-digital-marketing").toggleClass("open_important"),
			e("#menu-digital-marketing-btn").toggleClass("fa-caret-up fa-caret-down");
		}),
		e("#menu-web-application-btn").on("click", function (n) {
			e("#menu-web-application").toggleClass("open_important"),
			e("#menu-web-application-btn").toggleClass("fa-caret-up fa-caret-down");
		}),
		e("#menu-sap-btn").on("click", function (n) {
			e("#menu-sap").toggleClass("open_important"),
			e("#menu-sap-btn").toggleClass("fa-caret-up fa-caret-down");
		});
    });
