<?php

class TestClass
{
    public function echoParam()
    {
        $param = Request::getValue('param');
        echo $param;
    }

    public function addParams()
    {
        $param1 = Request::getValue('param1');
        $param2 = Request::getValue('param2');
        echo $param1 + $param2;
    }
}
