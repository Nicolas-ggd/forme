<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Products</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/public/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="/public/dist/css/adminlte.min.css?v=3.2.0">
    <link rel="stylesheet" href="/public/lib/suite_gpl/codebase/suite.css">
    <link rel="stylesheet" href="/public/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/public/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="/public/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="/public/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">

    <link rel="stylesheet" href="/public/plugins/bs-stepper/css/bs-stepper.min.css">

    <link rel="stylesheet" href="/public/plugins/dropzone/min/dropzone.min.css">

    <link rel="stylesheet" href="/public/dist/css/adminlte.min.css?v=3.2.0">

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
    <script src="/public/lib/suite_gpl/codebase/suite.js"></script>
    <script src="/public/plugins/select2/js/select2.full.min.js"></script>
    <script src="/public/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <script src="/public/plugins/moment/moment.min.js"></script>
    <script src="/public/plugins/inputmask/jquery.inputmask.min.js"></script>
    <script src="/public/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="/public/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <script src="/public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="/public/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="/public/plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <script src="/public/plugins/dropzone/min/dropzone.min.js"></script>
    <!-- add user skills  js -->
    <script src="/public/js/AddUserSkills.js"></script>
    <!-- checkbox select js -->
    <script src="/public/js/CheckboxSelect.js"></script>
</head>
<body>
<div class="wrapper">

    <!-- Navbar -->
    <?php require 'admin/view/components/Header.php'; ?>
    <!-- Navbar -->

    <!-- Side Navbar -->
    <?php require 'admin/view/components/SideNavbar.php'; ?>
    <!-- Side Navbar -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <?php require 'admin/view/components/PageHeader.php'; ?>


        <!-- Main content -->
        <section class="content">
            <div class="container">
                <div class="pt-5">
                    <div class="col-md-12">

                        <div class="card card-primary">
                            <div class="card-header" style="background-color: rgb(23 162 184);">
                                <h3 class="card-title">General</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">


                                <form method="post" id="add_form">
                                    <?php

                                    if(isset($skills_id)){
                                        echo '<input type="hidden" class="form-control" name="skills_id" value="' . $skills_id . '" id="skills_id">';
                                    }

                                    ?>
                                    <div class="form-group">
                                        <label for="inputName">უნარი</label>
                                        <input type="text" id="skills" name="user_skills" class="form-control"
                                               value="<?php echo isset($skills) ? $skills['user_skills'] : ''; ?>">
                                    </div>

                                    <button type="submit" class="btn btn-success" id="send" name="add_form" form="add_form">
                                        გაგზავნა
                                    </button>
                                    <a href="?action=userSkills" class="btn btn-warning" >უკან</a>

                                </form>

                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </section>
    </div>
    <?php require 'admin/view/components/Footer.php'; ?>

</div>

</body>
</html>


<!-- Site wrapper -->

