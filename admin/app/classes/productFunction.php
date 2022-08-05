<?php

// require database
require_once __DIR__ . "/database.php";

// select function
function select($product_id = false)
{
    $db = new DB();
    $pdo = $db->get_conn();


    $query = "SELECT * FROM product ";
    if ($product_id) {
        $query .= "WHERE id = $product_id";
    }

    $products = $pdo->query($query, PDO::FETCH_ASSOC);
    if ($product_id) {
        $products = $products->fetch(PDO::FETCH_ASSOC);
    } else {
        $products = $products->fetchAll(PDO::FETCH_ASSOC);
    }

    return $products;
}

// insert function
function insert($name, $desc, $status, $time)
{

    $db = new DB();
    $pdo = $db->get_conn();

    $query = "INSERT INTO product (product_name, product_desc, product_status, product_deadline)
              VALUES ('$name', '$desc', '$status', '$time')";

    try {
        $pdo->query($query);
    } catch (Exception $e) {
        return false;
    }
    return true;
}

// update function
function update($product_id, $name, $desc, $status, $time)
{
    $db = new DB();
    $pdo = $db->get_conn();

    $query = "UPDATE product SET product_name = '$name', product_desc = '$desc', product_status = '$status', product_deadline = '$time'
              WHERE id = $product_id;";

    try {
        $pdo->query($query);
    } catch (Exception $e) {
        return false;
    }
    return true;

}

// delete function
function delete($product_id)
{
    $db = new DB();
    $pdo = $db->get_conn();

    $query = "DELETE FROM product WHERE id = $product_id";

    try {
        $pdo->query($query);
    } catch (Exception $e) {
        return false;
    }
    return true;

}

// delete product if date is overdue
function deleteOverdueProduct()
{
    $db = new DB();
    $pdo = $db->get_conn();

    $date = date("Y-m-d");

    $query = "DELETE FROM product WHERE product_deadline < '$date';";

    try {
        $pdo->query($query);
    } catch (Exception $e) {
        return false;
    }
    return true;

}

// mass delete
function massDelete($product_id)
{
    $db = new DB();
    $pdo = $db->get_conn();

    $query = "DELETE FROM product WHERE id IN (".implode(",", $product_id).")";

    try {
        $pdo->query($query);
    } catch (Exception $e) {
        http_response_code(400);
        return false;
    }
    return true;
}