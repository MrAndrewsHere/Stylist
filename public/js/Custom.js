$(document).ready(function () {
    $(".ordered").on("submit", function (e) {
        e.preventDefault();


        $.ajax({
            type: "POST",
            url: "/ordered",
            data: $(this).serialize(),
            success: function (result) {
                $(".message-success").css("display", "block");
            },
            error: function () {
                $(".message-error").css("display", "block");
            }
        });
    });
});
$(".add_service_to_client").on("submit", function (e) {
    e.preventDefault();

    $.ajax({
        type: "POST",
        url: "/add_service_to_client",
        data: $(this).serialize(),
        success: function () {
            $(".message-success").css("display", "block");
        },
        error: function () {
            $(".message-error").css("display", "block");
        }
    });
});
$(".btn--filter").click(function (e) {
    // e.preventDefault();
    // $(this).toggleClass("btn--filter-non-active");
});