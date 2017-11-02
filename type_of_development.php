<?php
	include "header.php";

	if(isset($_POST['submit'])){
		$selected_val = $_POST['class_of_development'];  // Storing Selected Value In Variable
		$_SESSION["class_of_development"] = $selected_val;
	}
	echo "<p>Type of Development* / 发展样式*</p>";
	if($_SESSION["class_of_development"]=="residental"){
?>
	<form action="user_input.php" method="post">
		<select name="type_of_development">
			<option value="single_storey_terrace_house">Single Storey Terrace House</option>
			<option value="double_storey_terrace_house">Double Storey Terrace House</option>
			<option value="cluster_house">Cluster House</option>
			<option value="semi_detached_house">Semi Detached House</option>
			<option value="bungalow">Bungalow House</option>
			<option value="apartment">Apartment</option>
			<option value="flat">Flat</option>
		</select>
		<br>
		<br>
		<input class="btn btn-primary" type="submit" name="submit" value="Next" />
  </form>
<?php
	}elseif ($_SESSION["class_of_development"]=="commercial") {
?>
	<form action="user_input.php" method="post">
		<select name="type_of_development">";
			<option value="terrace_shop">Terrace Shop</option>
			<option value="service_apartment">Serviced Apartment</option>
		</select>
		<br>
		<br>
		<input class="btn btn-primary" type="submit" name="submit" value="Next" />
  </form>
<?php
	}elseif ($_SESSION["class_of_development"]=="industrial") {
?>
	<form action="user_input.php" method="post">
		<select name="type_of_development">";
			<option value="terrace_factory">Terrace Factory</option>
			<option value="semi_detached_factory">Semi-Detached Factory</option>
		</select>
		<br>
		<br>
		<input class="btn btn-primary" type="submit" name="submit" value="Next" />
  </form>
<?php
	}
?>
<?php

  include "footer.php";

?>
