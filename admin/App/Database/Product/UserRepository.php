<?php

namespace App\Database\Product;

use App\Database\DB;
use PDO;

class UserRepository
{
    // select function
    public function select($user_email = false)
    {
        $db = new DB();


        $sql = 'SELECT * FROM users';

        if ($user_email){
            $sql .= " WHERE user_email = '$user_email'";
        }
        $result = $db->execute($sql);

        if ($user_email) {
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // insert function
    function insert($name, $lastname, $email, $password)
    {

        $db = new DB();

        $query = "INSERT INTO users (user_name, user_lastname, user_email, user_password)
              VALUES ('$name', '$lastname', '$email', '$password')";

        $result = $db->execute($query);

        return $result;
    }

    // update function
    function update($user_id, $name, $lastname, $email, $password, $time)
    {
        $db = new DB();

        $query = "UPDATE users SET user_name = '$name', user_lastname = '$lastname', user_email = '$email', user_password = '$password', create_time = '$time'
              WHERE id = $user_id;";

        $result = $db->execute($query);

        return $result;

    }

    // delete function
    function delete($user_id)
    {
        $db = new DB();

        $query = "DELETE FROM users WHERE id = $user_id";

        $result = $db->execute($query);

        return $result;

    }

}