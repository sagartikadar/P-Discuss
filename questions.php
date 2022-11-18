
 <?php
  $q_submit=false;
if(isset($_POST['title'])){
  
  
  include 'parts/conn.php';
  $id=$_GET['catid'];
  $cat_id=$id;
$title=$_POST['title'];
$description=$_POST['description'];


$sql="INSERT INTO `threads` ( `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `date`) VALUES (' \r\n$title', ' \r\n$description', '$cat_id', '0', current_timestamp());";

if($conn->query($sql)==true){
  // header("location:$_SERVER[REQUEST_URI]");
  $q_submit=true;
}
else{
  echo "Error: <br> $con->error";
  }


}
?> 
<?php
if($q_submit==true){
echo '<div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
  <strong>Success!</strong> Your question has been added successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
<!-- Modal -->
<div class="modal fade " id="questionModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family:'Secular One', sans-serif";>Ask Your Question</h1>
<!-- <?php
        $id=$_GET['catid'];
  $cat_id=$id;
  echo $cat_id;
  ?> -->
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <!-- FORM -->

    <form action="<?php echo $_SERVER['REQUEST_URI']  ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1" style="font-family:'Secular One', sans-serif";>Problem Title</label>
    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Keep your title as short as possible.</small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="font-family:'Secular One', sans-serif";>Problem Description</label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary my-3" style="font-family:'Secular One', sans-serif";>Submit</button>
</form>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>