<!DOCTYPE html>
<html>
<head>
	<title>Arithmatic PHP</title>
</head>
<body>
	<form method="GET">
		<div>
		<label for="first" >Enter First number:</label>
		<input type="number" name="firstno" id="first"><br><br>
		<label for="second">Enter Second Number:</label>
		<input type="number" name="secondno" id="second"><br><br>
		<select name="select">
			<option value="select">Select....</option>
			<option value="+">Add</option>
			<option value="-">Subtract</option>
			<option value="*">Multiply</option>
			<option value="/">Divide</option>
		</select><br><br>
		<input type="submit" name="submit" value="submit"><br><br>
	</div>
	</form>
	<?php
		
		if (isset($_GET['submit'])) {
			$first= $_GET['firstno'];
			$second =$_GET['secondno'];
			
			if ($_GET['select']== '+') {
				$result= $first+ $second;
				echo 'Add result: '. $result;
				exit();
			}
			elseif ($_GET['select']== '-') {
				$result= $first- $second;
				echo 'Subtract result: '. $result;
			}
			elseif ($_GET['select']== '*') {
				$result= $first* $second;
				echo 'Multiply result:'.  $result;
			}
			elseif ($_GET['select']== '/') {
				$result= $first/ $second;
				echo 'Division result: '. $result;
			}
			else {
				echo "Pls! Select operation";
				return false;
			}
		}
		
		
	?>
</body>
</html>