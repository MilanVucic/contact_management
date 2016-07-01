@extends('app')

@section('content')
    <div class="container">
        @if(count($followups) == 0)
            <div>
                There are currently no follow-ups in the list.
            </div>
        @endif
        <div>
            <table id="myTable" class="tablesorter table table-striped">
                <thead>
                <tr>
                    <th>Contact</th>
                    <th>Preferred follow-up method</th>
                    <th>Reason</th>
                    <th>Date created</th>
                    <th>Next meeting date</th>
                </tr>
                </thead>
                <tbody>
                @foreach($followups as $followup)
                    <tr>
                        <td><a href="contact/{{$followup->contact()->get()[0]->getId()}}">{{$followup->contact()->get()[0]->getName()}}</a></td>
                        <td>{{$followup->getPreferredFollowupMethod()}}</td>
                        <td>{{$followup->getReason()}}</td>
                        <td>{{$followup->getCreatedAt()}}</td>
                        <td>{{$followup->getNextMeeting()}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection
<link href="/js/tablesorter/themes/blue/style.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript" src="/js/tablesorter/jquery-latest.js"></script>
<script type="text/javascript" src="/js/tablesorter/jquery.tablesorter.min.js"></script>

<script>
    $(document).ready(function ($) {
                $("#myTable").tablesorter();
            }
    );
</script>
