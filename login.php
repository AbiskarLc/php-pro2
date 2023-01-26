<?php
include 'html/header.php';
include 'html/footer.php';
?>


<style>
  body{
    background-color: #a2b9bc;
   
  }
.box{
  width: 500px;
  height: auto;
  position: relative;
  left: 450px;
  border: 2px solid #034f84;
  background-color: #034f84;
  padding: 20px;
  margin-top: 10px;
}

</style>


<div class="box">
    <h2>Login</h2>
    <div class="card-p3">
      <?php if(isset($_GET['errmsg'])){?>
        <div class="alert alert-danger"><?php echo $_GET['errmsg'];?></div>
   <?php   } ?>
   
    </div>
    <form method="post" action="link/login_process.php">
        
      
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control bg-secondary text-light" id="Email" placeholder="Email" require>
        </div>
        <div class="mb-3">
          <label for="pass1" class="form-label">Password</label>
          <input type="password" name="pass" class="form-control bg-secondary text-light" id="pass1" placeholder="Password" require>
        </div>
        
        
        <button class="btn btn-success">Login</button>
        </div>
        
        
        </form>
        
</div>