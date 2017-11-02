<?php
	session_start();
	$data =
	array(
		"residental" => array(
			"single_storey_terrace_house" => array(
				"plot_ratio"=>"N/A",
				"density"=>11,
				"built_up"=>1000,
				"factor1"=>113,
				"factor2"=>0.088,
				"factor3"=>500000),
			"double_storey_terrace_house" => array(
				"plot_ratio"=>"N/A",
				"density"=>11,
				"built_up"=>2000,
				"factor1"=>113,
				"factor2"=>0.088,
				"factor3"=>500000),
			"cluster_house" => array(
				"plot_ratio"=>"N/A",
				"density"=>7,
				"built_up"=>2000,
				"factor1"=>115,
				"factor2"=>0.056,
				"factor3"=>500000),
			"semi_detached_house" => array(
				"plot_ratio"=>"N/A",
				"density"=>7,
				"built_up"=>2800,
				"factor1"=>167,
				"factor2"=>0.056,
				"factor3"=>500000),
			"bungalow" => array(
				"plot_ratio"=>"N/A",
				"density"=>4,
				"built_up"=>3500,
				"factor1"=>217,
				"factor2"=>0.032,
				"factor3"=>500000),
			"apartment" => array(
				"plot_ratio"=>"N/A",
				"density"=>40,
				"built_up"=>850,
				"factor1"=>155,
				"factor2"=>"N/A",
				"factor3"=>2000000),
			"flat" => array(
				"plot_ratio"=>"N/A",
				"density"=>40,
				"built_up"=>720,
				"factor1"=>135,
				"factor2"=>"N/A",
				"factor3"=>900000),
		),
		"commercial" => array(
			"terrace_shop" => array(
				"plot_ratio"=>"N/A",
				"density"=>7,
				"built_up"=>5700,
				"factor1"=>93,
				"factor2"=>"N/A",
				"factor3"=>500000),
	    "service_apartment" => array(
				"plot_ratio"=>"N/A",
				"density"=>4,
				"built_up"=>1,
				"factor1"=>166,
				"factor2"=>"N/A",
				"factor3"=>2000000),
		),
	  "industrial" => array(
			"terrace_factory" => array(
				"plot_ratio"=>"N/A",
				"density"=>5,
				"built_up"=>4000,
				"factor1"=>125,
				"factor2"=>"N/A",
				"factor3"=>500000),
	    "semi_detached_factory" => array(
				"plot_ratio"=>"N/A",
				"density"=>2.5,
				"built_up"=>7000,
				"factor1"=>125,
				"factor2"=>"N/A",
				"factor3"=>500000),
		),
	);
	$_SESSION['data'] = $data;
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </head>
  <body>
	<div class="container">
		<nav class="navbar navbar-dark bg-dark">
		  <span class="navbar-brand mb-0 h1">Instant Calculator</span>
		</nav>
