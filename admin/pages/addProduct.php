<?php


// debugger to see errors
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once "../../classes/databaseFunction.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/forme/lib/sweetalert2.css">
    <link rel="stylesheet" href="/forme/lib/suite_gpl/codebase/suite.css">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous" defer></script>
    <script src="/forme/lib/sweetalert2.all.min.js" defer></script>
    <script src="../js/request.js" defer></script>
    <script type="text/javascript" src="/forme/lib/suite_gpl/codebase/suite.js"></script>
    <script src="/forme/admin/js/datepicker.js"></script>

</head>
<body>

<?php
// require navbar
require_once "../components/header.php";

$edit = isset($_GET['edit']) && isset($_GET['product_id']);
$product_id = $edit ? $_GET['product_id'] : false;
if ($edit){
    $product = select($product_id);
}

?>

<div class="container">
    <div class="row pt-5">

        <form method="post" id="add_form" class="mb-3">

            <?php
            if ($edit){
                echo '<input type="hidden" class="form-control w-25" name="product_id" value="'.$product_id.'" id="product_id">';
            }

            ?>

            <div class="mb-3">
                <label for="exampleProductName" class="form-label">Product Name</label>
                <input type="text" class="form-control w-25" name="product_name" value="<?php echo $edit ? $product['product_name'] : '' ;?>" id="product_name">
                <div id="emailHelp" class="form-text">Enter the name of the product.</div>
            </div>

            <div class="mb-3">
                <label for="exampleProductDescription" class="form-label">Product Description</label>
                <textarea type="text" class="form-control w-25" value="" name="product_desc" id="product_desc"><?php echo $edit ? $product['product_desc'] : '' ;?></textarea>
                <div id="emailHelp" class="form-text">Describe products condition.</div>
            </div>

            <div class="mb-3">
                <label for="exampleProductStatus" class="form-label ">Product Status</label>
                <input type="text" class="form-control w-25" name="product_status" value="<?php echo $edit ? $product['product_status'] : '';?>" id="product_status">
                <div id="emailHelp" class="form-text">Specify product stock.</div>
            </div>

            <div class="mb-3">
                <label for="exampleProductStatus" class="form-label ">Select date: how long stay your <br>
                    product in website</label>
                <input type="text" name="product_deadline" id="date-input" value="<?php echo $edit ? $product['product_deadline'] : '';?>" id="product_deadline" class="form-control w-25" style="width: 200px; background: white" readonly/>
                <div id="emailHelp" class="form-text">Added time save automatically</div>
            </div>

            <button type="submit" class="btn btn-primary" id="send" name="add_product" form="add_form">Submit</button>
            <a href="/forme/index.php" class="btn btn-warning"  form="add_form">Back</a>

        </form>
    </div>
</div>

</body>
</html>
