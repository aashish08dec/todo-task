<?php 
require_once '../includes/db.php'; // The mysql database connection script
if(isset($_GET['taskID'])){
$taskID = $_GET['taskID'];
$task = $_GET['task'];
$query="update tasks set task='$task' where id='$taskID'";
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$result = $mysqli->affected_rows;

$json_response = json_encode($result);
}
?>