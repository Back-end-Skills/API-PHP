<?php
    include_once "connection.php";

    // Cabeçalho pra retornar o json
    header("Content-type: application/json; charset=UTF-8");

    // $query_user = "SELECT * FROM user WHERE id = 25444";
    $query_user = "SELECT * FROM user ";


    $result = $conn->prepare($query_user);
    $result->execute();

    if (($result) && ($result->rowCount() > 0 )) 
    {
        $date_user =  $result->fetchAll();
        
        // echo "<pre>"; var_dump($date_user); echo "</pre>";

        echo json_encode([
            'status' => 200,
            'dados' => $date_user
        ]);
    } else {
        
        echo json_encode([
            'status' => 404,
            'msg' => 'Erro!'
        ]);
    }