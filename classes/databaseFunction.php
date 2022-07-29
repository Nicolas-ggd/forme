<?php

// require database
require_once __DIR__ . "/database.php";

// select function
function select($product_id = false)
{
    $db = new DB();
    $pdo = $db->get_conn();


    $query = "SELECT * FROM product_table ";
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
function insert($name, $desc, $status)
{

    $db = new DB();
    $pdo = $db->get_conn();

    $query = "INSERT INTO product_table (product_name, product_desc, product_status)
                VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$name, $desc, $status]);

}

// update function
function update($product_id, $name, $desc, $status)
{
    $db = new DB();
    $pdo = $db->get_conn();

    $query = "UPDATE product_table SET product_name = '$name', product_desc = '$desc', product_status = '$status'
              WHERE id = $product_id;";

    $pdo->query($query);
}

// delete function
function delete($product_id){
    $db = new DB();
    $pdo = $db->get_conn();

    $query = "DELETE FROM product_table WHERE id = $product_id";

    $pdo->query($query);
}