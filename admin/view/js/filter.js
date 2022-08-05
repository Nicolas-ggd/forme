// search box filter
$("#search_input").on("keyup", function () {
    let value = $(this).val().toUpperCase();
    $("#t_body tr").filter(function () {
        $(this).toggle($(this).text().toUpperCase().indexOf(value) > -1)
    });
});