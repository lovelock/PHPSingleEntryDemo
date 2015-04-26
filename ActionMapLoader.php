<?php

class ActionMapLoader
{
    protected $map;

    public function __construct($mapFile)
    {
        $this->map = simplexml_load_file($mapFile);
    }

    public function getMap()
    {
        return $this->map;
    }
}

