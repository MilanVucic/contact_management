@extends('app')

@section('content')
    <div class="container">
        <form class="form-inline" method="POST" action="">

            <div>
                <label for="preferred_followup_method">Preferred follow-up method</label>
                <input type="radio" name="preferred_followup_method" value="text" checked> Text
                <input type="radio" name="preferred_followup_method" value="call"> Call
                <input type="radio" name="preferred_followup_method" value="email"> Email
                <input type="radio" name="preferred_followup_method" value="facebook"> Facebook
                <input type="radio" name="preferred_followup_method" value="linkedin"> Linkedin
                <input type="radio" name="preferred_followup_method" value="other"> Other
            </div>
            <div>
                <label for="followup_method_data">Follow up method data</label>
                <input type="text" id="followup_method_data" name="followup_method_data" required>
            </div>
            <div>
                <label for="reason">Reason</label>
                <input type="text" id="reason" name="reason">
            </div>
            <div>
                <label for="next_meeting">Date of the next meeting</label>
                <input type="date" id="next_meeting" name="next_meeting" required>
            </div>
            <div>
                <label for="recurring">Recurring</label>
                <input type="checkbox" id="recurring" name="recurring" checked>
            </div>
            <div>
                <label for="recurring_interval">Recurring interval</label>
                <input type="radio" id="recurring_interval" name="recurring_interval" value="day" checked> Day
                <input type="radio" id="recurring_interval" name="recurring_interval" value="week"> Week
                <input type="radio" id="recurring_interval" name="recurring_interval" value="month"> Month
                <input type="radio" id="recurring_interval" name="recurring_interval" value="quarter"> Quarter
            </div>
            <div>
                <label for="recurring_frequency">Recurring frequency</label>
                <input type="number" min="1" id="recurring_frequency" name="recurring_frequency">
            </div>
            <div>
                <label for="completed">Completed</label>
                <input type="checkbox" id="completed" name="completed">
            </div>
            <div>
                <label for="meeting_notes">Meeting notes</label>
                <input type="text" id="meeting_notes" name="meeting_notes">
            </div>
            <div>
                <input hidden id="contact_id" name="contact_id" value="{{$contactId}}">
            </div>
            <div>
                <input type="submit" id="submit" class="btn btn-danger">
            </div>
        </form>
    </div>
@endsection