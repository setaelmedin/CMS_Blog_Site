<?php
if (isset($_POST["create_user"])) {
    $user_firstname = $_POST["user_firstname"];
    $user_lastname = $_POST["user_lastname"];
    $user_role = $_POST["user_role"];
    // $post_image = $_FILES["image"]["name"];
    // $post_image_temp = $_FILES["image"]["tmp_name"];
    $user_username = $_POST["username"];
    $user_email = $_POST["user_email"];
    $user_password = $_POST["password"];

    // $post_date = date("d-m-y");

    // move_uploaded_file($post_image_temp, "../images/$post_image");


    $query = "INSERT INTO users(user_firstname, user_lastname, user_role, username, user_email, password) ";

    $query .= "VALUES('{$user_firstname}','{$user_lastname}','{$user_role}','{$user_username}','{$user_email}', '{$user_password}') ";

    $create_user_query = mysqli_query($connection, $query);
    if (!$create_user_query) {
        die("QUERY FAILED " . mysqli_error($connection));
    }
}


?>


<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="user_firstname">First name</label>
        <input type="text" name="user_firstname" class="form-control">
    </div>

    <div class="form-group">
        <label for="user_lastname">Last name</label>
        <input type="text" name="user_lastname" class="form-control">
    </div>

    <div class="form-group">
        <select name="user_role" id="">
            <option value="subscriber">Select role</option>
            <option value="admin">Admin</option>
            <option value="subscriber">Subscriber</option>
        </select>
    </div>

    <!-- <div class="form-group">
        <label for="post_image"></label>
        <input type="file" name="image">
    </div> -->

    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username">
    </div>

    <div class="form-group">
        <label for="user_email">Email</label>
        <input type="email" class="form-control" name="user_email">
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password">
    </div>


    <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_user" value="Add user">
    </div>

</form>