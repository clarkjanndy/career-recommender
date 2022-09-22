<?php  
include('header.php');
include ('test-assets/courses.php');
?>


<div class="container">
  <nav class="row navbar navbar-light bg-light justify-content-between rounded">
    <h2>Test Result</h2>
  </nav>

  <?php 
  if($_SESSION['u_test_attempt'] == 1){
    ?>


    <?php
    function generateRecommendations($r,$i,$a,$s,$e,$c){
     require 'config.php';
     $scores = [
      'r' =>  $r,
      'i' =>  $i,
      'a' =>  $a,
      's' =>  $s,
      'e' =>  $e,
      'c' =>  $c
    ];
    arsort($scores);

    

    $recommendations = array();
    $i=0;
    foreach($scores as $category => $rank) {
      $sql = "SELECT * FROM careers WHERE c_category = '".$category."' AND c_rank = '".$rank."'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          array_push($recommendations, $row);
          break;
        } 
      } 

      $i++;
      if($i==3){
        break;
      }
      break;
    }$conn->close();
    $_SESSION['recommendations'] = $recommendations;
  }
  
  require 'config.php';
  $sql = "SELECT * FROM scores WHERE s_user_id ='".$_SESSION['u_id']."'";

  $result = $conn->query($sql);
  if ($result->num_rows == 1) {
    while($row = $result->fetch_assoc()) {
      $r_score = $row['s_realistic'];
      $i_score = $row['s_investigative'];
      $a_score = $row['s_artistic'];
      $s_score = $row['s_social'];
      $e_score = $row['s_enterprising'];
      $c_score = $row['s_conventional'];
      $date = $row['s_date'];
      generateRecommendations($r_score,$i_score,$a_score,$s_score,$e_score,$c_score);
    }
  }

  function echoPercentage($number){
    $percentage = ($number/7)*100;
    echo round($percentage, 2)."%";
  }

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

  function getReplies($f_id){
    require 'config.php';
    $replies = array();
    $sql = "SELECT * FROM replies WHERE r_f_id = '".$f_id."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        array_push($replies, $row);
      } 
    } 
    return $replies;
  }
  ?>

  <div class="row d-flex align-items-center justify-content-center">
   <div class="col-12 rounded bg-light border">
    <div class="header">RIASEC stands for...</b>
    </div>
    <div class="box-content row">
      <div class="col">
       <div class="">
        <span><b>R = Realistic</b></span>
        <div>People with high score in the Realistic category are often good at mechanical or athletic jobs.</div>
      </div>
      <div>
        <span><b>I = Investigative</b></span>
        <div>People with high score in the Investigative category likes to watch, learn, analyze and solve problems. </div>
      </div>
      <div>
        <span><b>A = Artistic</b></span>
        <div>People with high score in the Artistic category like to work in unstructured situations
        where they can use their creativity.</div>
      </div>
    </div>
    <div class="col">
      <div>
        <span><b>S = Social</b></span>
        <div>People with high score in the Social category like to work with other people,
        rather than things.</div>
      </div>
      <div>
        <span><b>E = Enterprising</b></span>
        <div>People with high score in the Enterprising category like to work with others and enjoy
        persuading and performing.</div>
      </div>
      <div>
        <span><b>C = Conventional</b></span>
        <div>People with high score in the Conventional category are very detail oriented,organized
        and like to work with data.</div>
      </div>

    </div>
  </div>
</div>

