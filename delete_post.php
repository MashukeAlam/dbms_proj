<!DOCTYPE html>
<html>

<head>
    <title>Delete Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="animation.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php
    session_start();
    include('db_config.php');
    include('functions.php');

    if(isset($_SESSION['mn'])) {
        echo '<h2>Welcome ' . $_SESSION['mn'] . " !</h2>";
    } else {
        print <<<EOF
        <form id="form" action="./manager_login.php" method="post" style="display: block;">
            <div class="form-group">
                <label for="">Manager Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name" name="hmname">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name" name="hmpass">
            </div>
            <input id="sub" class="btn btn-primary" type="submit" value="Submit!"></input>
            </form>
        EOF;
    }


    echo '<h3 class="delanim">Deleting post...</h3>';
    $id = $_GET['id'];
    $sql = "DELETE from hotel_posts WHERE id=$id";
    if(query($conn, $sql)) {
        echo '<h3 class="succanim">Deleted successfully !</h3>';
        echo '<button onclick="go()">Go back</button>';
    }else {
        echo 'Something went wrong!';
    }
?>

<body></body>


<script>
    go = () => {
        location.assign("product_form.php");
    }
</script>

</html>