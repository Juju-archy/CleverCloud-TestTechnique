<?php

function bonus(): string
{
    $environment = getenv('APP_ENV') ?? 'dev';
    echo $environment."\n";

    if ($environment === 'dev') {
        // Code spécifique à l'environnement de développement
        return "DEV";
    } else {
        // Code spécifique à l'environnement de production
        return "PROD";
    }
}

echo bonus();
