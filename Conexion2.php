<?php


require_once  'vendor/autoload.php';

use GraphAware\Neo4j\Client\ClientBuilder;

$client = ClientBuilder::create()
    ->addConnection('LibrosDB', 'bolt://neo4j:1234@localhost:7687')
    ->build();
?>
