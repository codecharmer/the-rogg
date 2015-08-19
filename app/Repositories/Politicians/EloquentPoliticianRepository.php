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
        /** @noinspection PhpUndefinedMethodInspection */
        $politician = Politician::find($id, $fields);

        return $politician;
    }

    public function findBy($field, $value, $fields = [])
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $politician = Politician::where($field, $value)->project($fields)->first();

        return $politician;
    }

    public function make($name, $state, $office, $party, $photo = null, $district = null, $id = null)
    {
        $politician = new Politician();

        if (!empty($id))
            $politician->setId($id);

        $politician->setName($name);
        $politician->setState($state);
        $politician->setOffice($office);
        $politician->setParty($party);
        $politician->setPhoto($photo);
        $politician->setDistrict($district);
        $politician->save();

        return $politician;
    }

    public function isValidPolitician($politicianId)
    {
        /** @noinspection PhpUndefinedMethodInspection */
        $politician = Politician::find($politicianId);

        return !empty($politician);
    }
}