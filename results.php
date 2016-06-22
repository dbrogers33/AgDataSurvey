<?php
include 'connection/connect.php';

$sql = "SELECT time, question_one, question_two, question_three, question_four, question_five FROM responses";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<title>Ag Data Works Survey</title>
<link rel="stylesheet" type="text/css" href="css/main.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<body>

<div class="container">
	<h1>Ag Data Works Survey Results</h1>
	<p>This table shows the time and the results of the Ag Data Works survey.</p>
	<br>

	<!-- Questions 
	<p><strong>Question 1:</strong></p>
	<p>On a scale from 1 to 10, did you learn something new about your equipment through this service?</p>
	<p><strong>Question 2:</strong></p>
	<p>On a scale from 1 to 10, did the information you recieve expand your knowledge of your equipment operation?</p>
	<p><strong>Question 3:</strong></p>
	<p>Have you had a similar experience with other equipment dealers in the past? If yes, rank your experiece from 1 to 10.</p>
	<p><strong>Question 4:</strong></p>
	<p>On a scale from 1 to 10, how likely would are you to recommend this service (Precision Farming Package) to others?</p>
	<p><strong>Question 5:</strong></p>
	<p>On a scale from 1 to 10, would you purchase this service with your next piece of equipment?</p>
	End Questions -->

	

	<!-- Table -->
	  <table class="table table-striped">
	    <thead>
	      <tr>
	        <th>Time</th>
	        <th>Question 1</th>
	        <th>Question 2</th>
	        <th>Question 3</th>
	        <th>Question 4</th>
	        <th>Question 5</th>
	      </tr>
	    </thead>
	    <tbody>
	      
	        <?php
	        	if ($result->num_rows > 0) {
    				// output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo "<tr><td>" . $row["time"] . "</td><td>" . $row["question_one"] . "</td><td>" . $row["question_two"] . "</td><td>" . $row["question_three"] . "</td><td>" . $row["question_four"] . "</td><td>" . $row["question_five"] . "</td><td>" ."</tr>";
				    }
				} else {
					echo "0 results";
				}
	        ?>

	    </tbody>
	  </table>
	  <!-- End Table -->


</div>

<?php include 'template/footer.php';?>