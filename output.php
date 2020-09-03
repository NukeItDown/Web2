<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body>
    <p>
        <?php
	    $arr = explode(",", $_POST["array_of_numbers"]);\
  	    sort($arr);
	    $i=0;
	    while($i<=count($arr)){
		echo $arr[$i] . " ";
		$i++;
	    };
        ?>
    </p>
</body>
</html>
