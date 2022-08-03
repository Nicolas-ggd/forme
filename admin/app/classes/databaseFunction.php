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
function insert($name, $desc, $status, $time)
{

    $db = new DB();
    $pdo = $db->get_conn();

    $query = "INSERT INTO product_table (product_name, product_desc, product_status, product_deadline)
                VALUES (?, ?, ?, ?)";

    try{
        $stmt = $pdo->prepare($query);
        $stmt->execute([$name, $desc, $status, $time]);
    } catch (Exception $e){
        return false;
    }
    return true;
}

// update function
function update($product_id, $name, $desc, $status, $time)
{
    $db = new DB();
    $pdo = $db->get_conn();

    $query = "UPDATE product_table SET product_name = '$name', product_desc = '$desc', product_status = '$status', product_deadline = '$time'
              WHERE id = $product_id;";

    try {
        $pdo->query($query);
    } catch (Exception $e){
        return false;
    }
    return true;

}

// delete function
function delete($product_id){
    $db = new DB();
    $pdo = $db->get_conn();

    $query = "DELETE FROM product_table WHERE id = $product_id";

    try {
        $pdo->query($query);
    } catch ( Exception $e){
        return false;
    }
    return true;

}

function deleteProduct(){
    $db = new DB();
    $pdo = $db->get_conn();

    $date = date("Y-m-d");

    $query = "DELETE FROM product_table WHERE product_deadline <= '$date';";

    try {
        $pdo->query($query);
    } catch ( Exception $e){
        return false;
    }
    return true;

}