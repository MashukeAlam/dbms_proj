<?php
include('db_config.php');
include('functions.php');

$update = false;
$uid;

if (isset($_GET['update'])) {
    $update = true;
    $uid = $_GET['id'];
}

$hname = htmlspecialchars($_POST['hname']) != "" ? htmlspecialchars($_POST['hname']) : false;
$hmname = htmlspecialchars($_POST['hmname']) != "" ? htmlspecialchars($_POST['hmname']) : false;
$haddr = htmlspecialchars($_POST['haddr']) != "" ? htmlspecialchars($_POST['haddr']) : false;
$hnum = htmlspecialchars($_POST['hnum']) != "" ? htmlspecialchars($_POST['hnum']) : false;
$hdesc = htmlspecialchars($_POST['hdesc']) != "" ? htmlspecialchars($_POST['hdesc']) : false;
$hrent = htmlspecialchars($_POST['hrent']) != "" ? htmlspecialchars($_POST['hrent']) : false;
$hmeals = htmlspecialchars($_POST['hmeals']) != "" ? htmlspecialchars($_POST['hmeals']) : false;
$hfeatures = htmlspecialchars($_POST['hfeatures']) != "" ? htmlspecialchars($_POST['hfeatures']) : false;


$all_inputs_combines = $hname . " " . $haddr . " " . $hdesc . " " . $hrent . " " . $hmeals . " " . $hfeatures . " " .  $hnum . " " . $hmname;

if (!($hname && $haddr && $hnum && $hdesc && $hrent && $hmeals && $hfeatures)) {
    echo "fill up prob";
    redir("product_form.php?fp=true");
} else if (strlen($hdesc) < 100 || strlen($hnum) < 7) {
    redir("product_form.php?ln=true");
} else if(check_indecent_words($all_inputs_combines)) {
    redir("product_form.php?bw=true");

    
} else {

    $sql = $update ? "UPDATE hotel_posts SET managername = '$hmname' , hname='$hname'  , haddr='$haddr', hdesc='$hdesc', hrent=$hrent, hmeals='$hmeals', hfeatures='$hfeatures', hnum=$hnum WHERE id=$uid" : "INSERT INTO hotel_posts (managername, hname, haddr, hdesc, hrent, hmeals, hfeatures, hnum) VALUES ('$hmname', '$hname', '$haddr', '$hdesc', $hrent, '$hmeals', '$hfeatures', $hnum )";
    echo $sql;
    $result = query($conn, $sql);

    if ($result) {
        redir("product_form.php?s=true");
    } else {
        redir("product_form.php?err=true");
    }
}


