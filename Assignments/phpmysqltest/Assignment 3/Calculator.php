
<?php

class Calculator{

//function checks if pramaters a filled appropriatly and outputs answer through a series of ifelse statements
public function calc($opperator, $number1 = null, $number2 = null){

    if ($number1 === null || $number2 === null){
        return "You must enter a string and two numbers <br>";
    }
    
    
    if ($opperator == "/"){
        if ($number2 === 0){
            return "Cannot divide by zero <br>";
        }
        else{
            $total = $number1 / $number2;
            return "The division of the given numbers are $total <br>";
        }
    }
    elseif ($opperator == "*"){
        $total = $number1 * $number2;
        return "The product of the given numbers are $total <br>";
    }
    elseif ($opperator == "-"){
        $total = $number1 - $number2;
        return "The difference of the given numbers are $total <br>";
    }
    elseif ($opperator == "+"){
        $total = $number1 + $number2;
        return "The sum of the given numbers are $total <br>";
    }
    
    



}

}


?>