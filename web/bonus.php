<?php

function bonus(): string
{
    //On récupère la variable d'environnement, et si elle n'existe pas, on attribut 'dev' de base
    $environment = getenv('APP_ENV') ?? 'dev';

    if ($environment === 'dev') {
        return "DEV";
    } else {
        return "PROD";
    }
}

echo bonus();
