<?php include 'connection/connect.php'; ?>
<?php include 'template/header.php'; ?>

<?php
//start session
session_start();

//storing posted values in the session varibales
$_SESSION['answerFive'] = $_POST['answerFive'];
?>

<?php 
$one   = $_SESSION['answerOne']; 
$two   = $_SESSION['answerTwo'];
$three = $_SESSION['answerThree'];
$four  = $_SESSION['answerFour'];
$five  = $_SESSION['answerFive'];
?>

<?php
	$sql = "INSERT INTO responses (question_one, question_two, question_three, question_four, question_five)
	VALUES ($one, $two, $three, $four, $five)";

	if ($conn->query($sql) === TRUE) {
	    echo "<div class="question">
	<p>On a scale from 1 to 10, did you learn something new about your equipment through this service?</p></div>";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>