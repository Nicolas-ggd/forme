<?php


// debugger to see errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once "../../app/classes/productFunction.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
    <!--  Bootstrap css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!--  Bootstrap icons  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!--  Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--  Suite gpl  -->
    <link rel="stylesheet" href="/forme/admin/view/lib/suite_gpl/codebase/suite.css">
    <!--  Cloudflare  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css" rel="stylesheet"/>
    <!--  toastr alert massage  -->
    <link href="../lib/CodeSeven-toastr-2.1.4-7-g50092cc/CodeSeven-toastr-50092cc/build/toastr.css" rel="stylesheet"/>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous" defer></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script>
    <!-- Suite gpl js -->
    <script type="text/javascript" src="/forme/admin/view/lib/suite_gpl/codebase/suite.js"></script>
    <!-- Datapicker calendar js -->
    <script src="../js/datepicker.js" defer></script>
    <!--  toast alert massage  -->
    <script src="../lib/CodeSeven-toastr-2.1.4-7-g50092cc/CodeSeven-toastr-50092cc/toastr.js" defer></script>
    <!-- Request js -->
    <script src="../js/request.js" defer></script>

</head>
<body>

<?php
// require navbar
require_once "../components/header.php";

$edit = isset($_GET['edit']) && isset($_GET['product_id']);
$product_id = $edit ? $_GET['product_id'] : false;
if ($edit) {
    $product = select($product_id);
}

?>

<div class="container">
    <div class="row pt-5">

        <form method="post" id="add_form" class="mb-3">

            <?php
            if ($edit) {
                echo '<input type="hidden" class="form-control w-25" name="product_id" value="' . $product_id . '" id="product_id">';
            }

            ?>

            <div class="mb-3">
                <label for="exampleProductName" class="form-label">Product Name</label>
                <input type="text" class="form-control w-25" name="product_name"
                       value="<?php echo $edit ? $product['product_name'] : ''; ?>" id="product_name">
                <div class="form-text">Enter the name of the product.</div>
            </div>

            <div class="mb-3">
                <label for="exampleProductDescription" class="form-label">Product Description</label>
                <textarea type="text" class="form-control w-25" value="" name="product_desc"
                          id="product_desc"><?php echo $edit ? $product['product_desc'] : ''; ?></textarea>
                <div class="form-text">Describe products condition.</div>
            </div>

            <div class="mb-3">
                <label for="exampleProductStatus" class="form-label ">Product Status</label>
                <input type="text" class="form-control w-25" name="product_status"
                       value="<?php echo $edit ? $product['product_status'] : ''; ?>" id="product_status">
                <div class="form-text">Specify product stock.</div>
            </div>

            <div class="mb-3">
                <label for="exampleProductStatus" class="form-label ">Select date: Note that, your product will <br>
                    be stored on the site for 30 days</label>
                <input type="text" name="product_deadline" id="date-input"
                       value="<?php echo $edit ? $product['product_deadline'] : ''; ?>" id="product_deadline"
                       class="form-control w-25" style="width: 200px; background: white" readonly/>
                <div class="form-text">The date off addition is automatically saved</div>
            </div>
            <button type="submit" class="btn btn-primary" id="send" name="add_product" form="add_form">Submit</button>
            <a href="/forme/admin/view/index.php" class="btn btn-warning" form="add_form">Back</a>

        </form>
    </div>
</div>

</body>
</html>