<div class="col-12 rounded bg-light border">
  <div class="header">RIASEC Test Result for <b><?php echo getUserFullname($_SESSION['u_id'])?></b>
  </div>
  <div class="box-content row">
    <div class="col">
     <div class="result-item" style="width: <?php echoPercentage($r_score);?>;">
      <span>Realistic&nbsp;=&nbsp;<?php echoPercentage($r_score);?></span>
    </div>
    <div class="result-item" style="width: <?php echoPercentage($i_score);?>;">
      <span>Investigative&nbsp;=&nbsp;<?php echoPercentage($i_score);?></span>
    </div>
    <div class="result-item" style="width: <?php echoPercentage($a_score);?>;">
      <span>Artistic&nbsp;=&nbsp;<?php echoPercentage($a_score);?></span>
    </div>
  </div>
  <div class="col">
    <div class="result-item" style="width: <?php echoPercentage($s_score);?>;">
      <span>Social&nbsp;=&nbsp;<?php echoPercentage($s_score);?></span>
    </div>
    <div class="result-item" style="width: <?php echoPercentage($e_score);?>;">
      <span>Enterprising&nbsp;=&nbsp;<?php echoPercentage($e_score);?></span>
    </div>
    <div class="result-item" style="width: <?php echoPercentage($c_score);?>;">
      <span>Conventional&nbsp;=&nbsp;<?php echoPercentage($c_score);?></span>
    </div>

  </div>
</div>
</div>

<div class="m-3"></div>

<div class="col-12 rounded bg-light border">
  <div class="header"><b><?php echo getUserFullname($_SESSION['u_id'])?></b> You are Most Likely to take up...
    <div class="container mb-3 mt-3"></div>
    <div class="box-content row">

      <?php 
      foreach($_SESSION['recommendations'] as $row){
        ?>
        <!-- Gallery item -->
        <div class="col-lg-12 mb-4 gallery-item">
          <div class="bg-white rounded shadow-sm"><img src="<?php echo $row["c_image"];?>" alt="<?php echo $row["c_name"];?>" class="img-fluid card-img-top gallery-image">
            <div class="p-4">
              <h5> <a href="#" class="text-dark text-truncate">
                <?php echo $row["c_name"];
                $career = $row["c_name"];
                ?></a></h5>
                <p class="small text-muted mb-0 text-truncate"><?php echo $row["c_desc"];?></p>
                <div class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                  <p></p>
                  <button
                  type="button"
                  class="btn btn-primary px-3  text-white" 
                  data-toggle="modal" 
                  data-target="#modal<?php echo $row['c_id']?>" 
                  >Overview</button>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-12 mb-4 gallery-item">
            <div class="bg-white rounded shadow-sm">
              <div class="p-4">
               Related Courses to  <?php echo $row["c_name"];?>
               <?php 
               $related = getRelatedCourses($row["c_name"]);
               foreach ($related as $r) {
               ?>
               <li><?php echo $r?></li>
             <?php }?>

             </div>
           </div>
         </div>
       </div>
       <!-- End -->

       <div class="modal fade" id="modal<?php echo $row['c_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel"><?php echo $row['c_name']?></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-6">
                  <img src="<?php echo $row['c_image']?>" class="img-fluid">
                </div>
                <div class="col-lg-6 text-justify">
                  <p><?php echo $row["c_desc"];?></p>
                </div>
              </div>
              <div class="row  p-2">
                <small class="container">Sources: </small>
                <small class="container text-truncate"><a href="<?php echo $row['c_image']?>"><?php echo $row['c_image']?></a></small>
                <small class="container text-truncate"><a target="blank" href="<?php echo $row['c_desc_link']?>"><?php echo $row['c_desc_link']?></a></small>             
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <?php break;}?>
    </div>

    <div class="footer">


      <?php 
      require 'config.php';
      $sql = "SELECT * FROM feedbacks WHERE f_u_id ='".$_SESSION['u_id']."'";

      $result = $conn->query($sql);
      if ($result->num_rows == 1) {?>
        <?php while($row = $result->fetch_assoc()) {?>
          <a href="test.pdf" target="_blank" class="btn btn-success float-right">Print My Result</a> 
         <label>My Feedback</label>

         <div class="container">
          <div class="border-bottom p-3">
            <div class="the-feedback"><?php echo $row['f_content']?></div>
            <small>by: <?php echo getUserFullname($row['f_u_id'])?></small>
            <small>0n: <?php echo date("M d,Y h:i", strtotime($row['f_date']))?></small>
            <small class="a-link edit-btn" style="">Edit my Feedback </small>
          </div>
          <?php
          $replies = getReplies($row['f_id']);
          foreach($replies as $reply){
            ?>
            <div class="border-bottom p-3" style="margin-left: 5%">
              <?php echo $reply['r_content']?><br>
              <small>by: <?php echo getUserFullname($reply['r_u_id'])?></small>
              <small>0n: <?php echo date("M d,Y h:i", strtotime($reply['r_date']))?></small>
            </div>
          <?php }?>
        </div>

        <form action="processors/add_feedback.php?edit-feedback=true" method="POST" class="reply-form">
         <div class="form-group">
          <textarea name="feedback" class="form-control to-be-filled" placeholder="Your Reply" required="required" rows="5"
          value=""></textarea> 
        </div>
        <div class="justify-content-end d-flex">
          <button type="button" class="btn btn-danger cancel-btn mr-1">Cancel</button>
          <button type="submit" class="btn btn-info" onclick="return confirm('Confirm Submission?')">Save Changes</button>

        </div>
      </form>
    <?php }?>

    <?php 
  }else{
    ?>
    <form action="processors/add_feedback.php?add-feedback=true" method="POST">
     <div class="form-group">
       <a href="test.pdf" class="btn btn-success float-right">Print My Result</a> 
       <label for="feedback">To improve our system, we need your feedback. Please type your feedback here.</label>
       <div class="mb-3"> </div>
       <textarea name="feedback" type="text" class="form-control" placeholder="Your Feedback" required="required" rows="5"
       value=""></textarea> 
     </div>
     <div class="justify-content-end d-flex">
      <button type="submit" class="btn btn-info" onclick="return confirm('Confirm Submission?')">Submit My Feedback</button>
    </div>
  </form>
<?php }?>

