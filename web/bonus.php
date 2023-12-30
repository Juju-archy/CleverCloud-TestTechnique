<?php

function bonus(): string
{
    //On récupère la variable d'environnement, et si elle n'existe pas, on attribut 'dev' de base
    $environment = getenv('APP_ENV') ?? 'dev';

    if ($environment === 'dev') {
        // Code spécifique à l'environnement de développement
        return "DEV";
    } else {
        // Code spécifique à l'environnement de production
        return "PROD";
    }
}

echo bonus();
