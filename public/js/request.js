// post request method, add product
$(document).ready(function () {
    $("#add_form").submit(function (e) {

        let params = $(this).serialize();

        e.preventDefault();
        if ($('#product_id')[0]) {
            // edit request
            $.post("?ajax=editProduct", params)

                .done(function (response) {
                    $(document).Toasts('create', {
                        class: 'bg-success',
                        title: 'Success',
                        subtitle: 'Subtitle',
                        body: 'Product successful deleted'
                    })

                    // setTimeout(function () {
                    //     window.location.href = 'index.php';
                    // }, 1000)
                })

                .fail(function () {
                    $(document).Toasts('create', {
                        class: 'bg-danger',
                        title: 'Error',
                        subtitle: 'Subtitle',
                        body: 'Please fill all field'
                    })
                });

        } else {
            // product add request
            $.post("?ajax=addProduct", params)

                .done(function (response) {
                    $(document).Toasts('create', {
                        class: 'bg-success',
                        title: 'Success',
                        subtitle: 'Subtitle',
                        body: 'Product successful added'
                    })

                    setTimeout(function () {
                        window.location.href = 'index.php';
                    }, 1000)
                })

                .fail(function () {
                    $(document).Toasts('create', {
                        class: 'bg-danger',
                        title: 'Error',
                        subtitle: 'Subtitle',
                        body: 'Please fill all field'
                    })
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
        $.post("?ajax=productDelete", params)

            .done(function (response) {
                btn.parent().parent().remove();
                $(document).Toasts('create', {
                    class: 'bg-success',
                    title: 'Success',
                    subtitle: 'Subtitle',
                    body: 'Product successful deleted'
                })
            })

            .fail(function () {
                $(document).Toasts('create', {
                    class: 'bg-danger',
                    title: 'Error',
                    subtitle: 'Subtitle',
                    body: 'Something went wrong'
                })
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
            $.post("?ajax=massDelete", params)

                .done(function (response) {
                    chk_box.parent().parent().parent().parent().remove();
                    $(document).Toasts('create', {
                        class: 'bg-success',
                        title: 'Success',
                        subtitle: 'Subtitle',
                        body: 'Product successful deleted'
                    })
                })

                .fail(function () {
                    $(document).Toasts('create', {
                        class: 'bg-danger',
                        title: 'Error',
                        subtitle: 'Subtitle',
                        body: 'Something went wrong'
                    })
                });
        }
        else{
            $(document).Toasts('create', {
                class: 'bg-danger',
                title: 'Error',
                subtitle: 'Subtitle',
                body: 'Something went wrong'
            })
        }
    });

});