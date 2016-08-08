$(".bulb").on("click", function () {
    if ($(".bulb").hasClass("shine")) {
        $(".bulb").removeClass("shine");

    } else {
        $(".bulb").addClass("shine");
    }
});
