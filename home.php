<?php  include('header.php')?>

<div class="container">
  <div class="row">
   <h3>Tour and Overiew of the System</h3>
   <div class="container p-3">
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="./carousel-images/1.PNG" alt="First slide" class="img-fluid">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./carousel-images/2.PNG" alt="First slide" class="img-fluid">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./carousel-images/3.PNG" alt="First slide" class="img-fluid">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./carousel-images/4.PNG" alt="First slide" class="img-fluid">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./carousel-images/5.PNG" alt="First slide" class="img-fluid">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="./carousel-images/6.PNG" alt="First slide" class="img-fluid">
        </div>
         <div class="carousel-item">
          <img class="d-block w-100" src="./carousel-images/7.PNG" alt="First slide" class="img-fluid">
        </div>
       
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true" ></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

  <div class="line"></div>

  <?php 
  require('config.php');
  $infos = array();
  $sql = "SELECT * FROM about_info";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      array_push($infos, $row);
    }
  }
  ?>

  <div class="container">
    <div class="row">
      <?php foreach($infos as $info){?>
        <h3><?php echo $info['ab_title']?></h3>
        <?php 
        $content = str_replace(array("\r\n", "\n"), array("<br />", "<br />"), $info['ab_content']);
        ?>
        <p class="text-justify"><?php echo  $content;?><p>  
        <div class="line"></div>
      <?php }?>
    </div>
  </div>

</div>
</div>

<?php  include('footer.php')?>