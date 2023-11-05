<!-- Create a program that asks user for hrs and minutes, then adds them together and gives the total in minutes -->

<!-- It should be in hrs and minutes -->
<?php // Model - part for data handling - handling POST and GET

// Calculations will be done at the top



// Create an error saying "number has to be between 0 and 59" if they input a number that is higher than 59 for the minutes

// The program should display the total hrs and minutes

// If the added time goes over 60 min convert it into hrs
  // Create a program that converts minutes into hrs


if (! isset($_POST['dopost'])) {
  echo "You didn't enter a value";
} else {
  echo "Thanks for entering a number"."<br/>";
  // When they input number, calculate
   
   // Print the total of hrs
   $hrsTotal = intval($_POST['hr1']) + intval($_POST['hr2']);
   
   echo"<p>"."Total HRS: $hrsTotal"."hrs"."</p>";
   // 4. Then convert the hrs into minutes 
  // hrTotal = ((hr1*60) + (hr2 * 60)) 

  //3. If there is user input add the minutes together
  // minTotal = (min1 + min2)
    // Need to know how to get the value of min1 + min2 (its input given by the user)

   $minTotal =  intval($_POST['min1']) + intval($_POST['min2']);
   echo "<p>"."Total Minutes: $minTotal"."min"."</p>";

  $hrsInMin = (intval($_POST['hr1'])*60) + (intval($_POST['hr2'])*60); 
  // echo "Hours in minutes: $hrsInMin";

// 5. Then add the min and hrs total tgt
$total = $hrsInMin + $minTotal;
echo "<p>"."Total in minutes: $total min"."</p>";

// totalInMin = (hrTotal + minTotal), and display it to the user
// 
}
?>




<html>
  <head>
    <title>Time Adder</title>
  </head>
  <body>
    <p>This program takes 4 inputs from the user</p>
    <!-- take input using a form -->
    <form method="post">
      <p>
      <label for="hr1">HR</label>
      <input type= "number" name="hr1" id="hr1"></input>

      <label for="min1">MIN</label>
      <input type = "number" name="min1" id="min1" min="0" max="59"></input>
      </p>

      <p>
      <label>HR</label>
      <input type="number" name="hr2" id="hr2"></input>

      <label>MIN</label>
      <input type="number" name="min2" id="min2" min="0" max="59"></input>
      </p>

      <input type="submit" name="dopost" value="calculate" />
    </form>
  </body>
</html>



