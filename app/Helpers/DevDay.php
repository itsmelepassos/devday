<?php

function developerDay()
{
    $devday = new \App\Support\DevDay();

    if (date('z') + 1 == 256) {
        $devday->setPhrase("FELIZ DIA DO PROGRAMADOR!! =D");
    } else {
        $devday->setPhrase("Até o ano que vem!");
    }

    return $devday->getPhrase();
}