<?php

function hello(string $node_version) : void
{
    if($node_version == "14") echo "This is it!";
    else throw new Exception("Wrong version: require node version 14");
}

$nodeVersion = getenv("CC_NODE_VERSION");

// Check if CC_NODE_VERSION is set
if ($nodeVersion !== false) {
    hello($nodeVersion);
} else {
    echo "CC_NODE_VERSION is not set.";
}