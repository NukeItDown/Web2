<?php
if($_POST){
    $connection = mysqli_connect("127.0.0.1", "root", "");
	mysqli_select_db($connection, "biblioteca");
	if ($_POST['Author']!=='' AND $_POST['Denumire']!=='') {
		if(!$connection){
			die('Connection error');
		};
		
		if(
			mysqli_query($connection,
			"INSERT INTO carti (`Author`, `Denumire`, `pageNumber`, `editionYear`) VALUES ('".$_POST['Author']."',
					'".$_POST['Denumirea']."',
					".$_POST['pageNumber'].",
					".$_POST['editionYear'].")"
			)
		){
			echo 'Success.';
		} else {
  			echo "Error: <br>" . mysqli_error($connection);
		}
	}
}

?>

<form method="POST" action="addbook.php">
	<input type="text" name="Author" placeholder="Autorul"">
	<input type="text" name="Denumirea" placeholder="Denumire">
	<input type="number" name="editionYear" placeholder="Anul editari" min="1900" max="2050">
	<input type="number" name="pageNumber" placeholder="Numarul de pageni">
	<input type="submit" name="Send" value="Send">
</form>
