
 <?php
  $q_submit=false;
if(isset($_POST['comment'])){
  
  
  include 'parts/conn.php';
  $id=$_GET['threadid'];
//   $cat_id=$id;
$comment=$_POST['comment'];



$sql="INSERT INTO `comments` (`comment_content`, `thread_id`, `comment_time`) VALUES ( '$comment', '$id', current_timestamp());";

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
  <strong>Success!</strong> Your comment has been added successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>
<!-- Modal -->
<div class="modal fade " id="commentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-family:'Secular One', sans-serif";>Add Your Comment</h1>

        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    <!-- FORM -->

    <form action="<?php echo $_SERVER['REQUEST_URI']  ?>" method="post">
 
  
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1" style="font-family:'Secular One', sans-serif";>Your Comment:</label>
    <textarea class="form-control" id="comment" name="comment" rows="3"></textarea>
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



