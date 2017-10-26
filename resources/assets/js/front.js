$(function () {
    if (window.location.href.indexOf("register") > -1) {
        $(".active").removeClass("active");
        $(".collapse ul:first-child li:nth-child(4)").addClass("active");
    } else if (window.location.href.indexOf("login") > -1) {
        $(".active").removeClass("active");
        $(".collapse ul:first-child li:nth-child(3)").addClass("active");
    } else if (window.location.href.indexOf("blog") > -1) {
        $(".active").removeClass("active");
        $(".collapse ul:first-child li:nth-child(2)").addClass("active");
    } else {
        $(".active").removeClass("active");
        $(".collapse ul:first-child li:nth-child(1)").addClass("active");
    }

    $("#message").fadeIn(1000);
    $("#message div").fadeIn(1000).animate({
        top: "20vh"
    }, 1000);

    $("#message div button").on("click", function () {
        $("#message").fadeOut(1000);
    });
});
