<?php
require_once __DIR__.'/bootstrap.php';
require_once ROOT_DIR . '/db_configuration.php';
if (isset($_POST['id'])){

  echo "test if";

  $Name = mysqli_real_escape_string($db, $_POST['name']);
  $description = mysqli_real_escape_string($db, $_POST['description']);
  $notes = mysqli_real_escape_string($db, $_POST['notes']);
  $inputFromDB = mysqli_real_escape_string($db, $_POST['inputFromDB']);
  $inputFromUI = mysqli_real_escape_string($db, $_POST['inputFromUI']);
  $outputToDB = mysqli_real_escape_string($db, $_POST['outputToDB']);
  $outputToUI = mysqli_real_escape_string($db, $_POST['outputToUI']);
  $developer = mysqli_real_escape_string($db, $_POST['developer']);
  $status = mysqli_real_escape_string($db, $_POST['status']);
  $token = mysqli_real_escape_string($db, $_POST['token']);
  $playable = mysqli_real_escape_string($db, $_POST['playable']);
  $icon = mysqli_real_escape_string($db, $_POST['icon']);
  




$sql = "UPDATE applications
        SET name = '$name',
            description = '$description',
            notes = '$notes',
            inputFromDB = '$inputFromDB',
            inputFromUI = '$inputFromUI',
            outputToDB = '$outputToDB',
            outputToUI = '$outputToUI',
            developer = '$developer',
            status = '$status',
            token = '$token',
            playable = '$playable'
            icon = '$icon'


          WHERE name = '$name'";

       mysqli_query($db, $sql);
      header('location: applications.php?PuzzleCView=Success');
     // echo $sql; 
}//end if
?>
