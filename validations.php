<?php

function verifVoiture($voiture)
{
    if ($voiture != "oui" && $voiture != "non") {
        echo "BAAD,  soit c'est un oui ou c'est un nom";
    } else {
        return $voiture;
    }
}