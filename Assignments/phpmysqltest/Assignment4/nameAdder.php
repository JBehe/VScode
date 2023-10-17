<?php

class AddNames{
// unneccesary start to an unneeded getter and setter


    //public $textHolder = "";
    //private  $breaker = "";

//$this ->textHolder = $textHolder;
public function addClearName(){
 
$breaker = '';
$textHolder = "";

   //failed attempt to get a variable to be set button in post
 /*
    $buttonCheck = $_POST;

    if ($buttonCheck === "AddName"){
        return 111111;
    }
    else{
        return 12;
    }

*/ 
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    
    

    if (isset($_POST["AddName"])){

       
        $breaker .= $_POST["nameEntry"];
        
        
        $explode= explode(' ', $breaker);

        [$explode[0], $explode[1]] = [$explode[1], $explode[0]];

         sort($explode); 

         $explode[0] .= ", ";

       
        $textHolder = implode($explode) ;
       
        $textHolder .= "\n";
        $textHolder .= $_POST["namelist"]; 

        $list = explode("\n", $textHolder);

        sort($list);
        for ($i = 0; $i < count($list); $i++){
            $list[$i] .= "\n";

        }

        $output = implode($list);
        return $output;
         


    

    }
    else{
        return $textHolder = "";
    }



    //block of commented out code here was my failed attepmts on how swap the first and second word of the input text field

    /*$holder = implode($swapper);

       $textHolder .= $holder;

        $textHolder .= "\n";*/

       /* $breaker = explode(" ", $textHolder);
        if(count($breaker) > 1) {
            $lname = array_pop($parts);
            $firstname = implode(" ", $parts);
        }
    else{
        $firstname = $textHolder;
        $lastname = " ";
    } */
        
        

        
        /*$textplacer =  str_split($textHolder);
        sort($textplacer);
        $textplacer = implode($textplacer);*/

    

}

}

}

?>
