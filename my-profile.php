<?php  include('header.php')?>



<?php
$informations = array();
if(isset($user)){
  $sql = "SELECT * FROM other_inf WHERE inf_u_id='".$user['u_id']."'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      array_push($informations, $row);
    }
  }$conn->close();
}
?>  

<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <div class="row">
       <div class="col-lg-12 p-2">
        <div class="border p-2 rounded d-flex flex-column align-items-center text-center bg-light">
          <img src="images/profile-<?php echo $user['u_gender']?>.jpg" class="img-fluid mb-1" width="200">
          <h4><?php echo $fullname?></h4>
          <span class="text-secondary">@<?php echo $user['u_username']?></span>
          <?php 
          if($user['u_test_attempt']==1){
            echo '<span class="badge badge-primary">Tested</span>';
          }else{
            echo '<span class="badge badge-danger">Not Tested</span>';
          }
          ?>
        </div>
      </div>
      <div class="col-lg-12 p-2">
        <div class="border p-2 rounded bg-light">
          <header>Login Infomations</header>
          <div class="row border-bottom p-2">
            <div class="col-sm-3">
              <b>Email:</b> 
            </div>
            <div class="col-sm-7 text-secondary">
             <?php echo $user['u_email']?>
           </div>
         </div>
         <div class="row border-bottom p-2">
          <div class="col-sm-3">
            <b>Username:</b> 
          </div>
          <div class="col-sm-7 text-secondary">
            <?php echo $user['u_username']?>
          </div>
        </div>
        <div class="row border-bottom p-2">
          <div class="col-sm-3">
            <b>Password</b> 
          </div>
          <div class="col-sm-7 text-secondary">
           <?php echo str_repeat("*", strlen($user['u_password']))?>
         </div>
       </div>
       <div class="row p-2">
        <div class="col-sm-3 d-flex">
          <button class="btn btn-info mr-1" data-toggle="modal" data-target="#login">Edit</button>
          <a href="processors/edit-information.php?type=reset" class="btn btn-danger text-white">Reset Password</a>
        </div>  
      </div>
    </div>
  </div>
</div>
</div>

<div class="col-lg-6">
  <div class="row">
    <div class="col-lg-12 p-2">
      <div class="border p-2 rounded bg-light">
        <header>Personal Infomations</header>
        <div class="row border-bottom p-2">
          <div class="col-sm-3">
            <b>Fullname:</b> 
          </div>
          <div class="col-sm-7 text-secondary">
           <?php echo $fullname?>
         </div>
       </div>
       <div class="row border-bottom p-2">
        <div class="col-sm-3">
          <b>Email:</b> 
        </div>
        <div class="col-sm-7 text-secondary">
          <?php echo $user['u_email']?>
        </div>
      </div>
      <div class="row border-bottom p-2">
        <div class="col-sm-3">
          <b>Mobile:</b> 
        </div>
        <div class="col-sm-7 text-secondary">
          <?php echo $user['u_mobile']?>
        </div>
      </div>
      <div class="row border-bottom p-2">
        <div class="col-sm-3">
          <b>Gender: </b> 
        </div>
        <div class="col-sm-7 text-secondary">
          <?php echo $user['u_gender']?>
        </div>
      </div>
      <div class="row border-bottom p-2">
        <div class="col-sm-3">
          <b>Adress:</b> 
        </div>
        <div class="col-sm-7 text-secondary">
          <?php echo $user['u_address']?>
        </div>
      </div>
      <div class="row border-bottom p-2">
        <div class="col-sm-3">
          <b>Status:</b> 
        </div>
        <div class="col-sm-7 text-secondary">
          <?php echo $user['u_status']?>
        </div>
      </div>
      <div class="row border-bottom p-2">
        <div class="col-sm-3">
          <b>Religion:</b> 
        </div>
        <div class="col-sm-7 text-secondary">
          <?php echo $user['u_religion']?>
        </div>
      </div>
      <div class="row border-bottom p-2 d-none">
        <div class="col-sm-3">
          <b>Last School Attended:</b> 
        </div>
        <div class="col-sm-7 text-secondary">
          <?php echo $user['u_school']?>
        </div>
      </div>
      <div class="row border-bottom p-2 d-none">
        <div class="col-sm-3">
          <b>Year Graduated:</b> 
        </div>
        <div class="col-sm-7 text-secondary">
          <?php echo $user['u_year']?>
        </div>
      </div>


      <div class="row p-2">
        <div class="col-sm-3">
          <button class="btn btn-info" data-toggle="modal" data-target="#personal">Edit</button>
        </div>  
      </div>
    </div>
  </div>

  <div class="col-lg-12 p-2">
    <div class="border p-2 rounded bg-light">
      <header>Other Infomations</header>

      <?php foreach($informations as $inf){
        ?>
        <div class="row border-bottom p-2">
          <div class="col-sm-12">
           <small class="float-right">
            <a href="processors/edit-information.php?type=delete&inf_id=<?php echo $inf['inf_id']?>" 
              class="text-danger">
              <i class="bi bi-x-circle bi-1x"></i>
            </a>

          </small>
          <b><?php echo $inf['inf_title']?></b> 
        </div>
        <div class="col-sm-12 text-secondary">
          <?php echo $inf['inf_content']?>
        </div>
      </div>
    <?php }?>
    <div class="row p-2">
      <div class="col-sm-3">
        <button class="btn btn-primary" data-toggle="modal" data-target="#addinformation">Add Information</button>
      </div>  
    </div>
  </div>
