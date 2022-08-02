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
    <link rel="stylesheet" href="lib/sweetalert2.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous" type="text/javacsript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--  Sweet alert  -->
    <script src="lib/sweetalert2.all.min.js"  defer></script>
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
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Last Time</th>
                    <th class="col-md-2">Actions</th>
                </tr>
                </thead>
                <tbody id="t_body">
                <div class="d-flex col-md-3 pb-4">
                        <input type="text" id="search_input" placeholder="Search products...">
                </div>

                <?php

                $products = select();

                foreach ($products as $i => $product) { ?>
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
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


                            <button type="button" value="<?php echo $product['id']; ?>"
                                    class="btn btn-danger delete_form">
                                <i class="bi bi-trash"></i>
                                Delete
                            </button>

                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>