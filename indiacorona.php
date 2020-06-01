<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
</head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
  margin-top: 7%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
tr:nth-child(even) {background-color: #f2f2f2;}
</style>
<body>

		 	<nav id="page-title">
	 			<a  href="indiacorona.php" >IndiacoronaLive</a>
	            <a  class="active" href="Safety.html">SafetyGuide</a>
	            <a   href="quiz.html" >Quiz</a>
	
        </nav>
        <br>
        <br>
        <h1 style="text-align: center;">INDIA COVID-19 LIVE STATUS ..</h1>
		<table >
			<tr>
				<th class="text-capitalize">States</th>
				<th class="text-capitalize">Confirmed</th>
				<th class="text-capitalize">Active</th>
				<th class="text-capitalize">Recovered</th>
				<th class="text-capitalize">Deaths</th>
			</tr>
		
	
	

<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);



$i=1;
while($i < $statescount){
	?>
	<tr>
		<td><?php  echo $coranalive['statewise'][$i]['state'] ?></td>
		<td><?php  echo $coranalive['statewise'][$i]['confirmed'] ?></td>
		<td><?php  echo $coranalive['statewise'][$i]['active'] ?></td>
		<td><?php  echo $coranalive['statewise'][$i]['recovered'] ?></td>
		<td><?php  echo $coranalive['statewise'][$i]['deaths'] ."<br>";?></td>
	</tr>

 <?php

  $i++;
}


?>
</table>
</body>
</html>