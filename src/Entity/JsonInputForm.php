<?php

namespace App\Entity;

class JsonInputForm
{
    private $jsonString;

    public function getJsonString(): string 
    {
        return $this->jsonString;
    }

    public function setJsonString($jsonString): void
    { 
        $this->jsonString = $jsonString;
    }
}
