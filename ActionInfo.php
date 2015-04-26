<?php

class ActionInfo
{
    public $name;
    public $class;
    public $method;

    public function __construct($actionName, $action)
    {
        $attrs = reset($action);

        $this->name = (string)$actionName;
        $this->class = (string)$attrs['class'];
        $this->method = (string)$attrs['method'];
    }
}
