<?php

class Controller
{
    protected $mapFile;

    public function __construct($mapFile)
    {
        $this->mapFile = $mapFile;
    }

    public function getActionInfo ($actionName)
    {
        $map = new ActionMapLoader($this->mapFile);
        foreach ($map->getMap()->action as $action) {
            if (strcasecmp($actionName, (string)$action['name']) == 0) {
                return new ActionInfo($actionName, $action);
            }
        }
    }

    public function process()
    {
        $actionName = $_GET['op'];
        $actionInfo = $this->getActionInfo($actionName);

        $class = $actionInfo->class;
        $method = $actionInfo->method;

        (new $class())->$method();
    }
}
