<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@700&family=Bree+Serif&family=Griffy&family=Kanit&family=Poor+Story&family=Raleway&family=Secular+One&family=Ubuntu&display=swap" rel="stylesheet">
  </head>
  <body>
    <?php include 'parts/header.php'; ?>
    <?php include 'parts/conn.php'; ?>

   
        
  
    <?php
    $id=$_GET['catid'];
    $sql="SELECT * FROM `categories` WHERE Category_id=$id";
    $result= mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)){
        
     $name=$row['Name'];    
     $desc=$row['Description']; 

    //  echo 'hello' ;
    
     }

  ?>
  

  <div class="jumbo mb-0 text-bg-dark rounded-0">
      <div class="container-fluid py-5 ">
        <h1 class="display-5">Welcome to <?php echo $name; ?> Forum</h1>
        <p id="jumbo_p1" class="col-md-8 fs-4"><?php echo $desc; ?></p>
        <hr>
        <p id="jumbo_p2"><b><u> Rules:- </b></u> <BR>1. No Spam / Advertising / Self-promote in the forums · 2. Do not post copyright-infringing material · 3. Do not post “offensive” posts, links or images   </p>
      </div>
    </div>
<!-- Question -->
    <h2 class="text-center my-4"> Browse Questions</h2>
    <div class="container my-3">

    <?php
    $id=$_GET['catid'];
    $sql="SELECT * FROM `threads` WHERE thread_cat_id=$id";
    $result= mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)){
    $id=$row['thread_id'];    
     $title=$row['thread_title'];    
     $desc=$row['thread_desc']; 

     echo'<div class="media my-3">
     <img src="img/p-pic.jpg" width="45px" class="mr-3" id="ques-pic" alt="...">
     <div class="media-body">
 <h5 id="ques-h5" class="mt-0"><a href="thread.php?threadid='.$id.'">'.$title.'</a></h5>
 '.$desc.'
</div>

</div>';
   
    }

  ?>
</div>
   
   
  
   
  
    

  <?php include 'parts/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>