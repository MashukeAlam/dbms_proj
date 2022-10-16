<?php

include('db_config.php');
include('functions.php');
echo $_GET['id'];
$id = $_GET['id'];
$sql = "SELECT * FROM hotel_posts WHERE id=$id";
$res = query($conn, $sql);
$arr = $res->fetchAll(PDO::FETCH_ASSOC);
$row = $arr[0];


?>

<?php

if (isset($_GET['fp'])) {
    echo "<h2 style='color:red;'>Please fill in all the form!</h2>";
}



if (isset($_GET['ln'])) {
    echo "<h2 style='color:red;'>Please give description of minimum 100 characters and a valid contact number of minmum 7 digits!</h2>";
}

if (isset($_GET['s'])) {
    echo "<h2 style='color:green;'>Successfully added</h2>";
}

if (isset($_GET['err'])) {
    echo "<h2 style='color:red;'>Oops! Unexpected error occured! :(</h2>";
}

if (isset($_GET['wrong'])) {
    echo "<h2 style='color:red;'>Invalid username or password :(</h2>";
}

?>
<html>

<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>



<body>

    <form id="form" action="./validate_hotel.php?update=true&id=<?php echo $id ?>" method="post" style="display: block;">
        <div class="form-group">
            <label for="">Hostel Manager Name</label>
            <input value="<?php echo $row['managername'] ?>" type="text" class="form-control th" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name" name="hmname">
        </div>
        <div class="form-group">
            <label for="">Hostel Name</label>
            <input value="<?php echo $row['hname'] ?>" type="text" class="form-control th" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" name="hname">
        </div>
        <div class="form-group">
            <label for="">Hostel Address</label>
            <input value="<?php echo $row['haddr'] ?>" type="text" class="form-control th" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address" name="haddr">
        </div>
        <div class="form-group">
            <label for="">Contact</label>
            <input value="<?php echo $row['hnum'] ?>" type="number" class="form-control th" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address" name="hnum">
        </div>
        <div class="form-group">
            <label for="">Hostel Description</label>
            <textarea value="" class="form-control th" rows="5" name="hdesc" placeholder="Tell the device condition, model, age in details in at least 100 word"><?php echo $row['hdesc'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="">Rent</label>
            <input value="<?php echo $row['hrent'] ?>" type="number" class="form-control th" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rent" name="hrent">
        </div>
        <div class="form-group">
            <label for="">Meal Items</label>
            <input value="<?php echo $row['hmeals'] ?>" type="text" class="form-control th" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Meal Items" name="hmeals">
        </div>
        <div class="form-group">
            <label for="">Features</label>
            <input value="<?php echo $row['hfeatures'] ?>" type="text" class="form-control th" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Features eg: wifi etc." name="hfeatures">
        </div>

        <br>
        <input id="sub" class="btn btn-primary" type="submit" value="Submit!"></input>

    </form>
</body>

</html>