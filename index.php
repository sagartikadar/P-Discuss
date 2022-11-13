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
    <?php include 'parts/slider.php' ?>

    <h2 class="text-center my-4">P-discuss - Browse Categories</h2>
    <div class="container my-3" id="ques">
        <div class="row my-4">

    <?php

    $sql="SELECT * FROM `categories`";
    $result= mysqli_query($conn, $sql);
    while($row=mysqli_fetch_assoc($result)){
     $id=$row['Category_id'];    
     $name=$row['Name'];    
     $desc=$row['Description']; 

     echo ' <div class="col-md-3 my-2 cate">
     <div class="card card1" style="width: 18rem;">
   <img src="img/card-'.$id.'.jpg" class="card-img-top" alt="...">
   <div class="card-body">
   <a href="thread_list.php?catid='.$id.'"> <h5 class="card-title"><u><b>'.$name.'</b></u></h5></a>
     <p class="card-text">' . substr($desc, 0, 90). '... </p>
     <a href="thread_list.php?catid='.$id.'" class="btn btn-primary">View Thread</a>
   </div>
 </div>
 </div>';
    
     }

  ?>
  </div>
  </div>

   
  
    

  <?php include 'parts/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>