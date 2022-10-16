<?php
session_start();
include('db_config.php');
include('functions.php');
?>
<!DOCTYPE html>
<html data-theme="light">

<head>
    <title>Add Product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php
$sql = "SELECT * FROM `hotel_posts` WHERE 1";
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
if (isset($_GET['bw'])) {
    echo "<h2 style='color:red;'>Plese use modest word ! </h2>";
}

if (isset($_GET['q'])) {
    $like = "%" . $_GET['q'] . "%";
    $sql = "SELECT * FROM `hotel_posts` WHERE haddr LIKE '$like'";
}
if (isset($_GET['only'])) {
    $like = "%" . $_GET['only'] . "%";
    $sql = "SELECT * FROM `hotel_posts` WHERE managername LIKE '$like'";
}

if (isset($_SESSION['mn'])) {
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


?>

<body>
    <div class="theme">
        <label id="dark">Enable Dark Mode:</label> <input type="checkbox" id="myCheck" onclick="toggle()"></div>
    <div class="btn-group" role="group" aria-label="Basic example">
        <button id="formBtn" onclick="showForm()" type="button" class="btn btn-primary">Add hostel</button>

        <button id="postsBtn" onclick="showPosts()" type="button" class="btn btn-primary">Show Hostels</button>
    </div>
    <form id="form" action="./validate_hotel.php" method="post" style="display: none;">
        <div class="form-group">
            <label for="">Hostel Manager Name</label>
            <input type="text" class="form-control th" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name" name="hmname">
        </div>
        <div class="form-group">
            <label for="">Hostel Name</label>
            <input type="text" class="form-control th" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" name="hname">
        </div>
        <div class="form-group">
            <label for="">Hostel Address</label>
            <input type="text" class="form-control th" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address" name="haddr">
        </div>
        <div class="form-group">
            <label for="">Contact</label>
            <input type="number" class="form-control th" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Contact" name="hnum">
        </div>
        <div class="form-group">
            <label for="">Hostel Description</label>
            <textarea class="form-control th" rows="5" name="hdesc" placeholder="Tell the device condition, model, age in details in at least 100 word"></textarea>
        </div>
        <div class="form-group">
            <label for="">Rent</label>
            <input type="number" class="form-control th" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Rent" name="hrent">
        </div>
        <div class="form-group">
            <label for="">Meal Items</label>
            <input type="text" class="form-control th" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Meal Items" name="hmeals">
        </div>
        <div class="form-group">
            <label for="">Features</label>
            <input type="text" class="form-control th" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Features eg: wifi etc." name="hfeatures">
        </div>

        <br>
        <input id="sub" class="btn btn-primary" type="submit" value="Submit!"></input>

    </form>

    <div id="posts">
        <form id="form" action="./search_hostel_address.php" method="post" style="display: block;">
            <input type="text" class="form-control th" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Search by address !" name="address">
            <input id="sub" class="btn btn-primary" type="submit" value="Search!"></input></form>
            <div class="only">
        <label id="mine">Show only mine :</label> <input type="checkbox" id="showmine" onclick="mine()"></div>

        <?php

        $result = query($conn, $sql);
        if ($result) {
            if ($result->rowCount() > 0) {
                echo "<h4>" . $result->rowCount() . " hotels found </h4>";
                echo "<div class='posts'>";
                $posts = $result->fetchAll(PDO::FETCH_ASSOC);
                for ($i = 0; $i < count($posts); $i++) {
                    $row = $posts[$i];
                    $post_id = $row['id'];
                    $ad = $row['haddr'];
                    echo "<div class='post'>";
                    echo "<div class='name'>";
                    echo "<h3 title='Hotel Name'>" . ucfirst($row['hname']) . "</h3>";
                    echo "<p title='Address'>" . $row['haddr'] . "</p>";
                    echo "<a target='_blank' href='http://maps.google.com/?q=$ad'><img src='./icons/arrow.svg'/>Show in map</a>";
                    echo "</div>";
                    echo "<div class='desc'>";
                    echo "<p>More Details:</p></br>";
                    echo "<h4 class='limit'>" . ucfirst($row['hdesc']) . "</h4>";
                    echo "</div>";
                    echo "<div class='mf'>";
                    $meals = explode(" ", $row['hmeals']);
                    echo "Meals: ";
                    for ($j = 0; $j < count($meals); $j++) {
                        echo "<span class='label label-success badges'>" . $meals[$j] . "</span>";
                    }
                    echo "</br>";
                    $features = explode(" ", $row['hfeatures']);
                    echo "Features: ";
                    for ($j = 0; $j < count($features); $j++) {
                        echo "<span class='label label-info badges'>" . $features[$j] . "</span>";
                    }
                    echo "</div>";
                    echo "<div class='rent'>";
                    echo "<strong>" . $row['hrent'] . " TK/ month" . "</strong>";
                    echo "</div>";
                    echo "<div class='manager'>";
                    $xtra = $row['managername'] == $_SESSION['mn'] ? " (You)" : "";
                    echo "<p title='Manager'>" . $row['managername'] . $xtra . "</p></br><p title='Contact of Manager'>" . $row['hnum'] . "</p>";
                    if ($xtra == " (You)") {
                        echo '<form action="change_post.php?pid=' . $post_id . '" method="post"><input class="btn btn-danger"  type="submit" name="del" value="Delete" /><input class="btn btn-warning" type="submit" name="up" value="Update" /></form>';
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "</br>";
                }
                echo "</div>";
            } else {
                echo "0 results";
            }
        } else {
            echo "<p>Something went wrong! :(</p>";
        }
        ?>
    </div>
</body>
<script>
    const f = document.getElementById('form');
    const p = document.getElementById('posts');
    showForm = () => {
        f.style.display = 'block';
        p.style.display = 'none';
        document.getElementById('formBtn').className += " active";
        document.getElementById('postsBtn').className = "btn btn-secondary";
    }

    showPosts = () => {
        p.style.display = 'block';
        f.style.display = 'none';
        document.getElementById('formBtn').className += " active";
        document.getElementById('postsBtn').className = "btn btn-secondary";

    }

    toggle = () => {
        var checkBox = document.getElementById("myCheck");
        var text = document.getElementById("text");

        if (checkBox.checked == true) {
            document.documentElement.setAttribute('data-theme', 'dark');
            document.getElementById('dark').innerHTML = "Disable Dark Mode";
        } else {
            document.documentElement.setAttribute('data-theme', 'light');
            document.getElementById('dark').innerHTML = "Enable Dark Mode";

        }
    }

    mine = () => {
        location.assign('product_form.php?only=<?php echo $_SESSION['mn']; ?>');
    }
</script>

</html>