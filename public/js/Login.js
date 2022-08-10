$(document).ready(function () {

    $("#login_form").submit(function (e) {

        let params = $(this).serialize();
        e.preventDefault();

        $.post("?ajax=userLogin", params)
            .done(function (response) {
                if (response) {
                    $(document).Toasts('create', {
                        class: 'bg-success',
                        title: 'Success',
                        subtitle: 'Subtitle',
                        body: 'Account successful Verified'
                    })

                    setTimeout(function () {
                        window.location.href = '/';
                    }, 1000)
                }
            })

            .fail(function (response) {
                let data = JSON.parse(response.responseText);
                data.error.forEach(error => {

                    $(document).Toasts('create', {
                        class: 'bg-danger',
                        title: 'Error',
                        subtitle: 'Subtitle',
                        body: error
                    })
                })
            })

    });

});