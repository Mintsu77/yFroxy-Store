<?php 

    session_start();

    if (isset($_POST['username'])) {

        include('backend/connect.php');

        $username = $_POST['username'];
        $password = $_POST['password'];
        

        $query = "SELECT * FROM tbl_user WHERE username = '$username' AND password = '$password'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['id'] = $row['id'];
            $_SESSION['user'] = $row['name'];
            $_SESSION['level_id'] = $row['level_id'];

            if ($_SESSION['level_id'] == '1') {
                header("Location: backend/index.php");
            }

            if ($_SESSION['level_id'] == '2') {
                header("Location: index.php");
            }
        } else {
            echo "<script>alert('Username or password incorrect!');</script>";
        }

    } else {
        header("Location: index.php");
    }


?>