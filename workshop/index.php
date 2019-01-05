<?php

require '../vendor/autoload.php';

$graphson = new \Graph\Graphson();

var_dump(
    $graphson->importFromJSON(
            $graphson->exportToJSON(
                $graphson->importFromJSON(
                    file_get_contents('../src/example-graph.json')
                )
            )
    )
);

