<?php

function bonus(): string
{
    $environment = getenv('INSTANCE_TYPE');

    if ($environment === 'build') {
        // Code spécifique à l'environnement de développement
        return "Environnement de Dev";
    } else {
        // Code spécifique à l'environnement de production
        return "Environnement de Prod";
    }
}

echo bonus();
