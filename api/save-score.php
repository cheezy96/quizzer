<?php

    $dsn = "mysql:
            host=localhost;
            dbname=quizzer;
            user=root;
            password=;
    ";

    $conn = new PDO($dsn);

    $name = $_GET['name'];
    $score = $_GET['score'];
    $time = $_GET['time'];

    echo $time;


    $conn->query("INSERT INTO `results` (`id`, `name`, `score`, `date`, `time`) VALUES (NULL, '$name', '$score', current_timestamp(), '$time');");