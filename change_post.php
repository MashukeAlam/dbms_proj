<?php
    session_start();
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

    if(isset($_POST['del'])) {
        echo 'Delete requested!';
        echo '<script>var isNo = confirm("You sure wanna delete this post bro ?"); if(!isNo) {location.assign("product_form.php");}else{location.assign("delete_post.php?id='. $_GET['pid'] .'");} </script>';
        echo $_GET['pid'];
    } else {
        echo 'Update requested!';
        redir('update_post.php?id=' . $_GET['pid']);
        echo $_GET['pid'];
    }



?>