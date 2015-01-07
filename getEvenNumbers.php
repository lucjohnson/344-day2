<html>
	<head>
	</head>
	<body>
		<form action="getEvenNumbers.php" method="get"> 
			Input a number: <input type="text" name="number">
			<input type="submit" value="Submit">
		</form>
		<?php
			$num = $_REQUEST['number']; 
			for ($i = 1; $i < $num; $i++) {
				if ($i % 2 == 0) {
					echo $i.' ';
				}
			}
		?>
	</body>
</html>
