<?php

namespace App\Database\Product;

use App\Database\DB;
use PDO;

class NewsRepository
{

    // select function
    public function select($news_id = false)
    {
        $db = new DB();


        $sql = 'SELECT * FROM news';

        if ($news_id){
            $sql .= " WHERE id = '$news_id'";
        }
        $result = $db->execute($sql);

        if ($news_id) {
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    // insert function
    function insert($title, $desc, $image, $author, $time)
    {

        $db = new DB();

        $query = "INSERT INTO news (news_title, news_desc, news_image, news_author, publication_date)
              VALUES ('$title', '$desc', '$image', '$author', '$time')";

        $result = $db->execute($query);

        return $result;
    }

// update function
    function update($news_id, $title, $desc, $image, $author, $time)
    {
        $db = new DB();

        $query = "UPDATE news SET news_title = '$title', news_desc = '$desc', news_image = '$image', news_author = '$author', publication_date = '$time'
              WHERE id = $news_id;";

        $result = $db->execute($query);

        return $result;

    }

// delete function
    function delete($news_id)
    {
        $db = new DB();

        $query = "DELETE FROM news WHERE id = $news_id";

        $result = $db->execute($query);

        return $result;

    }



// mass delete
    function massDelete($news_id)
    {
        $db = new DB();

        $query = "DELETE FROM news WHERE id IN (".implode(",", $news_id).")";

        $result = $db->execute($query);

        return $result;
    }

}