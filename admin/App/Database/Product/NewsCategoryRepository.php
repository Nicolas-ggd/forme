<?php

namespace App\Database\Product;

use App\Database\DB;
use PDO;

class NewsCategoryRepository
{

    // select function
    public function select($category_id = false)
    {
        $db = new DB();


        $sql = 'SELECT * FROM category';

        if ($category_id){
            $sql .= " WHERE id = '$category_id'";
        }
        $result = $db->execute($sql);

        if ($category_id) {
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // insert function
    function insert($category)
    {

        $db = new DB();

        $query = "INSERT INTO category (news_category)
              VALUES ('$category')";

        $result = $db->execute($query);

        return $result;
    }

// update function
    function update($category_id, $category)
    {
        $db = new DB();

        $query = "UPDATE category SET news_category = '$category'
              WHERE id = $category_id;";

        $result = $db->execute($query);

        return $result;

    }

// delete function
    function delete($category_id)
    {
        $db = new DB();

        $query = "DELETE FROM category WHERE id = $category_id";

        $result = $db->execute($query);

        return $result;

    }



// mass delete
    function massDelete($category_id)
    {
        $db = new DB();

        $query = "DELETE FROM category WHERE id IN (".implode(",", $category_id).")";

        $result = $db->execute($query);

        return $result;
    }

}