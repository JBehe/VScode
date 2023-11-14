<?php

        require_once("../classes/Pdo_methods.php");

        
       $json = file_get_contents("../ajax_assignment.sql");
        

        $json = json_decode($json);
        echo $json;
        $i = 0;
        $j = 0;
        $list = '<ul>';

        while($i < count($json)){
                $list .= '<li>' . $json[$i]->name;
        
                /* NEED TO RESET J TO ZERO*/
                $j = 0;
        
                /* BECAUSE THE EDITIONS CAN HAVE MORE THAN ONE IT IS STORED AS AN ARRAY.  THIS INNER LOOP GOES THROUGH THE ARRAY AND LISTS THE EDITIONS*/
        
                $list .= '</ul></li>';
                $i++;
        }
        $response = (object) [
                'masterstatus' => 'success',
                'list' => $list,
              ];
            echo json_encode($response);
        
        /*$data = json_decode($_POST['displayNames']);


         $output = "{$data -> displayNames}";

         $response = (object)[
            'masterstatus'=>'success',
            'resp'=>$output
        ];
        
        echo json_encode($response);*/


?>