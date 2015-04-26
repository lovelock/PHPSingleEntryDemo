<?php

class TestClass
{
    public function echoParam()
    {
        $param = $_GET['param'];
        echo $param;
    }
    
    public function addParams()
    {
        $param1 = $_GET['param1'];
        $param2 = $_GET['param2'];
        echo $param1 + $param2;
    }
}
