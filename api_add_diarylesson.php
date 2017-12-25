<?php

include 'connect.php';
$mysqli = new mysqli($servername, $username, $password, $dbname);

//if(mysqli_connect_errno()) {
//	echo "Conn Error = " . mysqli_connect_error();
//exit();
//}
//else {
//	echo "Connected successfully";
//}

$subject_diary = $_POST['subject'];
$date_time = $_POST['date'];
$story_lesson = $_POST['story'];

    $sql =("INSERT INTO diary_lesson (subject_diary,date_time,story_lesson)
VALUES ('".$subject_diary."','".$date_time."','".$story_lesson."')");

if ($mysqli->query($sql)) {
    echo json_encode(array("status"=>"OK","Record Successfully"));
        echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Succesfully Record')
        window.location.href='page_life_lesson.php';
        </SCRIPT>");
	} 

else {
    echo json_encode(array("status"=>"FAIL","messeage"=>$mysqli->error));
}
?>