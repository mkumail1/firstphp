<!DOCTYPE html>
<html>

<head>
    <title>Task-2</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
    table,
    /* style for table and td markup */
    td {
          border: 1px solid red;
        border-collapse: collapse;
        background: black;
        color: white;
        padding: 15px;
    }

    </style>
</head>

<body>
    <?php
    //opening tag for table html
	echo "<table style='margin: 25px auto'>";

  //concating all rows from 1-6
	for ($row = 1; $row < 7; $row++) {
		echo "<tr>";	//opening tag for table row

    //concating all columns from 1-5
		for ($col = 1; $col < 6; $col++) {
			echo "<td>$row * $col = " . ($row * $col) . "</td>";	// each column of row
		}
		echo "</tr>";		// closing tag for table row
	}

  //closing tag for table applied
	echo "</table>"
	?>
</body>

</html>
