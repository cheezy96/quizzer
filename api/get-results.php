<?php

    $dsn = "mysql:
            host=localhost;
            dbname=quizzer;
            user=root;
            password=;
    ";

    $conn = new PDO($dsn);

    $results = $conn->query("SELECT * FROM `results` ORDER BY `results`.`time` ASC")
                    ->fetchAll();
                    
    header('Content-type: json');
    echo json_encode($results);