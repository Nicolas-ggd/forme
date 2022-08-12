<?php

namespace App\Database\Product;

use App\Database\DB;
use PDO;

class UserSkillsRepository
{

    // select function
    public function select($user_id = false)
    {
        $db = new DB();


        $sql = 'SELECT * FROM skills';

        if ($user_id){
            $sql .= " WHERE id = '$user_id'";
        }
        $result = $db->execute($sql);

        if ($user_id) {
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // insert function
    function insert($skills)
    {

        $db = new DB();

        $query = "INSERT INTO skills (skills)
              VALUES ('$skills')";

        $result = $db->execute($query);

        return $result;
    }

// update function
    function update($skills_id, $skills)
    {
        $db = new DB();

        $query = "UPDATE skills SET skills = '$skills'
              WHERE id = $skills_id;";

        $result = $db->execute($query);

        return $result;

    }

// delete function
    function delete($skills_id)
    {
        $db = new DB();

        $query = "DELETE FROM skills WHERE id = $skills_id";

        $result = $db->execute($query);

        return $result;

    }



// mass delete
    function massDelete($skills_id)
    {
        $db = new DB();

        $query = "DELETE FROM skills WHERE id IN (".implode(",", $skills_id).")";

        $result = $db->execute($query);

        return $result;
    }

}