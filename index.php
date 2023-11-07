<?php // Model - part for data handling - handling POST and GET
if (isset($_POST['dopost'])) {
  $hr1 = intval($_POST['hr1']);
  $hr2 = intval($_POST['hr2']);
  $min1 = intval($_POST['min1']);
  $min2 = intval($_POST['min2']);
  if ( empty($hr1) || empty($hr2) || empty($min1) || empty($min2)) {
    echo '<p style="color: red;">Enter a number for each box</p>';
  }
  else {
   // Print the total of hrs
  $hrsTotal = $hr1 + $hr2;
  $minTotal =  $min1 + $min2;
  $hrsInMin = ($hr1*60) + ($hr2*60); 
$total = $hrsInMin + $minTotal;
echo "<p>"."Total of all hours and the minutes (shown in minutes): $total min"."</p>";

function checkHrsMins ($total) {
  if (($total % 60) != 0) {
    $rem = $total % 60; 
    // echo "The remainder is: $rem"; 
    // This gives the remaining minutes
  
    $divHr= intval($total / 60);
    // if divHr > 1 {
    // }
}

checkHrsMins ($total);
}

$divHr= intval($total / 60); 

echo "$hr1 hrs + $hr2 hrs + $min1 min + $min2 min = $total minutes"."<br>";
echo '<p>'."It is equal to $divHr hrs $minTotal minutes".'</p>';
} 
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
      <input type= "number" name="hr1" id="hr1" min="0"></input>

      <label for="min1">MIN</label>
      <input type = "number" name="min1" id="min1" min="0" max="59"></input>
      </p>

      <p>
      <label>HR</label>
      <input type="number" name="hr2" id="hr2" min="0"></input>

      <label>MIN</label>
      <input type="number" name="min2" id="min2" min="0" max="59"></input>
      </p>

      <input type="submit" name="dopost" value="calculate" />
    </form>
  </body>
</html>