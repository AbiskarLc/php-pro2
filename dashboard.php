<?php include('html/header.php');?>


<?php
include('link/connect_database.php');
session_start();
if(isset($_SESSION['login'])){
  


$id = $_SESSION['login_id'];

$query = "SELECT * FROM user1 WHERE id='$id'";

$result = mysqli_query($connect, $query);

if(mysqli_num_rows($result)!=1){
  die("you are not allowed to edit ");
}
$row = mysqli_fetch_assoc($result);

  $exp = "SELECT * FROM experience WHERE user_id='$id'";
  $res = mysqli_query($connect,$exp);
  // $exp_row = mysqli_fetch_assoc($res);

  
?>

<style>
   .image-body>input{
    display: none;
   }
</style>
<div class="container mt-4">
  <div class="row">
    <div class="col-4">
       <div class="image-body">
        <label for="file-upload">
          <img src="img/profile.jpg" alt="" style="width:200px;height:200px;border-radius:50%">
          </label>
        
          <input type="file" name="image" class="form-control"/>
        
       </div>
       <h3><?php echo $row['full_name']; ?></h3>
    </div>
    <div class="col-8">
      <div class="card border-primary">
        <div class="card-header">
            About 
            <a href="#" style="float:right;"  data-bs-toggle="modal" data-bs-target="#about"><i class="fa-solid fa-pencil"></i></a>
        </div>
        <div class="card-body">
            <p><?php echo $row['about']; ?></p>
        </div>
      </div>
    </div>
  </div>
  </div>
<div class="container">
  <div class="row mt-4">
   <div class="col-4">
   <div class="card border-info"> 
            <div class="card-header">
                Skills
                <a href="#" style="float:right;" data-bs-toggle="modal" data-bs-target="#skill"><i class="fa-solid fa-pencil"></i></a>
            </div>
            <div class="card-body">
            <ul class="list-group skill">
                <li class="list-group-item">Web design</li>
                <li class="list-group-item">Web Development with PHP</li>
                <li class="list-group-item">Java </li>
                <li class="list-group-item">C/C++</li>
                <li class="list-group-item">Android Mobile application</li>
                </ul>
            </div>
        </div>
        <br>
        <div class="card">
       <div class="card-header">
        Education
        <a href="#" data-bs-toggle="modal" data-bs-target="#education" style="float:right"><i class="fa-solid fa-pencil"></i></a>
       </div>
       <div class="card-body">
          <ul class="list-group">
            <li class="list-group-item">SEE</li>
            <li class="list-group-item">+2</li>
          </ul>
       </div>
    </div>
   </div>
   <div class="col-8">
   <div class="card">
                <div class="card-header">
                    Experience
                    <a href="#" style="float:right;" data-bs-toggle="modal" data-bs-target="#experience"><i class="fa-solid fa-pencil"></i></a>
                </div>
                <div class="card-body">
                       <div class="exp border-info">
                        <?php while($exp_row=mysqli_fetch_assoc($res)){ ?>
                          <h5><?php echo $exp_row['job_title']; ?></h5>
                          <hr/>
                        <small><?php echo $exp_row['company_name']; ?></small><br/><small><?php echo $exp_row['join_date'] ?></small> , <small><?php echo $exp_row['left_date'] ?></small>
                      <?php  } ?>
                       
                        
                       </div>
                     
                </div>
            </div>
   </div>
  </div>

  </div>

<!--All are modal -->
<div class="modal fade" id="about" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">About</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="link/update_user.php" method="post">
      <div class="modal-body">
      <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" name="full_name" class="form-control" aria-describedby="emailHelp" value="<?php echo $row['full_name']; ?>">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
    <input type="text" name="address" class="form-control" aria-describedby="emailHelp" value="<?php echo $row['address']; ?>">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone no:</label>
    <input type="text" name="number" class="form-control" aria-describedby="emailHelp" value="<?php echo $row['contact_no']; ?>">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">About</label>
    <input type="text" name="about" value="<?php echo $row['about']; ?>"class="form-control" aria-describedby="emailHelp">
    
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--skill modal -->
<div class="modal fade" id="skill" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Skill</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="post">
      <div class="modal-body">
      <div class="mb-3">
    <label class="form-label">Skill Name</label>
    <input type="text" name="skill"class="form-control" aria-describedby="emailHelp">
    
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!--education modal -->
<div class="modal fade" id="education" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Degree</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="post">
      <div class="modal-body">
      <div class="mb-3">
    <label class="form-label">Degree Name</label>
    <input type="text" name="degree_name" class="form-control" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label class="form-label">Passed year</label>
    <input type="date" name="passed_date" class="form-control" aria-describedby="emailHelp">
    
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>


<!--experience modal -->

<div class="modal fade" id="experience" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Experience</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="link/update_exp.php" method="post">
      <div class="modal-body">
      <div class="mb-3">
    <label class="form-label">Job Title</label>
    <input type="text" name="job_title" class="form-control" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label class="form-label">Company Name</label>
    <input type="text" name="cname" class="form-control" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label class="form-label">Joined Date</label>
    <input type="date" name="j_date" class="form-control" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label class="form-label">Left Date</label>
    <input type="date" name="l_date" class="form-control" aria-describedby="emailHelp">
    
  </div>
  <select name="user_id">
        <option value="<?php echo $row['id']; ?>"></option>
      </select>
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Save</button>
      </div>
    
      </form>
    </div>
  </div>
</div>

<?php } else { ?>
 <?php header("Location:login.php?errmsg:login first");
}?>
<?php include('html/footer.php');?>