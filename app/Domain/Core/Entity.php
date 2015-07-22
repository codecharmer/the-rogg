<?php

namespace TheRogg\Domain;

use InvalidArgumentException;
use Jenssegers\Mongodb\Model;

abstract class Entity extends Model implements EntityInterface
{
    public function getId() { $this->attributes['_id']; }
    public function setId($id)
    {
        if ($this->stringIsNullOrEmpty($id))
            throw new InvalidArgumentException('ID cannot be empty.');

        $this->attributes['_id'] = $id;
    }

    protected function stringIsNullOrEmpty($string)
    {
        return !isset($string) || trim($string) == '';
    }
}