<?php
include('functions.php');
    $search_key = $_POST['address'];
    // redir('product_form.php?q=' + $search_key);
    redir("product_form.php?q=$search_key");

?>