</div>

</div>

</div>  


</div>

</div>

<!--Modal for Personal Information-->
<div class="modal fade" id="personal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Personal Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="processors/edit-information.php?type=personal" method="POST">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="fname">Firstname</label>
                <input name="fname" type="text" class="form-control" 
                placeholder="Firstname" required="required" 
                value="<?php echo $user['u_fname']?>">
              </div>
              <div class="form-group">
                <label for="mname">Middle Name</label>
                <input name="mname" type="text" class="form-control" 
                placeholder="Middle Name"  
                value="<?php echo $user['u_mname']?>">
              </div>
              <div class="form-group">
                <label for="lname">Last Name</label>
                <input name="lname" type="text" class="form-control" 
                placeholder="Last Name" required="required" 
                value="<?php echo $user['u_lname']?>">
              </div>
              <div class="form-group">
                <label for="xname">Extension Name</label>
                <input name="xname" type="text" class="form-control" 
                placeholder="Extension Name"  
                value="<?php echo $user['u_ext']?>">
              </div>             
              
            </div>
            <div class="col-lg-6">
             <div class="form-group">
              <label for="mobile">Mobile</label>
              <input name="mobile" type="number" class="form-control" placeholder="Enter Mobile" required="required" 
              value="<?php echo $user['u_mobile']?>">
            </div>

            <div class="form-group">
              <label for="gender">Gender</label>
              <select class="form-control" name="gender">
                <option value="Male" <?php if($user['u_gender'] == "Male"){echo 'selected';}?>>Male</option>
                <option value="Female" <?php if($user['u_gender'] == "Female"){echo 'selected';}?>>Female</option>
              </select>
            </div>

            <div class="form-group">
             <label for="status">Status</label>
             <select class="form-control" name="status">
              <option value="Married" <?php if($user['u_status'] == "Married"){echo 'selected';}?>>Married</option>
              <option value="Single" <?php if($user['u_status'] == "Single"){echo 'selected';}?>>Single</option>
              <option value="Widowed" <?php if($user['u_status'] == "Widowed"){echo 'selected';}?>>Widowed</option>
            </select>
          </div>
          <div class="form-group">
            <label for="religion">Religion</label>
            <input name="religion" type="text" class="form-control" placeholder="Enter Religion"
            value="<?php echo $user['u_religion']?>">
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input name="address" type="text" class="form-control" placeholder="Enter Address"
            value="<?php echo $user['u_address']?>">
          </div>
          <div class="form-group d-none">
            <label for="school">Last School Attended</label>
            <input name="school" type="text" class="form-control" placeholder="Enter School Name"
            value="<?php echo $user['u_school']?>">
          </div>
          <div class="form-group d-none">
            <label for="year">Year Graduated</label>
            <input name="year" type="number" class="form-control" placeholder="Enter Year" 
            value="<?php echo $user['u_school']?>">
          </div>
        </div>
      </div>




      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save Changes </button>
      </div>
    </form>
  </div>
</div>
</div>
</div>

<!--Modal for Login Information-->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Login Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="processors/edit-information.php?type=login" method="POST">
          <div class="form-group">
            <label for="username">Username</label>
            <input name="username" type="text" class="form-control" placeholder="Enter Username" required="required" 
            value="<?php echo $user['u_username']?>">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input name="password" type="password" class="form-control" placeholder="Enter Address" required="required" 
            value="<?php echo $user['u_password']?>">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" ">Save Changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!--Modal for Add Information-->
<div class="modal fade" id="addinformation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="processors/edit-information.php?type=add" method="POST">
          <div class="form-group">
            <label for="title">Title</label>
            <input name="title" type="text" class="form-control" placeholder="ex. Birthday, Favorite Place" required="required" 
            value="">
          </div>
          <div class="form-group">
            <label for="content">Content</label>
            <input name="content" type="text" class="form-control" placeholder="Enter Information" required="required" 
            value="">
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary" ">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php  include('footer.php')?>