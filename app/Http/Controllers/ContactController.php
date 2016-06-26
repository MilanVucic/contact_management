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
        $this->middleware('guest');
        $this->contactRepository = $contactRepository;
    }

    public function displayAll()
    {
        $contacts = $this->contactRepository->getAll();

        return view('contact.allContacts', [
            'contacts' => $contacts
        ]);
    }

    public function getContact($id)
    {
        $contact = $this->contactRepository->find($id);

        return view('contact.viewContact',[
            'contact' => $contact
        ]);
    }

    public function editContact($id)
    {
        $contact = $this->contactRepository->find($id);

        return view('contact.editContact',[
            'contact' => $contact
        ]);
    }

    public function postEditContact(AddContactRequest $request, $id)
    {
        $name = $request->get('name');
        $nickname = $request->get('nickname');
        $dateMet = $request->get('date_met');
        $notes= $request->get('notes');
        $preferredContactMethod = $request->get('preferred_contact_method');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $otherContactInfoType = $request->get('other_contact_info_type');
        $otherContactInfoText = $request->get('other_contact_info_text');

        $contact = $this->contactRepository->find($id);
        $contact->setName($name);
        $contact->setNickname($nickname);
        $contact->setDateMet($dateMet);
        $contact->setNotes($notes);
        $contact->setPreferredContactMethod($preferredContactMethod);
        $contact->setEmail($email);
        $contact->setPhone($phone);
        $contact->setOtherContactInfoType($otherContactInfoType);
        $contact->setOtherContactInfoText($otherContactInfoText);

        $this->contactRepository->update($contact);

        return redirect('contact/'.$id);
    }

    public function addContact()
    {
        return view('contact.addContact');
    }

    public function postAddContact(AddContactRequest $request)
    {
        $name = $request->get('name');
        $nickname = $request->get('nickname');
        $dateMet = $request->get('date_met');
        $notes= $request->get('notes');
        $preferredContactMethod = $request->get('preferred_contact_method');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $otherContactInfoType = $request->get('other_contact_info_type');
        $otherContactInfoText = $request->get('other_contact_info_text');

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

        return redirect('/');
    }
}