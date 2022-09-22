<?php  include('header.php')?>
<?php  require('config.php')?>

<?php
function getUserFullname($u_id){
  require 'config.php';
  $username = "";
  $sql = "SELECT * FROM users WHERE u_id = '".$u_id."'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $username = $row['u_fname'].' '.$row['u_mname'].' '.$row['u_lname'] .' '.$row['u_ext'];
    } 
  } 
  return $username;
}
?>
<?php 

if (isset($_GET['search'])) {
  $sql = "SELECT * FROM feedbacks WHERE f_content LIKE '%".$_GET['search']."%' 
  OR f_status LIKE '%".$_GET['search']."%' ORDER BY f_date ASC";
}else{
 $sql = "SELECT * FROM feedbacks ORDER by f_date ASC";
}

$result = $conn->query($sql);
?>

<div class="row">
  <div class="col-10 mx-auto">


    <nav class="navbar navbar-light bg-light justify-content-between">
      <h2>Feedbacks</h2>
      <form class="form-inline" method="POST" action="processors/search.php?from=feedbacks">
        <input name="c_search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> 
        <button class="btn btn-success my-2 my-sm-0 d-none d-sm-inline" type="submit">Search</button>
      </form>
    </nav>  
    <div class="col-12 bg-light">

      <?php 
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          ?>

          <div class="p-3 border-bottom">
            <?php if($row['f_status'] == "Replied"){ echo '<span class="float-right badge badge-success">Replied</span>';}?>
            <?php if($row['f_status'] == "Edited"){ echo '<span class="float-right badge badge-info">Edited</span>';}?>
            <?php if($row['f_status'] == "New"){ echo '<span class="float-right badge badge-danger">New</span>';}?>
            <?php echo $row['f_content']?><br>
            <small>by: <?php echo getUserFullname($row['f_u_id'])?></small>
            <small>0n: <?php echo date("M d,Y h:i", strtotime($row['f_date']))?></small>
            <small><a href="" class="a-link" data-toggle="modal" 
              data-target="#modal<?php echo $row['f_id']?>" >Write a reply</a></small>
            </div>

            <div class="modal fade" id="modal<?php echo $row['f_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reply  to <?php echo getUserFullname($row['f_u_id'])?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                    <form  method="POST"
                    action="processors/add_feedback.php?reply-feedback=true&f_id=<?php echo $row['f_id']?>">
                    <div class="form-group">
                      <label for="reply">Reply</label>
                      <textarea name="reply" class="form-control" placeholder="Your Reply" required="required" rows="10"></textarea>
                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Done</button>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>

          <?php  
        }
      }else{
        echo '<h6 class="p-3">No Feedback found</h6>';
      }
      $conn->close();
      ?>

    </div>
  </div>  
</div>  
<?php  include('footer.php')?>
