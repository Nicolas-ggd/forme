<?php

namespace App\Database\Product;

use App\Database\DB;
use PDO;

class ProductRepository
{
    // select function
    function select($product_id = false)
    {
        $db = new DB();


        $sql = 'SELECT * FROM product';

        if ($product_id){
            $sql .= " WHERE ID = $product_id";
        }
        $result = $db->execute($sql);

        if ($product_id) {
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // insert function
    function insert($name, $desc, $price, $status, $time)
    {

        $db = new DB();

        $query = "INSERT INTO product (product_name, product_desc, product_price, product_status, product_deadline)
              VALUES ('$name', '$desc', '$price', '$status', '$time')";

        $result = $db->execute($query);

        return $result;
    }

// update function
    function update($product_id, $name, $desc, $price, $status, $time)
    {
        $db = new DB();

        $query = "UPDATE product SET product_name = '$name', product_desc = '$desc', product_price = '$price', product_status = '$status', product_deadline = '$time'
              WHERE id = $product_id;";

        $result = $db->execute($query);

        return $result;

    }

// delete function
    function delete($product_id)
    {
        $db = new DB();

        $query = "DELETE FROM product WHERE id = $product_id";

        $result = $db->execute($query);

        return $result;

    }

// delete product if date is overdue
    function deleteOverdueProduct()
    {
        $db = new DB();

        $date = date("Y-m-d");

        $query = "DELETE FROM product WHERE product_deadline < '$date';";

        $result = $db->execute($query);

        return $result;

    }

// mass delete
    function massDelete($product_id)
    {
        $db = new DB();

        $query = "DELETE FROM product WHERE id IN (".implode(",", $product_id).")";

        $result = $db->execute($query);

        return $result;
    }
}