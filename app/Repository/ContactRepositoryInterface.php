<?php
namespace ContactManagement\Repository;

use ContactManagement\Model\Contact;

interface ContactRepositoryInterface
{

    /**
     * @param Contact $contact
     *
     * @return mixed
     */
    public function save(Contact $contact);

    /**
     * @return Collection|Contact[]
     */
    public function getAll();

    /**
     * @param Contact $contact
     */
    public function update(Contact $contact);

    /**
     * @param int $id
     *
     * @return Contact|null
     */
    public function find($id);

    /**
     * @param Contact $contact
     */
    public function delete(Contact $contact);

}