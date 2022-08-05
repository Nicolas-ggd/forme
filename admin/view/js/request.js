// post request method, add product
$(document).ready(function () {
    $("#add_form").submit(function (e) {

        let params = $(this).serialize();

        e.preventDefault();

        if ($('#product_id')[0]) {
            // edit request
            $.post("/forme/admin/app/classes/editProductRequest.php", params)

                .done(function (response) {
                    toastr.success('Edited product successful updated');

                    setTimeout(function () {
                        window.location.href = '/forme/admin/view/';
                    }, 1000)
                })

                .fail(function () {
                    toastr.error('Please fill all field');
                });

        } else {
            // product add request
            $.post("/forme/admin/app/classes/addProductRequest.php", params)

                .done(function (response) {
                    toastr.success('Product successful added');
                    setTimeout(function () {
                        window.location.href = '/forme/admin/view/';
                    }, 1000)
                })

                .fail(function () {
                    toastr.error('Please fill all field')
                });

        }

    });

    // click delete button to transform confirm button
    $(".delete_form").click(function () {

        let confirmBtn = $(this).parent().find(".confirm")
        $(this).hide();
        confirmBtn.removeClass("d-none").show();
        confirmBtn.focus();

    });

    $(".confirm").focusout(function () {
        let confirmBtn = $(this).parent().find(".delete_form")
        $(this).hide();
        confirmBtn.removeClass("d-none").show();
    })

    $(".confirm").click(function (e) {

        let btn = $(this);
        let val = btn.val();

        let params = [{name: "product_id", value: val}];

        e.preventDefault();

        // delete request
        $.post("/forme/admin/app/classes/deleteProductRequest.php", params)

            .done(function (response) {
                btn.parent().parent().remove();
                toastr.success('Product successful deleted');
            })

            .fail(function () {
                toastr.error('Something went wrong');
            });

    });


    // mass delete

    $(".mass").click(function () {

        let confirmBtn = $(this).parent().find(".mass_delete")
        $(this).hide();
        confirmBtn.removeClass("d-none").show();
        confirmBtn.focus();

    });

    $(".mass_delete").focusout(function () {
        let confirmBtn = $(this).parent().find(".mass")
        $(this).hide();
        confirmBtn.removeClass("d-none").show();
    })

    $(".mass_delete").click(function () {

        let params = $("#table_form").serialize();

        let chk_box = $(".check_box:checked");

        if (chk_box){

            // mass delete request
            $.post("/forme/admin/app/classes/massDeleteFunction.php", params)

                .done(function (response) {
                    chk_box.parent().parent().parent().parent().remove();
                    toastr.success('Product successful deleted');
                })

                .fail(function () {
                    toastr.error('Something went wrong');
                });
        }
        else{
            toastr.error('Something went wrong');
        }
    });

});