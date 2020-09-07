
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php 
    $marfa = [
        "Lactate" => [
            "produs1L" => 1,
            "produs2L" => 2,
            "produs3L" => 3
        ],
        "Carne" => [
            "produs4L" => 4,
            "produs5L" => 5,
            "produs6L" => 6
        ],
        "Legume" => [
            "produs7L" => 7,
            "produs8L" => 8,
            "produs9L" => 9
        ]
    ];

    $cost = [
        "1" => 10,
        "2" => 12,
        "3" => 5,
        "4" => 6,
        "5" => 15,
        "6" => 10,
        "7" => 16,
        "8" => 13,
        "9" => 18
    ]
?>
  <table border="1">
    <tr>
      <th>Categorie</th>
      <th colspan="100%">*</th>
    </tr>
    <? foreach($marfa as $categorie => $produs) {?>
      <tr>
        <th><?=$categorie ?></th>
      
        <? foreach($produs as $p => $id){?>
          <td> <?=$marfa[$categorie][$p] . " " . $cost[$id]?> </td>
        <? }?>
      </tr>
    <? }?>
  </table>
</body>
</html>
