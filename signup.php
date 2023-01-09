

<?php
include 'html/header.php';
include 'html/footer.php';
?>

    <div class="container mt-3">
        <h2>Signup</h2>
        <form method="POST" action="link/signup_process.php">
            <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="name" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input type="text" name="address"class="form-control" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputcontact" class="form-label">Phone No:</label>
    <input type="text" name="number" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp"  class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
  </div>

 
  <button type="submit" class="btn btn-success">Save</button>
</form>

    </div>
