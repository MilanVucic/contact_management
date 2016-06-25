<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddContactRequest;
use App\Model\Contact;
use App\Repository\ContactRepositoryInterface;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class ContactController extends Controller
{
    /**
     * @var ContactRepositoryInterface
     */
    private $contactRepository;

    /**
     * ContactController constructor.
     *
     * @param ContactRepositoryInterface $contactRepository
     */
    public function __construct(ContactRepositoryInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }


    public function postAddContact(AddContactRequest $request)
    {
        $name = $request->get('name');
        $nickname = $request->get('nickname');
        $dateMet = $request->get('dateMet');
        $notes= $request->get('notes');
        $preferredContactMethod = $request->get('preferredContactMethod');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $otherContactInfoType = $request->get('otherContactInfoType');
        $otherContactInfoText = $request->get('otherContactInfoText');

        $contact = new Contact();
        $contact->setName($name);
        $contact->setNickname($nickname);
        $contact->setDateMet($dateMet);
        $contact->setNotes($notes);
        $contact->setPreferredContactMethod($preferredContactMethod);
        $contact->setEmail($email);
        $contact->setPhone($phone);
        $contact->setOtherContactInfoType($otherContactInfoType);
        $contact->setOtherContactInfoText($otherContactInfoText);

        $this->contactRepository->save($contact);

        return new JsonResponse($contact);
    }
}