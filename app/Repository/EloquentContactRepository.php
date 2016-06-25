<?php

namespace App\Repository;

use App\Model\Contact;

class EloquentContactRepository implements ContactRepositoryInterface
{
    /**
     * @var Contact
     */
    private $contact;

    /**
     * EloquentContactRepository constructor.
     *
     * @param Contact $contact
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * @param Contact $contact
     *
     * @return mixed
     */
    public function save(Contact $contact)
    {
        $contact->save();
    }

    /**
     * @return Collection|Contact[]
     */
    public function getAll()
    {
        return $this->contact->all();
    }

    /**
     * @param Contact $contact
     */
    public function update(Contact $contact)
    {
        $contact->update();
    }

    /**
     * @param int $id
     *
     * @return Contact|null
     */
    public function find($id)
    {
        return $this->contact->find($id);
    }

    /**
     * @param Contact $contact
     */
    public function delete(Contact $contact)
    {
        $contact->delete();
    }
}