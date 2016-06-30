<?php namespace App\Repository;

use App\Model\FollowUp;

class EloquentFollowupRepository implements FollowupRepositoryInterface
{
    /**
     * @var FollowUp
     */
    private $followUp;

    /**
     * EloquentContactRepository constructor.
     *
     * @param FollowUp $followUp
     */
    public function __construct(FollowUp $followUp)
    {
        $this->followUp = $followUp;
    }

    /**
     * @param FollowUp $followUp
     *
     * @return mixed
     */
    public function save(FollowUp $followUp)
    {
        $followUp->save();
    }

    /**
     * @return Collection|FollowUp[]
     */
    public function getAll()
    {
        return $this->followUp->all();
    }

    /**
     * @param FollowUp $followUp
     */
    public function update(FollowUp $followUp)
    {
        $followUp->update();
    }

    /**
     * @param int $id
     *
     * @return FollowUp|null
     */
    public function find($id)
    {
        return $this->followUp->find($id);
    }

    /**
     * @param FollowUp $followUp
     */
    public function delete(FollowUp $followUp)
    {
        $followUp->delete();
    }
}