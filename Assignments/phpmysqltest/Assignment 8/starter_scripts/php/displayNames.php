<?php

        require_once("..\classes\Pdo_methods");

        $data = json_decode($_POST['name']);


         $output = "{$data -> displayNames}";

         $response = (object)[
            'masterstatus'=>'success',
            'resp'=>$output
        ];
        
        echo json_encode($response);


?>