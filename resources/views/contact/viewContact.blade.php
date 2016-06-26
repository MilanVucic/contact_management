@extends('app')

@section('content')

    <div class="container">
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

    </div>

    <div>
        <button class="btn btn-warning" onclick="location.href = 'edit/{{$contact->getId()}}'">
            Edit
        </button>
    </div>

@endsection