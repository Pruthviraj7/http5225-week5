<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Week-5</title>
</head>
<body>
  <h1 class="text-center">Students Catalog</h1>
    
    <?php
    $connect=mysqli_connect('localhost','root','root','http5225');
    $query='SELECT * FROM students';
    $students=mysqli_query($connect,$query);
    if(mysqli_connect_error()){
      die("Connection error: " . mysqli_connect_error());
    }


    ?>

<div class="container">
  <div class="row">
    <?php 
   
foreach($students as $student){
  if($student['Grade']==='A'){
    $bgClass='bg-success';

  }
  else{
    $bgClass='bg-danger';
  }

  echo '<div class="card '.$bgClass.' " style="width: 18rem;">
  <img src="'.$student['Image'].'" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">'.$student['FirstName'].'</h5>
  <p class="card-text">Marks:'.$student['Marks'].'</p>
  <p class="card-text">Grade:'.$student['Grade'].'</p>
  </div>
  </div>';
}
?>
</div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>