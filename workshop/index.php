<?php

require '../vendor/autoload.php';

$graphson = new \Graph\Graphson();

$graph  = $graphson->importFromJSON(
    file_get_contents('../src/example-graph.json')
);

var_dump(
    $graphson->exportToJSON(
    $graph  = $graphson->importFromJSON(
            $graphson->exportToJSON(
                $graphson->importFromJSON(
                    file_get_contents('../src/example-graph.json')
                )
            )
    )
    )
);

