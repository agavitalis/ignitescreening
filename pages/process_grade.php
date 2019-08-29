<?php
    include_once'dbconnection/connection.php';
?>
<?php
    if(isset($_POST['submit'])){
        $applicant=$_REQUEST['id'];
        $judge=$_REQUEST['judge'];
        $score=($_POST['rating']);

        
        $sql = "INSERT INTO score_table (applicant_id, judge_id, score)
        VALUES ('$applicant', '$judge', '$score')";

       if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header("Location: applicants.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
          
    }
?>