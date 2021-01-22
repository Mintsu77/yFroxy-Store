<?php include('style.php');?>
<?php
    include('connect.php');  
    $a_id = $_REQUEST["ID"];

    $sql = "SELECT * FROM tbl_user WHERE id='$id' ";
    $result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
    $row = mysqli_fetch_array($result);
    extract($row);
?>

<?php include('h.php');?>

<body class="admin-form-body">
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <form name="admin" action="admin_form_edit_db.php" method="POST" id="admin" class="signup-form">
                        <h2>EDIT ADMIN </h2>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <input type="text" class="form-input" name="username" id="username" value="<?=$username;?>" placeholder="Your Name"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="password" id="password" value="<?=$password;?>" placeholder="Password" pattern="^[a-zA-Z0-9]+$" minlength="2"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="name" id="name" value="<?=$name;?>" placeholder="UserName"/>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" value="<?=$email;?>" placeholder="Email"/>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit submit" value="SAVE"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>