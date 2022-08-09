<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/public/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="/public/dist/css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="/public/lib/suite_gpl/codebase/suite.css">
    <link rel="stylesheet" href="/public/plugins/fontawesome-free/css/all.min.css">

    <script src="/public/plugins/jquery/jquery.min.js"></script>
    <script src="/public/lib/CodeSeven-toastr-2.1.4-7-g50092cc/CodeSeven-toastr-50092cc/toastr.js"></script>
    <script src="/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/public/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/public/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/public/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/public/plugins/jszip/jszip.min.js"></script>
    <script src="/public/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/public/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/public/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/public/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/public/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script src="/public/dist/js/adminlte.min.js?v=3.2.0"></script>
    <script src="/public/dist/js/demo.js"></script>
    <script src="/public/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="/public/plugins/jquery-validation/additional-methods.min.js"></script>



    <script src="/public/js/Register.js" defer></script>
</head>
<body class="register-page iframe-mode" style="height: 100%;">
<div class="register-box">
    <div class="register-logo">
        <a href="#"><b>Admin</b>LTE</a>
    </div>
    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>
            <form method="post" id="user_form">
                <div class="input-group mb-3">
                    <input type="text" class="form-control input-form" placeholder="Full name" name="user_name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control input-form" placeholder="Full lastname" name="user_lastname">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="email" class="form-control input-form" placeholder="Email" name="user_email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control input-form" placeholder="Password" name="user_password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control input-form" placeholder="Retype password" name="reenter_password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>

                    <div class="col-4">
                        <button type="submit" id="register" form="user_form" name="register_user" class="btn btn-primary btn-block">Register</button>
                    </div>

                </div>
            </form>
            <div class="social-auth-links text-center">
                <hr>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    Sign up using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    Sign up using Google+
                </a>
            </div>
            <a href="?action=login">I allready have account</a>
        </div>

    </div>
</div>
<!--<script>-->
<!--    $(function () {-->
<!--        // $.validator.setDefaults({-->
<!--        //     submitHandler: function () {-->
<!--        //         $(document).Toasts('create', {-->
<!--        //             class: 'bg-success',-->
<!--        //             title: 'Success',-->
<!--        //             subtitle: 'Subtitle',-->
<!--        //             body: 'Form successful submitted!'-->
<!--        //         })-->
<!--        //     }-->
<!--        // });-->
<!--        $('#user_form').validate({-->
<!--            rules: {-->
<!--                user_name: {-->
<!--                    required: true,-->
<!--                    text: true,-->
<!--                },-->
<!--                user_lastname: {-->
<!--                    required: true,-->
<!--                    text: true,-->
<!--                },-->
<!--                user_email: {-->
<!--                    required: true,-->
<!--                    email: true,-->
<!--                },-->
<!--                user_password: {-->
<!--                    required: true,-->
<!--                    password: true,-->
<!--                },-->
<!--                reenter_password: {-->
<!--                    required: true,-->
<!--                    password: true,-->
<!--                }-->
<!---->
<!--            },-->
<!--            messages: {-->
<!--                user_name: {-->
<!--                    required: "Please enter a username",-->
<!--                    text: "Please enter a valid email address"-->
<!--                },-->
<!--                user_lastname: {-->
<!--                    required: "Please enter a lastname",-->
<!--                    text: "Please enter a valid email address"-->
<!--                },-->
<!--                user_email: {-->
<!--                    required: "Please enter a mail",-->
<!--                    email: "Please enter a valid email address"-->
<!--                },-->
<!--                user_password: {-->
<!--                    required: "Please enter a password",-->
<!--                    text: "Please enter a valid email address",-->
<!--                },-->
<!--                reenter_password: {-->
<!--                    required: "Please provide a password",-->
<!--                    text: "Your password must be at least 5 characters long",-->
<!--                },-->
<!--            },-->
<!--            errorElement: 'span',-->
<!--            errorPlacement: function (error, element) {-->
<!--                error.addClass('invalid-feedback');-->
<!--                element.closest('.input-group').append(error);-->
<!--            },-->
<!--            highlight: function (element, errorClass, validClass) {-->
<!--                $(element).addClass('is-invalid');-->
<!--            },-->
<!--            unhighlight: function (element, errorClass, validClass) {-->
<!--                $(element).removeClass('is-invalid');-->
<!--            }-->
<!--        });-->
<!--    });-->
<!--</script>-->
</body>
</html>