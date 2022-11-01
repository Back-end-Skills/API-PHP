<?php
    //URL API 
    $url_api = "http://localhost/github/api-php/api/";

    // função curl_init() inicializa uma nova sessão
    $curl = curl_init();

    // Esperar resposta da url 
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    // enviar a requisição
    curl_setopt($curl, CURLOPT_URL, $url_api);

    // Executar
    $dados = curl_exec($curl);

    //fechar sessão
    curl_close($curl);

    //imprimir json
    //var_dump($dados);
    
    // Converter string em array - object
    $user = json_decode($dados, false);
    //var_dump($user);

    if ($user->status == 200 ) 
    {
        foreach ($user->dados as $user_value) 
        {   
            // echo "<pre>"; var_dump($user_value); echo "</pre>";
            echo "ID do User: " . $user_value->id . "<br>";
            echo "Name do User: " . $user_value->name . "<br>";
            echo "Age do User: " . $user_value->age . "<br> <hr>";

        }

    } else {
        echo "<p style='color: #f00;'>".$user->msg . "</p>";
    }
