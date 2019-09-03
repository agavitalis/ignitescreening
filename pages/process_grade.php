<?php
    include_once'dbconnection/connection.php';
    if(isset($_POST['submit'])){

    $applicant=$_REQUEST['id'];
    $judge=$_REQUEST['judge'];
    $score=($_POST['rating']);

    $query = "SELECT *
    FROM score_table WHERE judge_id = $judge AND applicant_id = $applicant ";
    $result = mysqli_query($conn,$query);
   
    $rowcount = mysqli_num_rows($result);
    if($rowcount < 1)
    {
        $sql = "INSERT INTO score_table (applicant_id, judge_id, score)
        VALUES ('$applicant', '$judge', '$score')";

       if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header("Location: applicants.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }else{
       
        echo "Applicant have already been graded";
        header("Location: applicants.php");
        
    }
          
    }
?>