<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/index.css" media="screen" title="no title" charset="utf-8">
    <title>My PHP app</title>
  </head>
  <body>
    <div class="header">
      <h1 >
    <?php
    $w = $_POST['workout'];
    $s = $_POST['sets'];
    $d = $_POST['duration'];
    // NEED TO MAKE DAYS of the week GO INTO ANOTHER NESTED DAYS ARRAY to refactor code
      echo "Workout Plan" ;
      $monday = Array(Array('Jogging', 'Chestpress', 'Incline Press', 'Decline Press', 'Situps' ), Array(1,4,"3-4", "3-4", 5),Array('5 mins', "8-12", "8-12", "8-12", 40));
      $tuesday = Array(Array('Jogging', 'Back Rows', 'Wide Grip Pullup', 'Pulldown bar', 'Situps' ), Array(1,4,"3-4", "3-4", 5),Array('5 mins', "8-12", "8-12", "8-12", 40));
      $wednesday = Array(Array('Jogging', 'Pullups', 'Shoulder Press', 'Arnold Presses', 'Situps' ), Array(1,4,"3-4", "3-4", 5),Array('5 mins', "8-12", "8-12", "8-12", 40));
      $thursday = Array(Array('Jogging', 'Bicep Curl', 'Bicep Bar Curl', 'Seated Bicep Curl', 'Situps' ), Array(1,4,"3-4", "3-4", 5),Array('5 mins', "8-12", "8-12", "8-12", 40));
      $friday = Array(Array('Jogging', 'Deadlifts', 'Calf press', 'Leg Press', 'Situps' ), Array(1,4,"3-4", "3-4", 5),Array('5 mins', "8-12", "8-12", "8-12", 40));

    '<h4>';
      echo "<h2>Monday Chest Day</h2>";
      $x = 0;
      while($x <= sizeOf($monday[0])-1) {
      echo "Workout: " . $monday[0][$x] . "<br/> Sets: " . $monday[1][$x] . "<br/> Duration: " . $monday[2][$x] .'<br/><br/>';
      $x++;
    }
    $x = 0;
    echo "<h2>Tuesday Back Day</h2>";
      while($x <= sizeOf($tuesday[0])-1) {
      echo "Workout: " . $tuesday[0][$x] . "<br/> Sets: " . $tuesday[1][$x] . "<br/> Duration: " . $tuesday[2][$x] .'<br/><br/>';
      $x++;
    }
    $x = 0;
    echo "<h2>Wednesday Back Day</h2>";
      while($x <= sizeOf($wednesday[0])-1) {
      echo "Workout: " . $wednesday[0][$x] . "<br/> Sets: " . $wednesday[1][$x] . "<br/> Duration: " . $wednesday[2][$x] .'<br/><br/>';
      $x++;
    }
    $x = 0;
    echo "<h2>Thursday Back Day</h2>";
      while($x <= sizeOf($thursday[0])-1) {
      echo "Workout: " . $thursday[0][$x] . "<br/> Sets: " . $thursday[1][$x] . "<br/> Duration: " . $thursday[2][$x] .'<br/><br/>';
      $x++;
    }
    $x = 0;
    echo "<h2>Friday Back Day</h2>";
      while($x <= sizeOf($friday[0])-1) {
      echo "Workout: " . $friday[0][$x] . "<br/> Sets: " . $friday[1][$x] . "<br/> Duration: " . $friday[2][$x] .'<br/><br/>';
      $x++;
    }
    '</h4>';
    echo "<h1> Custom Workout </h1>";

    ?>

    <form class="" action="" method="post">
      <input type="text" name="workout" placeholder="Workout"value="">
      <input type="text" name="sets" placeholder="Sets" value="">
      <input type="text" name="duration" placeholder="Duration"value="">
      <input type="submit" name="name" value="Submit">
    </form>
    <?php
    // have it save in future
      echo "Workout: ".$w."<br/> Sets: ". $s . "<br/> Duration:" . $d;

     ?>
   </div>
   <div class='footer'>
   </div>
  </body>
</html>
