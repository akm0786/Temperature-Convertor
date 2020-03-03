<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>TEMPERATURE CONVERTER</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

	<style>

		*{
			font-family: 'Roboto' ,sans-serif;
			

		}

	
	
	body{
		margin:0;
		padding: 0;
		width:100vh;
		height: 100vh;
		position:fixed; 

		box-sizing: border-box;
		background: green;
		  
		border: 1px solid green;
		opacity: .9;
	}

	.main {

	width: 50%;
	height: 45vh;
	position: fixed;
	top: 60px;
	left:20%;
	padding-right: 20px;
	font-weight: 600;
	border: 0px solid #000;
	color: white;
	display: flex;
	padding-left: 66px;
	flex-direction: column;
	font-size: 19px;
	box-sizing: all;
	padding-top: 60px;
	justify-content: center;
	align-items: start;
	background-color: #404001;
	border-radius: 9px;

	}

	.main p,h3{
		/*padding-right: 40px;*/
		color: yellow;
	}

	.main > h3{
		display: flex;
		justify-content: end;
	}
 input[type=text]{

		border: 0px solid #000;
		border-radius:4%; 
		padding: 8px;
		transition: 0.2;
		font-size: 19px;
		box-sizing: border-box;
		background-color: yellow;
	}

	::placeholder{


		color: black;
		font-weight: 700;
	}

	input[type=submit]{

		padding: 7px;
		border: 0px solid #000;
		border-radius: 5px;
		color:black;
		font-size: 19px;
		font-weight: 600;
		cursor: pointer;
		background-color: yellow;
		position: relative;
		transition: 0.2s;
		left: 40px;
	}

	input[type=submit]:hover,input[type=text]:hover{

		background-color: orange;
		
	}




	</style>
</head>
<body>
	
	<h3><pre>                                  TEMPERATURE CONVERTOR</pre></h3>
	<div class="main">
	
			<form method="POST">
				
			<input type="text" name="var" placeholder="ENTER ANY NUMBER" required><br><br>
			<label >Celcius</label>
			<input type="radio" name="btn" value="cel">
			<label>Fahrenheit</label>
			<input type="radio" name="btn" value="fah">
				<br><br>
			<input type="submit" value="CONVERT HERE" name="submit">




			</form>

			<br>
			<p >
				<?php

				if(isset($_POST['submit']))

				{

					$c_or_f=$_POST['var'];
					$option=$_POST['btn'];

						if($option=="fah")
					{

						$Fahrenheit=$c_or_f*9/5+32;
						echo "Celcius VALUE IN FAHRENHEIT IS:".$Fahrenheit;
					}
					else{


						$Celcius=($c_or_f-32)*5/9;

						echo "FAHRENHEIT VALUE IN CELCIUS IS:".$Celcius;
					}
				}

					

				?>


			</p>

	</div>

</body>
</html>