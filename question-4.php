<?php
//start session
session_start();

//storing posted values in the session varibales
$_SESSION['answerThree'] = $_POST['answerThree'];
?>


<?php include 'connection/connect.php'; ?>
<?php include 'template/header.php'; ?>


<div class="question">
	<p>On a scale from 1 to 10, how likely are you to recommend this service (Precision Farming Package) to others?</p>
</div>

<div class="ratings">
  <form method="post" action="question-5.php">
    <!-- One -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-one" name="answerFour" value="1">
      <label class="label_item" for="radio-one">
        <div id="one"></div>
      </label>
    </div>
    <!-- Two -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-two" name="answerFour" value="2"> 
      <label class="label_item" for="radio-two">
        <div id="two"></div>
      </label>
    </div>
    <!-- Three -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-three" name="answerFour" value="3">
      <label class="label_item" for="radio-three">
        <div id="three"></div>
      </label>
    </div>
    <!-- Four -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-four" name="answerFour" value="4"> 
      <label class="label_item" for="radio-four"> 
        <div id="four"></div> 
      </label>
    </div>
    <!-- Five -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-five" name="answerFour" value="5"> 
      <label class="label_item" for="radio-five"> 
        <div id="five"></div>
      </label>
    </div>
    <!-- Six -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-six" name="answerFour" value="6"> 
      <label class="label_item" for="radio-six"> 
        <div id="six"></div> 
      </label>
    </div>
    <!-- Seven -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-seven" name="answerFour" value="7"> 
      <label class="label_item" for="radio-seven"> 
        <div id="seven"></div> 
      </label>
    </div>
    <!-- Eight -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-eight" name="answerFour" value="8">
      <label class="label_item" for="radio-eight">
        <div id="eight"></div> 
      </label>
    </div>
    <!-- Nine -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-nine" name="answerFour" value="9"> 
      <label class="label_item" for="radio-nine"> 
        <div id="nine"></div> 
      </label>
    </div>
    <!-- Ten -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-ten" name="answerFour" value="10"> 
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