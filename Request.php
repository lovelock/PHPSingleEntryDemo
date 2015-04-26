<?php

namespace \PHPSingleEntryDemo;
class Request
{
    public function getValue($key)
    {
        switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            $request = $_GET;
            break;
        case 'POST':
            $request = $_POST;
            break;
        }

        return $request[$key];
    }
}
