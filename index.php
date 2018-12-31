<?php
    require __DIR__ . '/vendor/autoload.php';

    $data = file_get_contents ("src/example-graph.json");
    $json = json_decode($data, true);

    $graph = new Graph\Graph($json);
    echo "v: " . $graph->countVertices();
    echo PHP_EOL . "e:" . $graph->countEdges();
