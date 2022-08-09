$(document).ready(function () {

    $("#user_form").submit(function (e) {

        let params = $(this).serialize();
        e.preventDefault();

        $.post("?ajax=createUser", params)

            .done(function (response) {
                if (response) {
                    $(document).Toasts('create', {
                        class: 'bg-success',
                        title: 'Success',
                        subtitle: 'Subtitle',
                        body: 'Account successful created'
                    })
                }

            })

            .fail(function (response) {
                if (response) {

                    $(document).Toasts('create', {
                        class: 'bg-danger',
                        title: 'Error',
                        subtitle: 'Subtitle',
                        body: 'Something went wrong'
                    })
                }

            })
    });
});