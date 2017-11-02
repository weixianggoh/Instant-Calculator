<?php
	include "header.php";

  $class_of_development = $_SESSION["class_of_development"];
  $type_of_development = $_SESSION["type_of_development"];

  echo "Class of Development : " .$_SESSION["class_of_development"] ;  // Displaying Selected Value
  echo "<br>";
  echo "Type of Development : " .$_SESSION["type_of_development"] ;

  $land_area = $_POST["land_area"];
  $land_cost = $_POST["land_cost"];
  $unit_selling_price = $_POST["unit_selling_price"];
  $built_up = $_POST["built_up"];
  $density = $_POST["density"];
  $plot_ratio = $_POST["plot_ratio"];
  $factor1 = $_POST["factor1"];
  $factor2 = $_POST["factor2"];
  $factor3 = $_POST["factor3"];

  $gdv="";
  $gdc="";

  function density_service_apartment(){
    global $plot_ratio,$density;

    $density = $plot_ratio*43560;
    return $density;
  }

  function gdv(){
    global $land_area,$land_cost,$unit_selling_price,
    $built_up,$density,$plot_ratio,$factor1,$factor2,$factor3,$gdv,$gdc;
    $gdv = $unit_selling_price*$land_area*$density*$built_up;
    return $gdv;
  }

  function gdc_terrace_cluster_semi_bungalow(){
    global $land_area,$land_cost,$unit_selling_price,
    $built_up,$density,$plot_ratio,$factor1,$factor2,$factor3,$gdv,$gdc;

    $i = $factor1*$land_area*$density*$built_up;
    $ii = round($factor2*$land_area)*300000;
    $iii = $factor3*$land_area;
    $iv = $land_cost*43560*$land_area;
    $v = 0.13*($i+$ii+$iii)+0.055*gdv();

    $gdc = $i+$ii+$iii+$iv+$v;
    return $gdc;
  }

  function gdc_apartment_flat(){
    global $land_area,$land_cost,$unit_selling_price,
    $built_up,$density,$plot_ratio,$factor1,$factor2,$factor3,$gdv,$gdc;

    $i = $factor1*$land_area*$density*($built_up+660);
    $ii = $factor3*$land_area;
    $iii = $land_cost*43560*$land_area;
    $iv = 0.13*($i+$ii)+0.055*gdv();

    $gdc = $i+$ii+$iii+$iv;
    return $gdc;
  }

  function gdc_commercial(){
    global $land_area,$land_cost,$unit_selling_price,
    $built_up,$density,$plot_ratio,$factor1,$factor2,$factor3,$gdv,$gdc;

    $i = $factor1*$land_area*$density*$built_up;
    $ii = $factor3*$land_area;
    $iii = $land_cost*43560*$land_area;
    $iv = 0.13*($i+$ii+$iii)+0.055*gdv();

    $gdc = $i+$ii+$iii+$iv;
    return $gdc;
  }

  function gdc_industrial(){
    global $land_area,$land_cost,$unit_selling_price,
    $built_up,$density,$plot_ratio,$factor1,$factor2,$factor3,$gdv,$gdc;

    $i = $factor1*$land_area*$density*$built_up;
    $ii = $factor3*$land_area;
    $iii = $land_cost*43560*$land_area;
    $iv = 0.13*($i+$ii+$iii)+0.055*gdv();

    $gdc = $i+$ii+$iii+$iv;
    return $gdc;
  }

  function profit(){
    global $land_area,$land_cost,$unit_selling_price,
    $built_up,$density,$plot_ratio,$factor1,$factor2,$factor3,$gdv,$gdc;

    return $gdv-$gdc;
  }

  function profit_margin(){
    global $land_area,$land_cost,$unit_selling_price,
    $built_up,$density,$plot_ratio,$factor1,$factor2,$factor3,$gdv,$gdc;

    return profit()/$gdc*100;
  }
?>
<br>
<br>
Land Area (Acre)* / 土地面积（英亩）*: <?php echo $built_up; ?> <br>
Land Cost (RM/ft2)* / 土地价值（RM/方尺）*: <?php echo $built_up; ?> <br>
Unit Selling Price (RM/ft2)* / 建筑面积单位价格（RM/方尺）*: <?php echo $built_up; ?><br>
<br>

Unit Built Up Area (ft2)/ 建筑面积（方尺）: <?php echo $built_up; ?> <br>
Density (units/acre)/ 发展密度 (单位/英亩）:	<?php echo $density; ?> <br>
Plot Ratio/ 地积比率 : <?php echo $plot_ratio; ?> <br>
Factor 1 : <?php echo $factor1; ?> <br>
Factor 2 : <?php echo $factor2; ?> <br>
Factor 3 : <?php echo $factor3; ?> <br>

<?php
  if($type_of_development=="single_storey_terrace_house"||
    $type_of_development=="double_storey_terrace_house"||
    $type_of_development=="cluster_house"||
    $type_of_development=="semi_detached_house"||
    $type_of_development=="bungalow"
  ){
    echo "GDV / 发展总值 : RM ".gdv();
    echo "<br>";
    echo "GDC / 发展成本 : RM ".gdc_terrace_cluster_semi_bungalow();
    echo "<br>";
    echo "Profit / 利润 : RM ".profit();
    echo "<br>";
    echo "Profit Margin / 利润率 : ".profit_margin()."%";
  }else if($type_of_development=="apartment"||$type_of_development=="flat"){
    echo "GDV / 发展总值 : RM ".gdv();
    echo "<br>";
    echo "GDC / 发展成本 : RM ".gdc_apartment_flat();
    echo "<br>";
    echo "Profit / 利润 : RM ".profit();
    echo "<br>";
    echo "Profit Margin / 利润率 : ".profit_margin()."%";
  }else if ($type_of_development=="terrace_shop") {
    echo "GDV / 发展总值 : RM ".gdv();
    echo "<br>";
    echo "GDC / 发展成本 : RM ".gdc_commercial();
    echo "<br>";
    echo "Profit / 利润 : RM ".profit();
    echo "<br>";
    echo "Profit Margin / 利润率 : ".profit_margin()."%";
  }else if ($type_of_development=="service_apartment") {
    //special situation for plot_ratio
    density_service_apartment();

    echo "GDV / 发展总值 : RM ".gdv();
    echo "<br>";
    echo "GDC / 发展成本 : RM ".gdc_commercial();
    echo "<br>";
    echo "Profit / 利润 : RM ".profit();
    echo "<br>";
    echo "Profit Margin / 利润率 : ".profit_margin()."%";
  }else if ($type_of_development=="terrace_factory"||$type_of_development=="semi_detached_factory") {
    echo "GDV / 发展总值 : RM ".gdv();
    echo "<br>";
    echo "GDC / 发展成本 : RM ".gdc_industrial();
    echo "<br>";
    echo "Profit / 利润 : RM ".profit();
    echo "<br>";
    echo "Profit Margin / 利润率 : ".profit_margin()."%";
  }
	echo "<br>";
	echo "<br>";
?>
<?php
  include "footer.php";
?>
