<?php

namespace App\Repository;

use App\Model\FollowUp;

interface FollowupRepositoryInterface
{
    /**
     * @param FollowUp $followUp
     *
     * @return mixed
     */
    public function save(FollowUp $followUp);

    /**
     * @return Collection|FollowUp[]
     */
    public function getAll();

    /**
     * @param FollowUp $followUp
     */
    public function update(FollowUp $followUp);

    /**
     * @param int $id
     *
     * @return FollowUp|null
     */
    public function find($id);

    /**
     * @param FollowUp $followUp
     */
    public function delete(FollowUp $followUp);

}