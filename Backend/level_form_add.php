<?php include('h.php');?>
<div class="container">
  <p> </p>
    <div class="row">
      <div class="col-md-12">
        <form  name="admin" action="level_form_add_db.php" method="POST" id="admin" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="level" type="text" required class="form-control" id="level" placeholder="level name" pattern="^[a-zA-Z0-9]+$" title="A-Z or Number Only" minlength="2"  />
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-6" align="right">
              <button type="submit" class="btn btn-dark btn-sm" id="btn"> SAVE </button>      
            </div> 
          </div>
        </form>
      </div>
    </div>
</div>