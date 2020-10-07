<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;

class Model extends Controller
{
    function __get($name)
    {
        $namespace = '\\App\\Model\\' . $name;
        $this->name = new $namespace;
        return $this->name;
    }
}
