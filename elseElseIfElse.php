<!DOCTYPE html>
<html>
	<head> 
		<title></title>
	</head>
	<body>
	
	<?php
		if (isset($_POST["submit"]))
		{
			if ($_POST["bewerking"] == "som")
			{
				$som = $_POST["getal1"] + $_POST["getal2"];
				echo "De som van ".$_POST["getal1"].
						" en ".$_POST["getal2"]." is: ".$som;
			}
			else if ($_POST["bewerking"] == "verschil")
			{
				$verschil = $_POST["getal1"] - $_POST["getal2"];
				echo "Het verschil van ".$_POST["getal1"].
						" en ".$_POST["getal2"]." is: ".$verschil;
			}
			else if ($_POST["bewerking"] == "product")
			{
				$product = $_POST["getal1"] * $_POST["getal2"];
				echo "Het product van ".$_POST["getal1"].
						" en ".$_POST["getal2"]." is: ".$product;
			}
			else if ($_POST["bewerking"] == "quotient")
			{
				$quotient = $_POST["getal1"] / $_POST["getal2"];
				echo "Het quotient van ".$_POST["getal1"].
						" en ".$_POST["getal2"]." is: ".$quotient;
			}
			else if ($_POST["bewerking"] == "kies")
			{
				echo "U heeft geen bewerking gekozen, kies een bewerking";
				header("refresh:4;url=elseElseIfElse.php");
			}
			else
			{
				header("refresh:4;url=elseElseIfElse.php");
			}
		}
		else
		{
	?>
			<h3>Voer in de twee onderstaande tekstvakken <br>
			twee getallen in tussen de 0 en 100.</h3>
		
			<form action="elseElseIfElse.php" method="post">
				Eerste getal: <input type="number" min=0 max=100 name="getal1" /><br>
				Tweede getal: <input type="number" min=0 max=100 name="getal2" /><br>
				
				<select name="bewerking">
					<option value="kies">--kies een bewerking--</option>
					<option value="som">som(+)</option>
					<option value="verschil">verschil(-)</option>
					<option value="product">product(x)</option>
					<option value="quotient">quotient(/)</option>
				</select><br>
				
				<input type="submit" name="submit" value="reken uit!" />
			</form>';	
	<?php	
		}	
	?>	
	</body>
</html>