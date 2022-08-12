<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Blank Page</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/public/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="/public/dist/css/adminlte.min.css?v=3.2.0">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <!-- Navbar -->
    <?php require 'admin/view/components/Header.php'; ?>
    <!-- Navbar -->

    <!-- Side Navbar -->
    <?php require 'admin/view/components/SideNavbar.php'; ?>
    <!-- Side Navbar -->

    <div class="content-wrapper" style="min-height: 1602px;">

        <?php require 'admin/view/components/PageHeader.php'; ?>

        <section class="content">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">უნარების თეიბლი</h3>
                                        </div>


                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="">
                                                    <a href="?action=addSkills"
                                                       class="btn btn-outline-info my-2 btn-rounded">უნარების დამატება</a>

                                                    <button type="button"
                                                            class="h-20 btn btn-outline-warning btn-rounded mass">
                                                        მასიური წაშლა
                                                    </button>

                                                    <button type="button"
                                                            class="d-none mass_delete btn btn-outline-success btn-rounded">
                                                        <i
                                                                class="mx-1 ties bi bi-check-lg"></i>თანხმობა
                                                    </button>
                                                </div>
                                            </div>
                                            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                <div class="row">
                                                    <div class="col-sm-12 col-md-6"></div>
                                                    <div class="col-sm-12 col-md-6"></div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <form id="table_form">

                                                            <table id="example2"
                                                                   class="table table-bordered table-hover dataTable dtr-inline"
                                                                   aria-describedby="example2_info">
                                                                <thead>
                                                                <tr>
                                                                    <th class="sorting sorting_asc" tabindex="0"
                                                                        aria-controls="example2" rowspan="1" colspan="1"
                                                                        aria-sort="ascending"
                                                                        aria-label="Rendering engine: activate to sort column descending">
                                                                        <input type="checkbox" id="selectAll">
                                                                        ID
                                                                    </th>
                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="example2" rowspan="1" colspan="1"
                                                                        aria-label="Browser: activate to sort column ascending">
                                                                        მომხმარებლის უნარი
                                                                    </th>

                                                                    <th class="sorting" tabindex="0"
                                                                        aria-controls="example2" rowspan="1" colspan="1"
                                                                        aria-label="CSS grade: activate to sort column ascending">
                                                                        Actions
                                                                    </th>
                                                                </tr>
                                                                </thead>
                                                                <tbody id="t_body">

                                                                <?php

                                                                if (isset($_POST))
                                                                    foreach ($userSkills as $i => $skills) { ?>

                                                                        <tr class="odd">
                                                                            <td class="dtr-control sorting_1"
                                                                                tabindex="0">
                                                                                <div class="d-flex">
                                                                                    <div class="chk ms-3 d-flex align-items-center">
                                                                                        <input class="check_box"
                                                                                               type="checkbox"
                                                                                               name="check_productId[]"
                                                                                               value="<?php echo $skills['id']; ?>">
                                                                                        <p class="fw-bold px-1 align-items-center d-flex m-0"><?php echo $skills['id']; ?></p>
                                                                                        <p class="text-muted mb-0"></p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <div class="ms-3">
                                                                                        <p class="fw-bold mb-1"><?php echo $skills['user_skills']; ?></p>
                                                                                        <p class="text-muted mb-0"></p>
                                                                                    </div>
                                                                                </div>
                                                                            </td>

                                                                            <td>
                                                                                <a href="?action=editSkills&skills_id=<?php echo $skills['id']; ?>"
                                                                                   id="edit_line"
                                                                                   class="btn  btn-warning btn-rounded">
                                                                                    <i class="bi bi-pencil"></i>

                                                                                </a>

                                                                                <button type="button"
                                                                                        class="btn btn-danger delete_form btn-rounded">
                                                                                    <i class="ties bi bi-trash"></i>

                                                                                </button>

                                                                                <button type="button"
                                                                                        value="<?php echo $skills['id']; ?>"
                                                                                        class="d-none btn btn-success confirm btn-rounded">
                                                                                    <i class="ties bi bi-check-lg"></i>

                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>

                                                                </tbody>
                                                            </table>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>



    </div>
</section>
    <?php require 'admin/view/components/Footer.php'; ?>

</div>

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
<script src="/public/js/CheckboxSelect.js" defer></script>
<!-- add skills request js -->
<script src="/public/js/AddUserSkills.js"></script>

<script>

        $(function () {
        $("#example2").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example1').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
    });
    });

</script>

</body>
</html>
