<?php

function bonus(): string
{
    $environment = getenv('INSTANCE_TYPE') ?? 'build';
    echo $environment."\n";

    if ($environment === 'build') {
        // Code spécifique à l'environnement de développement
        return "DEV";
    } else {
        // Code spécifique à l'environnement de production
        return "PROD";
    }
}

echo bonus();
