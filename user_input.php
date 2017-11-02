<?php
	include "header.php";
	if(isset($_POST['submit'])){
	  $selected_val = $_POST['type_of_development'];  // Storing Selected Value In Variable
	  $_SESSION["type_of_development"] = $selected_val;
	}

	echo "Class of Development : " .$_SESSION["class_of_development"] ;  // Displaying Selected Value
  echo "<br>";
  echo "Type of Development : " .$_SESSION["type_of_development"] ;

  $data = $_SESSION["data"];
  $class_of_development = $_SESSION["class_of_development"];
  $type_of_development = $_SESSION["type_of_development"];

	//6 advance input:
  $built_up = $data[$class_of_development][$type_of_development]["built_up"];
	$density = $data[$class_of_development][$type_of_development]["density"];
	$plot_ratio = $data[$class_of_development][$type_of_development]["plot_ratio"];
	$factor1 = $data[$class_of_development][$type_of_development]["factor1"];
	$factor2 = $data[$class_of_development][$type_of_development]["factor2"];
	$factor3 = $data[$class_of_development][$type_of_development]["factor3"];
?>

<form action="result.php" method="post">
  <h4>Basic Input</h4>
  Land Area (Acre)* / 土地面积（英亩）*: <input type="text" name="land_area" value=10><br>
  Land Cost (RM/ft2)* / 土地价值（RM/方尺）*: <input type="text" name="land_cost" value=10><br>
  Unit Selling Price (RM/ft2)* / 建筑面积单位价格（RM/方尺）*: <input type="text" name="unit_selling_price" value=300><br>
  <br>

  <h4>Advance Input</h4>
  Built Up (sq. ft): <input type="text" name="built_up" value=<?php echo $built_up; ?>><br>
	Density:	<input type="text" name="density" value=<?php echo $density; ?>><br>
	Plot Ratio: <input type="text" name="plot_ratio" value=<?php echo $plot_ratio; ?>><br>
	Factor 1: <input type="text" name="factor1" value=<?php echo $factor1; ?>><br>
	Factor 2: <input type="text" name="factor2" value=<?php echo $factor2; ?>><br>
	Factor 3: <input type="text" name="factor3" value=<?php echo $factor3; ?>><br>

	<br>
  <input class="btn btn-primary" type="submit" name="submit" value="Next" />
</form>

<?php

  include "footer.php";

?>
