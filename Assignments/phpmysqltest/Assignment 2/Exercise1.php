<html lang="en">
<head>   
<meta charset="UTF-8">
<?php


function listMaker(){

    $listNum = 4 ;
    $listContent = Array("1","2","3","4","5");
    $starter = '<ul>';
    $ender = '</ul>';
    $listStarter = '<li>';
    $listEnder = '</li>';

    for ($x = 0; $x < $listNum; $x++){
        echo $starter;
        echo $listStarter;
        echo $x+1;
        echo $listEnder;
        for ($y = 0; $y < count($listContent); $y++){
            echo $starter;
            echo $listStarter;
            echo $listContent[$y];
            echo $listEnder;
            echo $ender;
           
        }
        echo $ender;
        

       
    }
    
}


?>




</head>




<body>
<?php listMaker() ?>
    
</html>