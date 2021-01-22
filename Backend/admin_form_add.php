<?php include('h.php');?>
<?php include('style.php');?>
<?php
  include('connect.php');  
  $query = "SELECT * FROM tbl_level ORDER BY level_id asc" or die("Error:" . mysqli_error());
  $result = mysqli_query($conn, $query);
?>

<body class="admin-form-body">
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <form name="admin" action="admin_form_add_db.php" method="POST" id="admin" class="signup-form">
                        <h2>ADD </h2>
                    <div class="form-group">
                        <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="username" id="username" placeholder="UserName"/>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-6">
                        <select name="level_id" class="form-input" required>
                        <option value="level_id">Level</option>
                        <?php foreach($result as $results){?>
                         <option value="<?php echo $results["level_id"];?>">
                         <?php echo $results["level"]; ?></option>
                        <?php } ?>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="password" id="password" placeholder="Password" pattern="^[a-zA-Z0-9]+$" minlength="2"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit submit" value="SAVE"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>