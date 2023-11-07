<?php // Model - part for data handling - handling POST and GET
function convertToMin ($sum) {
  if (($sum % 60) != 0) {
    $rem = $sum % 60; 
    // echo "The remainder is: $rem"; 
    // This gives the remaining minutes
  
    $divHr= intval($sum / 60);
    // if divHr > 1 {
    // }
    return "Total is: $divHr hrs $rem minutes";
}
 else{
  //If its somethign like 240 min you want it to show as:
    // 6hrs
    $divHr = $sum / 60;
    return "Total is: $divHr hrs";
 }
}

// Have to make it accept the input of 0
// But not accept empty

// I want user input
// I want to allow 0

// Is empty and 0 the same in php??

// If user doesn't input anything its goign to be treated as null in

if (isset($_POST['dopost'])) {
  // if (( empty($hr1) || empty($hr2) || empty($min1) || empty($min2))  ){
  //   echo '<p style="color: red;">Enter a number for each box</p>';
  // }

// How do you actually get around
    $hr1 = $_POST['hr1'];
    $hr2 = $_POST['hr2'];
    // var_dump($hr2);
    $min1 = $_POST['min1'];
    // var_dump(($min1));
    $min2 = $_POST['min2'];

if (( empty($hr1) || empty($hr2) || empty($min1) || empty($min2)) && ($hr1 !== "0") && ($hr2 !== "0") && ($min1 !== "0") && ($min2 !== "0")){
  echo '<p style="color: red;">Enter a number for each box</p>';
  // var_dump(empty($hr1)); // bool = True
  // var_dump(empty($hr2)); // bool = True
}

  else {
    $intHr1 = intval($_POST['hr1']);
    $intHr2 = intval($_POST['hr2']);
    $intMin1 = intval($_POST['min1']);
    $intMin2 = intval($_POST['min2']);
   // Print the total of hrs
    $hrsTotal = $intHr1 + $intHr2;
    $minTotal =  $intMin1 + $intMin2;
    $hrsInMin = ($intHr1*60) + ($intHr2*60); 
    $total = $hrsInMin + $minTotal; //Total hrs and the minutes all in minutes
    echo "<p>"."Total of all hours and the minutes (shown in minutes): $total min"."</p>";

    // Convert the hours into minutes
    $result = convertToMin ($total);
    echo $result;
}
}
  




// $divHr= intval($total / 60); 

// echo "$hr1 hrs + $hr2 hrs + $min1 min + $min2 min = $total minutes"."<br>";
// echo '<p>'."It is equal to $divHr hrs $minTotal minutes".'</p>';

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