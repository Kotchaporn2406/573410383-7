
<?php

include 'connect.php';
$mysqli = new mysqli($servername, $username, $password, $dbname);
//if(mysqli_connect_errno()) {
//    echo "Conn Error = " . mysqli_connect_error();
//   exit();
//}

//else {
//	echo "Connected successfully";
//}

$request= $_POST['request'];
$subject_diary = $_POST['subject'];
$date_time = $_POST['date'];
$story_today = $_POST['story'];

$sql = "UPDATE `my_diary`.`diary_today` SET `subject_diary` = '$subject_diary',`date_time`='$date_time',`story_today`='$story_today' WHERE `id_diarytoday`='$request'";

if ($mysqli->query($sql)) {
    	echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Succesfully Record')
        window.location.href='index.php';
        </SCRIPT>");
    echo json_encode(array("status"=>"OK","Update Successfully"));
} 
else {
    echo json_encode(array("status"=>"FAIL","messeage"=>$mysqli->error));
}

?>