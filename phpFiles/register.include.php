<?php
  include '../phpFiles/database.include.php';

  date_default_timezone_set("Asia/Colombo");

  $teamName=$_POST['teamName'];
  $university=$_POST['university'];

  $masterHackerName=$_POST['masterHackerName'];
  $masterHackerEmail=$_POST['masterHackerEmail'];
  $masterHackerUniversityID=$_POST['masterHackerUniversityID'];
  $masterHackerContactNumber=$_POST['masterHackerContactNumber'];
  $masterHackerGit=$_POST['masterHackerGit'];
  $masterHackerStack=$_POST['masterHackerStack'];

  $hacker01Name=$_POST['hacker01Name'];
  $hacker01UniversityID=$_POST['hacker01UniversityID'];
  $hacker01ContactNumber=$_POST['hacker01ContactNumber'];
  $hacker01Git=$_POST['hacker01Git'];
  $hacker01Stack=$_POST['hacker01Stack'];

  $hacker02Name=$_POST['hacker02Name'];
  $hacker02UniversityID=$_POST['hacker02UniversityID'];
  $hacker02ContactNumber=$_POST['hacker02ContactNumber'];
  $hacker02Git=$_POST['hacker02Git'];
  $hacker02Stack=$_POST['hacker02Stack'];

  $hacker03Name=$_POST['hacker03Name'];
  $hacker03UniversityID=$_POST['hacker03UniversityID'];
  $hacker03ContactNumber=$_POST['hacker03ContactNumber'];
  $hacker03Git=$_POST['hacker03Git'];
  $hacker03Stack=$_POST['hacker03Stack'];

  $sql="SELECT teamName FROM registered_teams WHERE teamName='$teamName'";
  $result=$conn->query($sql);
  $teamNameCheck=mysqli_num_rows($result);

  if($teamNameCheck>0){
    header("Location: ../registrationform/registrationfailed.html");
    exit();
    //echo "user exists";
  }
  else{
    $sql="INSERT INTO registered_teams(
          teamName,
          `university`,
          masterHackerName,masterHackerEmail,masterHackerUniversityID,masterHackerContactNumber,masterHackerGit,masterHackerStack,
          hacker01Name,hacker01UniversityID,hacker01ContactNumber,hacker01Git,hacker01Stack,
          hacker02Name,hacker02UniversityID,hacker02ContactNumber,hacker02Git,hacker02Stack,
          hacker03Name,hacker03UniversityID,hacker03ContactNumber,hacker03Git,hacker03Stack
          )
        VALUES(
        '$teamName',
        '$university',
        '$masterHackerName','$masterHackerEmail','$masterHackerUniversityID','$masterHackerContactNumber','$masterHackerGit','$masterHackerStack',
        '$hacker01Name','$hacker01UniversityID','$hacker01ContactNumber','$hacker01Git','$hacker01Stack',
        '$hacker02Name','$hacker02UniversityID','$hacker02ContactNumber','$hacker02Git','$hacker02Stack',
        '$hacker03Name','$hacker03UniversityID','$hacker03ContactNumber','$hacker03Git','$hacker03Stack'
        )";
    $result=$conn->query($sql);

    header("Location: ../registrationform/registrationsuccess.html");
  }
