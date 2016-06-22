<?php include 'connection/connect.php'; ?>
<?php include 'template/header.php'; ?>

<div class="question">
	<p>On a scale from 1 to 10, did you learn something new about your equipment through this service?</p>
</div>

<div class="ratings">
  <form method="post" action="question-2.php">
    <!-- One -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-one" name="answerOne" value="1">
      <label class="label_item" for="radio-one">
        <div id="one"></div>
      </label>
    </div>
    <!-- Two -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-two" name="answerOne" value="2"> 
      <label class="label_item" for="radio-two">
        <div id="two"></div>
      </label>
    </div>
    <!-- Three -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-three" name="answerOne" value="3">
      <label class="label_item" for="radio-three">
        <div id="three"></div>
      </label>
    </div>
    <!-- Four -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-four" name="answerOne" value="4"> 
      <label class="label_item" for="radio-four"> 
        <div id="four"></div> 
      </label>
    </div>
    <!-- Five -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-five" name="answerOne" value="5"> 
      <label class="label_item" for="radio-five"> 
        <div id="five"></div>
      </label>
    </div>
    <!-- Six -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-six" name="answerOne" value="6"> 
      <label class="label_item" for="radio-six"> 
        <div id="six"></div> 
      </label>
    </div>
    <!-- Seven -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-seven" name="answerOne" value="7"> 
      <label class="label_item" for="radio-seven"> 
        <div id="seven"></div> 
      </label>
    </div>
    <!-- Eight -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-eight" name="answerOne" value="8">
      <label class="label_item" for="radio-eight">
        <div id="eight"></div> 
      </label>
    </div>
    <!-- Nine -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-nine" name="answerOne" value="9"> 
      <label class="label_item" for="radio-nine"> 
        <div id="nine"></div> 
      </label>
    </div>
    <!-- Ten -->
    <div class="radio-container">
      <input type="radio" class="radio-item" id="radio-ten" name="answerOne" value="10"> 
      <label class="label_item" for="radio-ten"> 
        <div id="ten"></div> 
      </label>
    </div>
    <div class="button">
      <input type="submit" class="submit-button" value="">
    </div>
  </form>
</div>


<a href="question-2.php"><div class="next-button"></div></a>

<?php include 'template/footer.php'; ?>