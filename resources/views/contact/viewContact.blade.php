@extends('app')

@section('content')

    <div class="container">
        <div id="contact" style="width: 500px; float: left">
            <h3>
                Contact Information
            </h3>
            <div>
                <span>{{$contact->getName()}}</span>
            </div>
            <div>
                <span>{{$contact->getNickname()}}</span>
            </div>
            <div>
                <span>{{$contact->getDateMet()}}</span>
            </div>
            <div>
                <span>{{$contact->getNotes()}}</span>
            </div>
            <div>
                <span>{{$contact->getPreferredContactMethod()}}</span>
            </div>
            <div>
                <span>{{$contact->getEmail()}}</span>
            </div>
            <div>
                <span>{{$contact->getPhone()}}</span>
            </div>
            <div>
                <span>{{$contact->getOtherContactInfoType()}}</span>
            </div>
            <div>
                <span>{{$contact->getOtherContactInfoText()}}</span>
            </div>
            <div>
                <button class="btn btn-warning" onclick="location.href = 'edit/{{$contact->getId()}}'">
                    Edit contact
                </button>
            </div>
        </div>
        @if($followup!=null)
            <h4>
                Follow up information
            </h4>
            <div id="followup">
                <div>
                    <label for="preferred_followup_method">Preferred follow-up method: </label>
                    <span id="preferred_followup_method">{{$followup->getPreferredFollowupMethod()}}</span>
                </div>
                <div>
                    <label for="followup_method_data">Follow-up method data: </label>
                    <span id="followup_method_data">{{$followup->getFollowupMethodData()}}</span>
                </div>
                <div>
                    <label for="reason">Reason: </label>
                    <span id="reason">{{$followup->getReason()}}</span>
                </div>
                <div>
                    <label for="next_meeting">Next meeting: </label>
                    <span id="next_meeting">{{$followup->getNextMeeting()}}</span>
                </div>
                <div>
                    <label for="recurring">Is recurring: </label>
                    <span id="recurring">{{boolval($followup->getRecurring()) ? 'Yes' : 'No'}}</span>
                </div>
                @if($followup->getRecurring() > 0)
                <div>
                    <label for="recurring">Repeats every: </label>
                    <span id="recurring">{{$followup->getRecurringFrequency()}} {{$followup->getRecurringInterval()}}s</span>
                </div>
                @endif
                <div>
                    <label for="completed">Is completed: </label>
                    <span id="completed">{{boolval($followup->getCompleted()) ? 'Yes' : 'No'}}</span>
                </div>
                @if($followup->getMeetingNotes() != null)
                    <div>
                        <label for="meeting_notes">Meeting notes: </label>
                        <span id="meeting_notes">{{$followup->getMeetingNotes()}}</span>
                    </div>
                @endif
                <div>
                    <button class="btn btn-warning" onclick="location.href = '/followup/edit/{{$followup->getId()}}'">
                        Edit follow-up
                    </button>
                </div>
            </div>
        @else
            <button class="btn btn-danger" onclick="location.href = '/followup/{{$contact->getId()}}'">
                Add a followup
            </button>
        @endif
    </div>

@endsection