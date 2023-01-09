<?php
include 'html/header.php';
include 'html/footer.php';
?>


<div class="container mt-3">
    <h2>Login</h2>
    <div class="card-p3">
     <div class="alert alert-danger"> <?php include('html/message.php') ?></div>
    </div>
    <form method="post" action="link/login_process.php">
        

        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="Email" placeholder="Email" require>
        </div>
        <div class="mb-3">
          <label for="pass1" class="form-label">Password</label>
          <input type="password" name="pass" class="form-control" id="pass1" placeholder="Password" require>
        </div>
        
        
        <button class="btn btn-warning">Login</button>
        </div>
        
        
        </form>
</div>