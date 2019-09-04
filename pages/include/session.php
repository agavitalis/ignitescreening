<?php
session_start();

if(isset($_SESSION["judge_name"])){

    $judge_name = $_SESSION["judge_name"];
}
else{
    $judge_name = "Admin";
}
$judge_id = $_SESSION["judge"];


//$_SESSION["grade_message_success"];
//$_SESSION["grade_message_error"];

?>