<?php

// debugger to see errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "../app/classes/databaseFunction.php";
require_once "../app/classes/headComponents.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css" rel="stylesheet"/>
    <!--  toastr css  -->
    <link href="lib/CodeSeven-toastr-2.1.4-7-g50092cc/CodeSeven-toastr-50092cc/build/toastr.css" rel="stylesheet"/>
    <!--  pagination css  -->
    <link rel="stylesheet" href="css/pagination.css">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous" type="text/javacsript"></script>
    <!-- jquery googleapis -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script>
    <!--  toastr alert massage -->
    <script src="lib/CodeSeven-toastr-2.1.4-7-g50092cc/CodeSeven-toastr-50092cc/toastr.js" defer></script>
    <!--  pagination with vanilla js  -->
    <script src="js/pagination.js" defer></script>
    <!-- Table sort js -->
    <script src="js/tableSort.js"></script>
    <!--  request js  -->
    <script src="js/request.js" defer></script>

</head>
<body>

<?php require_once "../view/components/header.php"; ?>

<div class="container-fluid">
    <div class="table-container px-5">
        <div class="col-md-12 pt-5">
            <table class="table align-middle mb-0 bg-white table-bordered table-hover table-condensed " id="table">
                <thead class="bg-light">
                <tr>
                    <th>ID <i class="bi bi-arrow-down-up mx-1"></i></th>
                    <th>Product Name <i class="bi bi-arrow-down-up mx-1"></i> </th>
                    <th>Description <i class="bi bi-arrow-down-up mx-1"></i> </th>
                    <th>Status <i class="bi bi-arrow-down-up mx-1"></i> </th>
                    <th>Last Time <i class="bi bi-arrow-down-up mx-1"></i> </th>
                    <th class="col-md-2">Actions <i class="bi bi-arrow-down-up mx-1"></i> </th>
                </tr>
                </thead>
                <tbody id="t_body">
                <div class="d-flex col-md-2 pb-4">
                    <input type="text" id="search_input" placeholder="Search products..." class="form-control btn-rounded">
                </div>

                <?php

                $products = select();

                foreach ($products as $i => $product) { ?>
                    <tr id="pagination-tr" data-current-page="1">
                        <td class="px-0">
                            <div class="d-flex">
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?php echo $product['id']; ?></p>
                                    <p class="text-muted mb-0"></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="ms-3">
                                    <p class="fw-bold mb-1"><?php echo $product['product_name']; ?></p>
                                    <p class="text-muted mb-0"></p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="fw-normal mb-1"><?php echo $product['product_desc']; ?></p>
                            <p class="text-muted mb-0"></p>
                        </td>
                        <td>
                            <button type="button" class="btn btn-info rounded"
                                    disabled><?php echo $product['product_status']; ?>
                            </button>
                        </td>
                        <td>
                            <div class="ms-3">
                                <p class="fw-bold mb-1"><?php echo $product['product_deadline']; ?></p>
                                <p class="text-muted mb-0"></p>
                            </div>
                        </td>
                        <td>
                            <a href="/forme/admin/view/pages/addProduct.php?edit=1&product_id=<?php echo $product['id']; ?>"
                               id="edit_line" class="btn  btn-warning btn-rounded">
                                <i class="bi bi-pencil"></i>
                                Edit
                            </a>

                            <button type="button"
                                    class="btn btn-danger delete_form btn-rounded">
                                <i class="ties bi bi-trash"></i>
                                Delete
                            </button>

                            <button type="button" value="<?php echo $product['id']; ?>"
                                    class="d-none btn btn-success confirm btn-rounded">
                                <i class="ties bi bi-check-lg"></i>
                                Confirm
                            </button>

                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="my-3"></div>
        <nav class="pagination-container">
            <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                    <button class="pagination-button page-link" id="prev-button" aria-label="Previous page"
                            title="Prev page"></button>
                </li>
                <li class="page-item">
                    <button id="next-button" class="pagination-button page-link" aria-label="Next page"
                            title="Next page"></button>
                </li>
                <div id="pagination-numbers">

            </ul>

        </nav>
    </div>
</div>


</body>
</html>