<?php
    include('db_config.php');
    include('functions.php');
    session_start();
    $uname = $_POST['hmname'];
    $upass = $_POST['hmpass'];

    // echo $uname . $upass;
    $hashed = hash('sha256', $upass);

    $sql = "SELECT pass from manager WHERE name='$uname'";
    echo $sql;
    $result = query($conn, $sql);
    if($result) {
        $row = $result->fetchAll(PDO::FETCH_ASSOC);
        $pass = $row[0]['pass'];
  
        if ($pass == $hashed) {
        
        $_SESSION['mn'] = $uname;
        redir('product_form.php');
        }else {
            redir('product_form.php?wrong=true');

        }
    } else {
        redir('product_form.php?err=true');

    }
?>