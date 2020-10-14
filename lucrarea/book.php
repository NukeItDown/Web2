<?php
$connection = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($connection, "biblioteca");
$result = mysqli_query($connection, "SELECT * FROM carti");
?>
<style>
    table,td,tr{
        border: 1px solid black;
    }
</style>
<table>
    <tr>
        <td>Autorul: </td>
        <td>Denumire: </td>
        <td>Numarul de pagini: </td>
        <td>Anul editari:</td>
        <td>Edit:</td>
    </tr>
    <?
    while ($book = mysqli_fetch_array($result)) {
    ?>
    <tr>
        <td><?=$book['Author']?></td>
        <td><?=$book['Denumire']?></td>
        <td><?=$book['pageNumber']?></td>
        <td> <?=$book['editionYear']?></td>
        <td><a href="updatebook.php?id=<?=$book['bookNum']?>">click</a></td>
    </tr>
    <?
    };
?>
</table>
