@extends('app')

@section('content')
    <div>
        <button class="btn btn-danger" onclick="location.href='/contact'">
            Add new contact
        </button>
        <hr>
    </div>
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
                            <th>Name <span></span></th>
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
<link href="/js/tablesorter/themes/blue/style.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript" src="/js/jquery-3.0.0.js"></script>
    <script type="text/javascript" src="/js/tablesorter/jquery-latest.js"></script>
    <script type="text/javascript" src="/js/tablesorter/jquery.tablesorter.min.js"></script>

    <script>
        $(document).ready(function($)
                {
                    $("#myTable").tablesorter();
                }
        );
    </script>
