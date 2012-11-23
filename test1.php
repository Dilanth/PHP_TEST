<?php 

	error_reporting(1);
	//$dataRange = "10-17";
	
	$dataRange = trim($_POST['numrange']);
	if($dataRange!=""){
		echo $dataRange.'<br>';
		
		$data = explode("-", $dataRange);
		
		
		for($i=$data[0]; $i<=$data[1]; $i++){
		
			if($i%3==0)
				echo 'Fizz';
			else if($i%5==0)
				echo 'Buzz';
			else
				echo $i;
				
				echo ' ';
			
		}
	}

?>
<html>
<head>
	<title>Test1</title>
</head>
<body>
	<form method="post">
		<label>Enter Number Range</label><br/>
		<input type="text" name="numrange" /><br/>
		<input type="submit" value="Submit" />
	</form>
</body>
</html>