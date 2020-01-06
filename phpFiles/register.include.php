<?php
  include '../phpFiles/database.include.php';

  date_default_timezone_set("Asia/Colombo");

  $teamName=$_POST['teamName'];
  $masterHacker=$_POST['masterHacker'];
  $universityID=$_POST['universityID'];
  $email=$_POST['email'];
  $contactNumber=$_POST['contactNumber'];

  $sql="SELECT teamName FROM registered_teams WHERE teamName='$teamName'";
  $result=$conn->query($sql);
  $teamNameCheck=mysqli_num_rows($result);

  if($teamNameCheck>0){
    header("Location: ../registrationform/registrationfailed.html");
    exit();
    //echo "user exists";
  }
  else{
    $sql="INSERT INTO registered_teams(teamName,masterHacker,universityID,email,contactNumber)
        VALUES('$teamName','$masterHacker','$universityID','$email','$contactNumber')";
    $result=$conn->query($sql);

    header("Location: ../registrationform/registrationsuccess.html");
  }