</div>

</div>
</div>
<?php
}else{?>
  <center>
    <div>You did not take the test. Take the test first.</div>
    <a href="controller.php?page=take-test" class="btn btn-primary">Take the Test</a>
  </center> 
<?php }?>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js" ></script>
<script>
  const edit_btn = document.querySelector(".edit-btn");
  const reply_form = document.querySelector(".reply-form");
  const text_area = document.querySelector(".to-be-filled");
  const the_feedback = document.querySelector(".the-feedback");
  const cancel_btn = document.querySelector(".cancel-btn");
  


  edit_btn.onclick = ()=>{
    reply_form.classList.add("show");

    text_area.value = the_feedback.textContent;
  }

  cancel_btn.onclick = ()=>{
    reply_form.classList.remove("show");
  }

</script>

<?php 
include('print.php');


// Instantiation of FPDF class
$pdf = new PDF();

// Define alias for number of pages
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFont('Arial','',15);
$pdf->Cell(60, 10, 'Name of Examinee: ');
$pdf->SetFont('Arial','B',15);
$pdf->Cell(10, 10, ''.$fullname);

$pdf->Ln(10);

$pdf->SetFont('Arial','',15);
$pdf->Cell(60, 10, 'Date of Examination: ');
$pdf->SetFont('Arial','B',15);
$pdf->Cell(10, 10, ''.$date);

$pdf->Ln(10);

$pdf->SetFont('Arial','',15);
$pdf->Cell(60, 10, 'Recommended Career: ');
$pdf->SetFont('Arial','B',15);
$pdf->Cell(10, 10, ''.$career);

$pdf->Ln(10);

$pdf->SetFont('Arial','',15);
$pdf->Cell(60, 10, 'Related Courses: ');
$pdf->SetFont('Arial','B',15);

for($i = 0; $i < count($related); $i++){
  if($i != 0){
    $pdf->Cell(60, 10, '');
  }
  $pdf->Cell(60, 10, ''.$related[$i], 0,1);
}

$filename="test.pdf";
$pdf->Output($filename, 'F');
?>

<?php  include('footer.php')?>