<?php
    require_once("..\classes\Pdo_methods");

    $data = json_decode($_POST['name']);

    $pdo = new PdoMethods();

    $sql = "INSERT INTO names (name) VALUES (:name)";

    $bindings = [
        [':name', $data-> name, 'str']
    ];

    $result = $pdo->otherBinded($sql, $bindings);

    if ($result === 'error'){
        $response = (object)[
            'masterstatus'=>'error',
            'resp' => 'An error has occured entering that name'
        ];
    }else{
        $response = (object)[
            'masterstatus' => 'success',
            'resp' => 'name entered successfully'
        ];
    }

    $output = "{$data -> displayNames}";

         $response = (object)[
            'masterstatus'=>'success',
            'resp'=>$output
        ];
        
        echo json_encode($response);







?>