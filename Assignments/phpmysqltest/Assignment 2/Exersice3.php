<!DOCTYPE html>
<html lang="en">
<head>   
<meta charset="UTF-8">

<?php

function table(){

    $rowNum = 15;
    $colloumNum = 5;
    $row = 1;
    $col = 1;

    for ($x = 0; $x < $rowNum; $x++){
        $col = 1;
        echo "<tr>";
        for($y = 0; $y < $colloumNum; $y++){
            echo "<td> Row ($row) Cell ($col) </td>";
            $col++;
        }
        $row++;
        echo "</tr>";
        
        
        
    }
    


}

?>

<body>

<table border ="1">
<tr>
 <?php table() ?>
</tr>

 
</table>




</body>
</html>