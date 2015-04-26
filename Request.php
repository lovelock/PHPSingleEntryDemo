<?php
class Request
{
    private function get()
    {
        return $_GET;
    }

    private function post()
    {
        return $_POST;
    }

    public function getValue($key)
    {
        switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            $this->get();
            break;
        case 'POST':
            $this->post();
            break;
        }
    }
}
