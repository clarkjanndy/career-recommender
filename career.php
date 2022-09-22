<?php  include('header.php')?>
<?php  require('config.php')?>


<?php 
if (isset($_GET['search'])) {
  $sql = "SELECT * FROM careers WHERE c_name LIKE '%".$_GET['search']."%' ORDER BY c_name ASC";
}else{
  $sql = "SELECT * FROM careers ORDER BY c_name ASC";
}

$result = $conn->query($sql);
?>

<div class="row">
  <div class="col-10 mx-auto">

    <nav class="navbar navbar-light bg-light justify-content-between rounded">
      <h2>Careers</h2>
      <form class="form-inline" method="POST" action="processors/search.php?from=career">
        <input name="c_search" class="form-control mr-sm-2" type="search" placeholder="Search Career" aria-label="Search"> 
        <button class="btn btn-success my-2 my-sm-0 d-none d-sm-inline" type="submit">Search</button>
      </form>
    </nav>
    <div class="row">

     <?php 
     if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        ?>

        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4 gallery-item">
          <div class="bg-white rounded shadow-sm"><img src="<?php echo $row["c_image"];?>" alt="<?php echo $row["c_name"];?>" class="img-fluid card-img-top gallery-image">
            <div class="p-4">
              <h5> <a href="#" class="text-dark text-truncate"><?php echo $row["c_name"];?></a></h5>
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
                  <small class="container text-truncate d-none"><a href="<?php echo $row['c_image']?>"><?php echo $row['c_image']?></a></small>
                  <small class="container text-truncate"><a target="blank" href="<?php echo $row['c_desc_link']?>"><?php echo $row['c_desc_link']?></a></small>             
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <?php  
      }
    }else{
      echo '<h6 class="p-3">Sorry! we could not find anything that matches your search...</h6>';
    }
    $conn->close();
    ?>

  </div>      
</div>  
</div>  
<?php  include('footer.php')?>
