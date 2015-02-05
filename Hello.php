<?php

namespace Demo;


class Hello {

    protected $name;

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function greet()
    {
        echo "Hello ".$this->name;
    }

} 