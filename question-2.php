<?php include 'connection/connect.php'; ?>
<?php include 'template/header.php'; ?>

<?php
//start session
session_start();

//storing posted values in the session varibales
$_SESSION['answerOne'] = $_POST['answerOne'];
?>


<div class="question">
	<p>On a scale from 1 to 10, did the information you recieve expand your knowledge of your equipment operation?</p>
</div>

<div class="ratings">
  <form method="post" action="question-3.php">
    <!-- One -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-one" name="answerTwo" value="1">
      <label class="label_item" for="radio-one">
        <div id="one"></div>
      </label>
    </div>
    <!-- Two -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-two" name="answerTwo" value="2"> 
      <label class="label_item" for="radio-two">
        <div id="two"></div>
      </label>
    </div>
    <!-- Three -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-three" name="answerTwo" value="3">
      <label class="label_item" for="radio-three">
        <div id="three"></div>
      </label>
    </div>
    <!-- Four -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-four" name="answerTwo" value="4"> 
      <label class="label_item" for="radio-four"> 
        <div id="four"></div> 
      </label>
    </div>
    <!-- Five -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-five" name="answerTwo" value="5"> 
      <label class="label_item" for="radio-five"> 
        <div id="five"></div>
      </label>
    </div>
    <!-- Six -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-six" name="answerTwo" value="6"> 
      <label class="label_item" for="radio-six"> 
        <div id="six"></div> 
      </label>
    </div>
    <!-- Seven -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-seven" name="answerTwo" value="7"> 
      <label class="label_item" for="radio-seven"> 
        <div id="seven"></div> 
      </label>
    </div>
    <!-- Eight -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-eight" name="answerTwo" value="8">
      <label class="label_item" for="radio-eight">
        <div id="eight"></div> 
      </label>
    </div>
    <!-- Nine -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-nine" name="answerTwo" value="9"> 
      <label class="label_item" for="radio-nine"> 
        <div id="nine"></div> 
      </label>
    </div>
    <!-- Ten -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-ten" name="answerTwo" value="10"> 
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