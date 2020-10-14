<?php
if($_GET){
    $connection = mysqli_connect("127.0.0.1", "root", "");
	mysqli_select_db($connection, "biblioteca");
	if ($_GET['keyword']!=='') {
		if(!$connection){
			die('Connection error');
		};
		
        $result = mysqli_query($connection, "SELECT * FROM carti WHERE Denumire  LIKE '%".$_GET['keyword']."%'");
        $book = mysqli_fetch_array($result);
	};
};
if($book){
    ?>
    <p>Cartea: "<?=$book['Denumire'] ?>" srisa de <?=$book['Author'] ?>.</p><br>
    <p>Editat in anul <?=$book['editedYear']?>, cu continut de <?=$book['pageNumber']?> pageni.</p>
    <?
}
?>

<form method="GET" action="searchbook.php">
	<input type="text" name="keyword">
	<input type="submit" name="Send" value="Send">
</form>
