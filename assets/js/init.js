$(document).ready(function () {
    $(".navbar-burger").click(function () {
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
    });
    $(".navbar-item.has-dropdown")
        .click(function () {
            $(this).children(".navbar-dropdown").toggleClass("is-active");
        });
});