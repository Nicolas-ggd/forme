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

                    setTimeout(function () {
                        window.location.href = '?action=login';
                    }, 2000)
                }

            })

            .fail(function (response) {
                if (response) {
                    let data = JSON.parse(response.responseText);
                    data.error.forEach(error => {

                        $(document).Toasts('create', {
                            class: 'bg-danger',
                            title: 'Error',
                            subtitle: 'Subtitle',
                            body: error
                        })
                    })

                }

            })
    });
});