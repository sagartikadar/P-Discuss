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
    $id=$_GET['threadid'];
    $sql="SELECT * FROM `threads` WHERE thread_id=$id";
    $result= mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)){
        
     $title=$row['thread_title'];    
     $desc=$row['thread_desc']; 

  
    
     }

  ?>
  

  <div class="jumbo mb-0 text-bg-light rounded-0" id="jumbo-th">
      <div class="container-fluid py-1">
        <h2 style="font-family: 'Secular One', sans-serif";><u>Question:</u></h2>
        <h2 class="display-5" id="jumbo-h2"><?php echo $title; ?></h2>
        <p id="jumbo_p1" class="col-md-8 fs-4"><?php echo $desc; ?></p>
        <hr>
        <p id="jumbo_p2"><b><u> Posted by:</b></u>  Sagar Tikadar</p>
      </div>
    </div>
<!-- Question -->
   
   
   
  
   
  
    

  <?php include 'parts/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>