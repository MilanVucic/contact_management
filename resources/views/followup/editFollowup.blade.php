@extends('app')

@section('content')
    <div class="container">
        <form class="form-inline" method="POST" action="">

            <div>
                <label for="preferred_followup_method">Preferred follow-up method</label>
                @if($followup->getPreferredFollowupMethod() == 'text')
                <input type="radio" name="preferred_followup_method" value="text" checked> Text
                @else
                    <input type="radio" name="preferred_followup_method" value="text"> Text
                @endif
                @if($followup->getPreferredFollowupMethod() == 'call')
                <input type="radio" name="preferred_followup_method" value="call" checked> Call
                @else
                <input type="radio" name="preferred_followup_method" value="call"> Call
                @endif
                @if($followup->getPreferredFollowupMethod() == 'email')
                <input type="radio" name="preferred_followup_method" value="email" checked> Email
                @else
                <input type="radio" name="preferred_followup_method" value="email"> Email
                @endif
                @if($followup->getPreferredFollowupMethod() == 'facebook')
                <input type="radio" name="preferred_followup_method" value="facebook" checked> Facebook
                @else
                <input type="radio" name="preferred_followup_method" value="facebook"> Facebook
                @endif
                @if($followup->getPreferredFollowupMethod() == 'linkedin')
                <input type="radio" name="preferred_followup_method" value="linkedin" checked> Linkedin
                @else
                <input type="radio" name="preferred_followup_method" value="linkedin"> Linkedin
                @endif
                @if($followup->getPreferredFollowupMethod() == 'other')
                <input type="radio" name="preferred_followup_method" value="other" checked> Other
                @else
                <input type="radio" name="preferred_followup_method" value="other"> Other
                @endif
            </div>
            <div>
                <label for="followup_method_data">Follow up method data</label>
                <input type="text" id="followup_method_data" name="followup_method_data" required value="{{$followup->getFollowupMethodData()}}">
            </div>
            <div>
                <label for="reason">Reason</label>
                <input type="text" id="reason" name="reason" value="{{$followup->getReason()}}">
            </div>
            <div>
                <label for="next_meeting">Date of the next meeting</label>
                <input type="date" id="next_meeting" name="next_meeting" required value="{{$followup->getNextMeeting()}}">
            </div>
            <div>
                <label for="recurring">Recurring</label>
                @if($followup->getRecurring() > 0)
                <input type="checkbox" id="recurring" name="recurring" checked>
                @else
                    <input type="checkbox" id="recurring" name="recurring">
                    @endif
            </div>
            <div>
                <label for="recurring_interval">Recurring interval</label>
                @if($followup->getRecurringInterval() == 'day')
                <input type="radio" id="recurring_interval" name="recurring_interval" value="day" checked> Day
                @else
                <input type="radio" id="recurring_interval" name="recurring_interval" value="day"> Day
                    @endif
                @if($followup->getRecurringInterval() == 'week')
                    <input type="radio" id="recurring_interval" name="recurring_interval" value="week" checked> Week
                @else
                    <input type="radio" id="recurring_interval" name="recurring_interval" value="week"> Week
                @endif
                @if($followup->getRecurringInterval() == 'month')
                    <input type="radio" id="recurring_interval" name="recurring_interval" value="month" checked> Month
                @else
                    <input type="radio" id="recurring_interval" name="recurring_interval" value="month"> Month
                @endif
                @if($followup->getRecurringInterval() == 'quarter')
                    <input type="radio" id="recurring_interval" name="recurring_interval" value="quarter" checked> Quarter
                @else
                    <input type="radio" id="recurring_interval" name="recurring_interval" value="quarter"> Quarter
                @endif
            </div>
            <div>
                <label for="recurring_frequency">Recurring frequency</label>
                <input type="number" min="1" id="recurring_frequency" name="recurring_frequency" value="{{$followup->getRecurringFrequency()}}">
            </div>
            <div>
                <label for="completed">Completed</label>
                @if($followup->getCompleted() > 0)
                <input type="checkbox" id="completed" name="completed" checked>
                    @else
                <input type="checkbox" id="completed" name="completed">
                @endif
            </div>
            <div>
                <label for="meeting_notes">Meeting notes</label>
                <input type="text" id="meeting_notes" name="meeting_notes" value="{{$followup->getMeetingNotes()}}">
            </div>
            <div>
                <input type="submit" id="submit" class="btn btn-danger">
            </div>
        </form>
    </div>
@endsection