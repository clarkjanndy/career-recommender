<?php  include('header.php')?>

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
      <div class="text-truncate text-truncate--5 text-justify">
        <?php 
        $content = str_replace(array("\r\n", "\n"), array("<br />", "<br />"), $info['ab_content']);
        ?>
        <p class="text-justify"><?php echo  $content;?><p>
        </div>

        <div>
        <?php if($_SESSION['u_role'] == "admin"){?>
          <a href="asas" class="btn btn-info text-white mr-1" 
          data-toggle="modal" 
          data-target="#modal<?php echo $info['ab_id']?>">Edit</a>
        <?php }?>
        <a href="single.php?id=<?php echo $info['ab_id']?>" class="btn btn-primary text-white" target="_blank" rel="noopener noreferrer">Read More</a>
        <a href="single.php?id=<?php echo $info['ab_id']?>" class="btn btn-primary text-white" target="_blank" rel="noopener noreferrer" style="visibility: hidden;">Read More</a>
        </div>

        <div class="line"></div>
        <div class="modal fade" id="modal<?php echo $info['ab_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="processors/edit-about.php?id=<?php echo $info['ab_id']?>" method="POST">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input name="title" type="text" class="form-control" placeholder="ex. Birthday, Favorite Place" required="required" 
                    value="<?php echo $info['ab_title']?>">
                  </div>
                  <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" type="text" class="form-control" placeholder="Enter Information" required="required" rows="15"
                    value=""><?php echo $info['ab_content']?></textarea> 
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" ">Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      <?php }?>
    </div>
  </div>

  <?php  include('footer.php')?>