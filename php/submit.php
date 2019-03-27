<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../assets/bootstrap.min.css">
    <title>Success</title>
</head>
<body>
<?php
require './classes/Database.php';

$conn = new DB();


$dev = $_POST['staff'];
$date = $_POST['deadline'];
$projectArr = $_POST['pro'];


echo "
    <h1 class='text-center' display-4'>Project Created </h1>
      <br>
      <br>
      <br>
      <br>
    <p class='text-center'> You have selected <strong>$dev</strong> to work on project(s): </p>
    ";
    echo "<ul class='text-center'>";
        for($i=0; $i < count($projectArr); $i++){
        
            echo "<p>$projectArr[$i]</p>";
        
        };
    echo "</ul>";
  echo"  
    <p class='text-center'> to be completed by <strong>$date</strong </p>
      <br>
      <br>
      <br>
      <br>
    <a href='../index.html' class='btn btn-outline-danger w-25'>Back</a>
";
?>  


</body>
</html>
