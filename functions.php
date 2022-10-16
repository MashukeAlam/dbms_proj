<?php


function query($c, $q)
{
    $op = strtolower(explode(" ", $q)[0]);
    // echo $q;
    try {
        if ($op == "select") {
            return $c->query($q);
        } else return $c->exec($q);
    } catch (PDOException $e) {
        return false;
    }
}

function redir($url)
{
    header("location: $url");
}


function check_indecent_words($whole_damn_string) {

    function word_only($v)
    {
        return $v['word'];
    }

    include('db_config.php');
    // $set = new Set();
    $whole_array = explode(" ", $whole_damn_string);
    $sql = "SELECT word FROM blocked_words WHERE 1";
    $res = query($conn, $sql);
    $blocked_words = $res->fetchAll(PDO::FETCH_ASSOC);
    $list_blocked_words = array_map("word_only", $blocked_words);
    // print_r($list_blocked_words);
    // for ($i = 0; $i < count($whole_array); $i++) {
    //     print_r($blocked_words[1]['word']);
    // }
    // array_push($whole_array, "nigga");
    $intersection = array_intersect($whole_array, $list_blocked_words);
    // print_r($intersection);
    return count($intersection) != 0;
}

?>