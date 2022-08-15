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
    <!-- checkbox select js -->
    <script src="/public/js/CheckboxSelect.js"></script>
    <!-- Datapicker calendar js -->
    <script src="/public/js/DatePicker.js"></script>
    <!-- suite gpl calendar -->
    <script src="/public/lib/suite_gpl/codebase/suite.js"></script>
    <!-- add news js -->
    <script src="/public/js/AddNews.js"></script>
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
                            <div class="card-header">
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

                                    if(isset($news_id)){
                                        echo '<input type="hidden" class="form-control" name="news_id" value="' . $news_id . '" id="news_id">';
                                    }

                                    ?>
                                    <div class="form-group">
                                        <label for="inputName">სათაური</label>
                                        <input type="text" id="news_title" name="news_title" class="form-control"
                                               value="<?php echo isset($new) ? $new['news_title'] : ''; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">სიახლის აღწერა</label>
                                        <textarea id="news_desc" name="news_desc" class="form-control"
                                                  rows="4"><?php echo isset($new) ? $new['news_desc'] : ''; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPrice">ფოტო</label>
                                        <input type="text" class="form-control" name="news_image"
                                               value="<?php echo isset($new) ? $new['news_image'] : ''; ?>"
                                               id="news_image">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputStatus">ავტორი</label>
                                        <input type="text" class="form-control" name="news_author"
                                               value="<?php echo isset($new) ? $new['news_author'] : ''; ?>"
                                               id="news_author">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputClientCompany">აირჩიე თარიღი</label>
                                        <input type="text" name="publication_date" id="date-input"
                                               value="<?php echo isset($new) ? $new['publication_date'] : ''; ?>"

                                               class="form-control" style="background: white;" readonly/>
                                    </div>
                                    <button type="submit" class="btn btn-success" id="send" name="add_product" form="add_form">
                                        გაგზავნა
                                    </button>
                                    <a href="?action=news" class="btn btn-warning" form="add_form">უკან</a>

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

