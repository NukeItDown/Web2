<?php
	$connection = mysqli_connect("127.0.0.1", "root", "");
	mysqli_select_db($connection, "biblioteca");
if($_POST){
	if ($_POST['Author']!=='' AND $_POST['Denumire']!=='') {
		if(!$connection){
			die('Connection error');
		};
		
		if(
			mysqli_query($connection,
			"UPDATE carti SET `Author` = '".$_POST['Author']."',
					`Denumire` = '".$_POST['Denumirea']."',
					`pageNumber` = ".$_POST['pageNumber'].",
					`editionYear` = ".$_POST['editionYear']." WHERE bookNum = ".$_GET['id'].""
			)
		){
			echo 'Success.';
		} else {
  			echo "Error: <br>" . mysqli_error($connection);
		}
	}
}

$result = mysqli_query($connection, "SELECT * FROM carti WHERE bookNum = ".$_GET['id']."");
$book = mysqli_fetch_assoc($result);
?>

<form method="POST" action="updatebook.php?id=<?=$_GET['id'] ?>">
	<input type="text" name="Author" placeholder="Autorul" value="<?=$book['Author']?>">
	<input type="text" name="Denumirea" placeholder="Denumire" value="<?=$book['Denumire']?>">
	<input type="number" name="editionYear" placeholder="Anul editari" min="1900" max="2050" value="<?=$book['editionYear']?>">
	<input type="number" name="pageNumber" placeholder="Numarul de pageni" value="<?=$book['pageNumber']?>">
	<input type="submit" name="Send" value="Send">
</form>
