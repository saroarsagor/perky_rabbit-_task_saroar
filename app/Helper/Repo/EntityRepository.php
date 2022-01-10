<?php


namespace App\Helper\Repo;


class EntityRepository
{
    protected string $entity;

    protected function setEntity(string $entity): void
    {
        $this->entity = $entity;
    }

    public function save($input)
    {
        $input->save();
        return $input;
    }
}