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

    // delete request, with popup sweet alert
    $(".delete_form").click(function (e) {
        let btn = $(this);
        let val = btn.val();

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result, confirmButtonText) => {
            if (result.isConfirmed) {

                let params = [{name: "product_id", value: val}];

                e.preventDefault();

                // delete request
                $.post("/forme/admin/app/classes/deleteProductRequest.php", params)

                    .done(function (response) {
                        btn.parent().parent().remove()
                    })

                    .fail(function () {
                        toastr.error('Something went wrong');
                    });

                toastr.success('Product successful deleted');

            }
        })
    });

    // search box filter
    $("#search_input").on("keyup", function () {
        let value = $(this).val().toLowerCase();
        $("#t_body tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});


