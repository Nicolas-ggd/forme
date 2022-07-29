// post request method, add product
$(document).ready(function () {
    $("#add_form").submit(function (e) {

        let params = $(this).serialize();

        e.preventDefault();

        // edit request
        if ($('#product_id')[0]) {
            $.post("/forme/classes/editProductRequest.php", params)

                .done(function (response) {
                    $(".mob").html("<div class=\"alert alert-success\">Edited product successful updated</div>").show(1000).delay(3000).hide("slow");
                    setTimeout(function () {
                        window.location.href = '/forme/';
                    }, 1000)
                })

                .fail(function () {

                    $(".mob").html("<div class=\"alert alert-danger\">Please fill all field</div>").show(1000).delay(3000).hide("slow");
                });

        } else {
            $.post("/forme/classes/addProductRequest.php", params)

                .done(function (response) {
                    $(".mob").html("<div class=\"alert alert-success\">Product successful added</div>").show(1000).delay(3000).hide("slow");
                    setTimeout(function () {
                        window.location.href = '/forme/';
                    }, 1000)
                })

                .fail(function () {
                    $(".mob").html("<div class=\"alert alert-danger\">Please fill all field</div>").show(1000).delay(3000).hide("slow");
                });

        }

    });
});

// sweet alert, delete alert
$(document).ready(function (){
    $('.delete_form').click(function (e){
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
                $.post("/forme/classes/deleteProductRequest.php", params)

                    .done(function (response) {
                        console.log('deleted')
                        btn.parent().parent().remove()
                    })

                    .fail(function () {
                        console.log('error')
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
