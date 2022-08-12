<?php

namespace App\Database\Product;

use App\Database\DB;
use PDO;

class PermisionRepository
{

    // select function
    public function select($permision_id = false)
    {
        $db = new DB();


        $sql = 'SELECT * FROM permision';

        if ($permision_id){
            $sql .= " WHERE id = '$permision_id'";
        }
        $result = $db->execute($sql);

        if ($permision_id) {
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // insert function
    function insert($permision)
    {

        $db = new DB();

        $query = "INSERT INTO permision (user_permision)
              VALUES ('$permision')";

        $result = $db->execute($query);

        return $result;
    }

// update function
    function update($permision_id, $permision)
    {
        $db = new DB();

        $query = "UPDATE permision SET user_permision = '$permision'
              WHERE id = $permision_id;";

        $result = $db->execute($query);

        return $result;

    }

// delete function
    function delete($permision_id)
    {
        $db = new DB();

        $query = "DELETE FROM permision WHERE id = $permision_id";

        $result = $db->execute($query);

        return $result;

    }



// mass delete
    function massDelete($permision_id)
    {
        $db = new DB();

        $query = "DELETE FROM permision WHERE id IN (".implode(",", $permision_id).")";

        $result = $db->execute($query);

        return $result;
    }

}