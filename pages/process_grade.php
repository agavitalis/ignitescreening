<?php
    include_once'include/session.php';
    include_once'include/connection.php';

    if(isset($_POST['submit'])){

        //grab the submitted data
        $applicant=$_REQUEST['id'];
        $judge= $_REQUEST['judge'];
        $score= $_POST['rating'];

        //check if this guy have been graded
        $check = "SELECT * FROM score_table WHERE applicant_id = '$applicant' AND judge_id = '$judge'";
        $check_result = mysqli_query($conn, $check);

        if (mysqli_num_rows($check_result) > 0) {
          //take him back and give him a message
          $_SESSION['grade_message_error'] = "You have already graded this applicant";
          unset($_SESSION["grade_message_success"]);
          header("Location: applicants.php");

        }else{

            //save to DB
            $insert_result = "INSERT INTO score_table (applicant_id, judge_id, score)
            VALUES ('$applicant', '$judge', '$score')";
    
           if (mysqli_query($conn, $insert_result)) {

                $_SESSION['grade_message_success'] = "Applicant successfully graded";
                unset($_SESSION["grade_message_error"]);
                header("Location: applicants.php");

            } else {

                
                $_SESSION['grade_message_error'] =  "Error: " . $insert_result . "<br>" . mysqli_error($conn);
                unset($_SESSION["grade_message_success"]);
                header("Location: applicants.php");
            }

        }

          
    }
?>