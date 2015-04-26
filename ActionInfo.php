<?php

class ActionInfo
{
    public $name;
    public $class;
    public $method;

    public function __construct($actionName, $action)
    {
        $attrs = reset($action);

        $this->name = $actionName;
        $this->class = $attrs['class'];
        $this->method = $attrs['method'];
    }
}
