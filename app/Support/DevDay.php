<?php

namespace App\Support;

/**
 * 
 */
class DevDay
{
    /** @var string */
    private string $phrase;

    /**
     * Set phrase
     *
     * @param string $phrase
     * @return void
     */
    public function setPhrase(string $phrase): void
    {
        $this->phrase = "<h1>{$phrase}</h1>";
    }

    /**
     * Obtain phrase
     *
     * @return void
     */
    public function getPhrase(): string
    {
        echo $this->phrase;
    }
}
