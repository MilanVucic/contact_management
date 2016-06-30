<?php namespace App\Http\Controllers;

use App\Http\Requests\AddFollowupRequest;
use App\Model\FollowUp;
use App\Repository\FollowupRepositoryInterface;
use App\Repository\ContactRepositoryInterface;

class FollowupController extends Controller
{
    /**
     * @var ContactRepositoryInterface
     */
    private $contactRepository;

    /**
     * @var FollowupRepositoryInterface
     */
    private $followupRepository;

    /**
     * FollowupController constructor.
     *
     * @param ContactRepositoryInterface  $contactRepository
     * @param FollowupRepositoryInterface $followupRepository
     */
    public function __construct(ContactRepositoryInterface $contactRepository, FollowupRepositoryInterface $followupRepository)
    {
        $this->contactRepository  = $contactRepository;
        $this->followupRepository = $followupRepository;
    }

    public function addFollowup($contactId)
    {
        return view('followup.addFollowup', [
            'contactId' => $contactId
        ]);
    }

    public function postAddFollowup(AddFollowupRequest $request)
    {
        $contactId = $request->get('contact_id');
        $preferred_followup_method = $request->get('preferred_followup_method');
        $followup_method_data = $request->get('followup_method_data');
        $reason= $request->get('reason');
        $next_meeting = $request->get('next_meeting');
        $recurring = $request->get('recurring');
        $recurring_interval = $request->get('recurring_interval');
        $recurring_frequency = $request->get('recurring_frequency');
        $completed = $request->get('completed');
        $meeting_notes = $request->get('meeting_notes');

        $contact = $this->contactRepository->find($contactId);
        if ($contact === null){
            return redirect('/');
        }

        $followup = new FollowUp();
        $followup->contact()->associate($contact)->save();
        $followup->setPreferredFollowupMethod($preferred_followup_method);
        $followup->setFollowupMethodData($followup_method_data);
        $followup->setReason($reason);
        $followup->setNextMeeting($next_meeting);
        $followup->setRecurring($recurring);
        $followup->setRecurringInterval($recurring_interval);
        $followup->setRecurringFrequency($recurring_frequency);
        $followup->setCompleted($completed);
        $followup->setMeetingNotes($meeting_notes);

        $this->followupRepository->save($followup);

        return redirect('/contact/'.$contactId);
    }

    public function editFollowup($id)
    {
        $followup = $this->followupRepository->find($id);

        return view('followup.editFollowup', [
            'followup' => $followup
        ]);
    }

}