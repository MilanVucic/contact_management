@extends('app')

@section('content')
    <div class="container">
        <form class="form-inline" method="POST" action="">

            <div>
                <label for="name">Name</label>
                <input type="text" id="name" placeholder="Name" value="{{$contact->getName()}}">
            </div>
            <div>
                <label for="name">Nickname</label>
                <input type="text" id="nickname" placeholder="Nickname" value="{{$contact->getNickname()}}">
            </div>
            <div>
                <label for="date_met">Date met</label>
                <input type="date" id="date_met" value="{{$contact->getDateMet()}}">
            </div>
            <div>
                <label for="notes">Notes</label>
                <input type="text" id="notes" placeholder="Notes" value="{{$contact->getNotes()}}">
            </div>
            <div>
                <label for="name">Preferred contact method</label>
                <select id="preferred_contact_method">
                    <option value="email" selected>Email</option>
                    <option value="phone">Phone</option>
                </select>
            </div>
            <div>
                <label for="name">Email</label>
                <input type="email" id="email" placeholder="Email address" value="{{$contact->getEmail()}}">
            </div>
            <div>
                <label for="name">Phone</label>
                <input type="tel" id="phone" placeholder="Phone number" value="{{$contact->getPhone()}}">
            </div>
            <div>
                <label for="other_contact_info_type">Other contact info</label>
                <input type="text" id="other_contact_info_type" placeholder="e.g. Facebook" value="{{$contact->getOtherContactInfoType()}}">
            </div>
            <div>
                <label for="other_contact_info_text">Other contact info</label>
                <input type="text" id="other_contact_info_text" placeholder="" value="{{$contact->getOtherContactInfoText()}}">
            </div>
            <div>
                <input type="submit" id="submit" class="btn btn-danger">
            </div>
        </form>
    </div>
@endsection