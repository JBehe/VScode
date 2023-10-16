<?php

class AddNames{
// unsure if the get and set method is allowed for this project but seems unneccesary. 


    //public $textHolder = "";
    //private  $breaker = "";

//$this ->textHolder = $textHolder;

public function addClearName(){
    //failed attemot to get a variable to be set button in post
 /*
    $buttonCheck = $_POST;

    if ($buttonCheck === "AddName"){
        return 111111;
    }
    else{
        return 12;
    }

*/
$breaker = '';
$textHolder = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    

    if (isset($_POST["AddName"])){

        $breaker .= $_POST["nameEntry"];

        $textHolder .= $breaker;
    }
    else{
        $textHolder = "";
    }
    return $textHolder;

}

}

}

?>
