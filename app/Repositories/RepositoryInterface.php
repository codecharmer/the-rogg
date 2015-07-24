<?php

namespace TheRogg\Repositories;

use TheRogg\Domain\Entity;

interface RepositoryInterface
{
    /**
     * @param string[] $fields
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll($fields = []);

    /**
     * @param Entity $document
     */
    public function save($document);

    /**
     * @param string[]|string $ids
     */
    public function delete($ids);

    /**
     * @param string   $id
     * @param string[] $fields
     *
     * @return Entity
     */
    public function find($id, $fields = []);

    /**
     * @param string   $field
     * @param string   $value
     * @param string[] $fields
     *
     * @return Entity
     */
    public function findBy($field, $value, $fields = []);
}