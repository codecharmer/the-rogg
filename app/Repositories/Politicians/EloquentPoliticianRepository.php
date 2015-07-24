<?php

namespace TheRogg\Repositories\Politicians;

use TheRogg\Domain\Politician;

class EloquentPoliticianRepository implements PoliticianRepositoryInterface
{
    public function getAll($fields = [])
    {
        $politicians = Politician::all($fields);

        return $politicians;
    }

    public function save($document)
    {
        $document->save();
    }

    public function delete($ids)
    {
        Politician::destroy($ids);
    }

    public function find($id, $fields = [])
    {
        $politician = Politician::find($id, $fields);

        return $politician;
    }

    public function findBy($field, $value, $fields = [])
    {
        $politician = Politician::where($field, $value)->project($fields)->first();

        return $politician;
    }
}