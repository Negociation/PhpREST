<?php

namespace Models;

class ModelTemplate
{

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        if (isset($this->$name)) {
            return (is_null($this->$name)) ? NULL : $this->$name;
        } else {
            return false;
        }
    }

    public function unset($name)
    {
        unset($this->$name);
    }

    public function isset($name)
    {
        return isset($this->$name);
    }
}
