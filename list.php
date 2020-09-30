<?

	$lista_stud = [
		[
			"nume"=>"Vladislav Odobescu",
			"grupa"=>"IS31Z",
			"nota_med"=> 9.25
		],
		[
			"nume"=>"Mihai Valentin",
			"grupa"=>"IS31Z",
			"nota_med"=> 9.50
		],
		[
			"nume"=>"Maxim Edinac",
			"grupa"=>"IS31Z",
			"nota_med"=> 7.80
		],
		[
			"nume"=>"Metriniuc Eric",
			"grupa"=>"IS31Z",
			"nota_med"=> 8.10
		],
		[
			"nume"=>"Ciobanas Igor",
			"grupa"=>"IS31Z",
			"nota_med"=> 7.50
		]
	];
	
	$lever = 8.00;

	if($_POST["not_med"]){
		$lever = $_POST["not_med"];
	}
?>
<style type="text/css">
	table, th, td {
	  border: 1px solid black;
	}
</style>
<form action="list.php" method="POST">
	<input type="number" step="0.10" name="not_med">
	<input type="submit" name="send">
</form>
<table>
  <tr>
    <th>Nume</th>
    <th>grupa</th> 
    <th>nota medie</th>
  </tr>
  <?
  foreach ($lista_stud as $data) {
  	?>
  	<tr>
  		<?
  			foreach ( $data as $row) {
  				?>
  					<td>
  						<? echo $row ?>
  					</td>
  				<?
  			}
  		?>
  	</tr>
  	<?
  }
  ?>
</table>
<br>
<p>Studentii bursieri</p>
<table>
  <tr>
    <th>Nume</th>
    <th>grupa</th> 
    <th>nota medie</th>
  </tr>
  <?
  foreach ($lista_stud as $data) {
  	if($data["nota_med"]>=$lever){
  	?>
  	<tr>
  		<?
  			foreach ( $data as $row) {
  				?>
  					<td>
  						<? echo $row ?>
  					</td>
  				<?
  			}
  		?>
  	</tr>
  	<?
  	}
  }
  ?>
</table>

<?
	$medie_grup = 0;
	$count = 0;
	foreach ($lista_stud as $data) {
		$medie_grup += $data["nota_med"];
		if($data["nota_med"]>=$lever){
			$count++;
		};
	};
	echo $medie_grup/count($lista_stud) . "<br>\n";
	echo $count;

	$med_des = array_column($lista_stud, "nota_med");
	array_multisort($med_des, SORT_DESC, $lista_stud);
	echo "<br>";
	print_r($lista_stud);

?>
