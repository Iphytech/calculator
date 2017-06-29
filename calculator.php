<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style type="text/css">
			
			html, body{
				margin:0;
				padding: 0;
				height:100%;
				width: 100%;

			}
			form{
				padding: 250px;
				text-align: center;
				border: 1px solid orange;
				border-radius: 100px;
				border-width: 40px;
				background-color: gray;
				padding-top: 40px;
				padding-right: 40px;
				padding-left: 40px;
				padding-bottom: 40px;
			}
			button{
				background-color: orange;
				width: 100px;
			}
		</style>
</head>
<body>
	<form method="GET">
	<h1> Simple Calculator with PHP</h1>
		<label>Enter the first number:</label>&nbsp;<input type="text" name="num1" ><br><br>
		<label>Enter the second number:</label>&nbsp;<input type="text" name="num2" ><br><br>
			<label>Select an operator </label>&nbsp;<select name="operator">
				<option>None</option>
				<option>Add</option>
				<option>Subtract</option>
				<option>Divide</option>
				<option>Multiply</option>
			</select> <br><br>

			<center><button name="submit">Calculate</button></center>
	</form>
	

<center><p> The result is :</p></center>
	<?php
		if(isset($_GET['submit'])){
			$num1 = $_GET['num1'];
			$num2 = $_GET['num2'];
			$operator= $_GET['operator'];
			switch ($operator) {
				case 'None':
				echo "please select an operator";
					
					break;
					case 'Add':
				$result=  $num1 + $num2;
				echo "<center>$result</center>";
					
					break;
				case 'Subtract':
				$result=  $num1 - $num2;
				echo "<center>$result</center>";
					
					break;
					case 'Divide':
				$result=  $num1 / $num2;
				echo "<center>$result</center>";
					
					break;
					case 'Multiply':
				$result=  $num1 * $num2;
				echo "<center>$result</center>";
					
					break;
				
			}
		}


	?>
</body>
</html>