<?php

namespace TheRogg\Domain;

use Jenssegers\Mongodb\Model;

abstract class Entity extends Model implements EntityInterface
{
    public function getId() { $this->attributes['_id']; }

    protected function stringIsNullOrEmpty($string)
    {
        return !isset($string) || trim($string) == '';
    }
}