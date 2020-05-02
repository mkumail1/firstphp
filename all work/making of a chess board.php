<!DOCTYPE html>
<html>

<head>
    <title>Task-3</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
    <h3 style="text-align: center">Chess Board - PHP Nested Loops</h3>

    <?php
      //making a default colored array
      $colors = array("black", "white");

      echo "<table style='margin: 20px auto; border: 1px solid black;'>";

      // starting the table markup
      for ($row = 0; $row < 8; $row++) {
        echo "<tr>";  //opening tag for table row
        $num = $row % 2 == 0 ? 0 : 1;   // starting color for a specific row

        //nested for loop for column adjustment
        for ($col = 0; $col < 8; $col++) {

          //style for each td square/box
          echo "<td width='60px' height='60px' bgcolor='$colors[$num]'></td>";
          $num = $num == 0 ? 1 : 0; // change the color for next column
        }
        echo "</tr>"; // ending tag for table row
      }
      echo "</table>";  // ending tag for table
      ?>
</body>

</html>
