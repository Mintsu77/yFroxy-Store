<?php 
    session_start();
    
        if(isset($_POST['submit'])) {
            include("backend/connect.php");
            $username = $_POST['username'];
            $password = $_POST['password'];

            $user_check = "SELECT * FROM tbl_user
                        WHERE username = '$username' LIMIT 1";
            $result = mysqli_query($conn,$user_check);
            $user = mysqli_fetch_assoc($result);

            if ($user['username'] === $username) {
                echo "<script>alert('Username already exists');</script>";
                
            } else {
                $m_passwordenc = ($password);

                $query = "INSERT INTO tbl_user (username,password,level_id)
                        VALUE ('$username', '$m_passwordenc', '2')";

                $result = mysqli_query($conn,$query);

                    if ($result) {
                        $_SESSION['success'] = "Insert user successfuly";
                        header("Location: index.php");
                    }else {
                        $_SESSION['error'] = "Something went wrong";
                        header("Location: index.php");
                    }
                }
        }
?>