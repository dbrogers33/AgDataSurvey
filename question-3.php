<?php
//start session
session_start();
//storing posted values in the session varibales
$_SESSION['answerTwo'] = $_POST['answerTwo'];
?>

<?php include 'connection/connect.php'; ?>
<?php include 'template/header.php'; ?>


<div class="question">
	<p>Have you had a similar experience with other equipment dealers in the past? If yes, rank your experience from 1 to 10.</p>
</div>

<div class="ratings">
  <form method="post" action="question-4.php">
    <!-- One -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-one" name="answerThree" value="1">
      <label class="label_item" for="radio-one">
        <div id="one"></div>
      </label>
    </div>
    <!-- Two -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-two" name="answerThree" value="2"> 
      <label class="label_item" for="radio-two">
        <div id="two"></div>
      </label>
    </div>
    <!-- Three -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-three" name="answerThree" value="3">
      <label class="label_item" for="radio-three">
        <div id="three"></div>
      </label>
    </div>
    <!-- Four -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-four" name="answerThree" value="4"> 
      <label class="label_item" for="radio-four"> 
        <div id="four"></div> 
      </label>
    </div>
    <!-- Five -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-five" name="answerThree" value="5"> 
      <label class="label_item" for="radio-five"> 
        <div id="five"></div>
      </label>
    </div>
    <!-- Six -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-six" name="answerThree" value="6"> 
      <label class="label_item" for="radio-six"> 
        <div id="six"></div> 
      </label>
    </div>
    <!-- Seven -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-seven" name="answerThree" value="7"> 
      <label class="label_item" for="radio-seven"> 
        <div id="seven"></div> 
      </label>
    </div>
    <!-- Eight -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-eight" name="answerThree" value="8">
      <label class="label_item" for="radio-eight">
        <div id="eight"></div> 
      </label>
    </div>
    <!-- Nine -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-nine" name="answerThree" value="9"> 
      <label class="label_item" for="radio-nine"> 
        <div id="nine"></div> 
      </label>
    </div>
    <!-- Ten -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-ten" name="answerThree" value="10"> 
      <label class="label_item" for="radio-ten"> 
        <div id="ten"></div> 
      </label>
    </div>
    <div class="button">
      <input type="submit" class="submit-button" value="">
    </div>
  </form>
</div>

<a href="#"><div class="next-button"></div></a>

<?php include 'template/footer.php'; ?>