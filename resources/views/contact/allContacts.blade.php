@extends('app')

@section('content')
    <div class="container">
        @if(count($contacts) == 0)
            <div>
                There are currently no contacts in the list.
            </div>
        @endif
            <div>
                <table id="myTable" class="tablesorter" border="1">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Nickname</th>
                            <th>Date Met</th>
                            <th>Date Added</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td><a href="contact/{{$contact->getId()}}">{{$contact->getName()}}</a></td>
                            <td>{{$contact->getNickname()}}</td>
                            <td>{{$contact->getDateMet()}}</td>
                            <td>{{$contact->getCreatedAt()}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

    </div>
@endsection

@section('js')
    @parent
        {{--TODO: Fix see how to download jquery--}}
    {{--<script type="text/javascript" src="/path/to/jquery-latest.js"></script>--}}
    {{--<script type="text/javascript" src="/path/to/jquery.tablesorter.js"></script>--}}
@endsection