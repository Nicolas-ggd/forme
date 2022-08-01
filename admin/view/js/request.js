// post request method, add product
$(document).ready(function () {
    $("#add_form").submit(function (e) {

        let params = $(this).serialize();

        e.preventDefault();

        if ($('#product_id')[0]) {
            // edit request
            $.post("/forme/admin/app/classes/editProductRequest.php", params)

                .done(function (response) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Edited Product succesful updated',
                        showConfirmButton: false,
                    })

                    setTimeout(function () {
                        window.location.href = '/forme/admin/app/';
                    }, 1000)
                })

                .fail(function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Something went wrong!',
                        text: 'Please fill all field',
                    })
                });

        } else {
            // product add request
            $.post("/forme/admin/app/classes/addProductRequest.php", params)

                .done(function (response) {
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Product succesful added',
                        showConfirmButton: false,
                    })

                    setTimeout(function () {
                        window.location.href = '/forme/admin/app/';
                    }, 1000)
                })

                .fail(function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Something went wrong!',
                        text: 'Please fill all field',
                    })
                });

        }

    });
});

// sweet alert, delete alert
$(document).ready(function (){
    $(".delete_form").click(function (e){
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

                let params = [{name:"product_id", value:val}];

                e.preventDefault();

                // delete request
                $.post("/forme/admin/app/classes/deleteProductRequest.php", params)

                    .done(function (response) {
                        btn.parent().parent().remove()
                    })

                    .fail(function () {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!',
                        })
                    });

                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    });
});

// search box
$(document).ready(function (){
    $("#search").on("keyup", function (){
       let value = $(this).val().toLowerCase();
       $("#tatbody tr ").filter(function (){
           $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
       });
    });
});