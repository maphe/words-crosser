<?php

namespace Cross\GameBundle\Grid\Box;

class BoxFactory
{
    public function create($type)
    {
        $namespace = 'Cross\\GameBundle\\Grid\\Box\\Type\\';
        $class = $namespace.ucfirst($type);
        return new $class;
    }
}