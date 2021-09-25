@extends('backend.master')
@section('content')


    <div>
    <!-- Button trigger modal -->
<button class="btn btn-primary" onclick="printDiv('printableArea')">
    <i class="bi bi-printer"></i> Print
</button>
    </div>
        <div id="printableArea">
            <h1>Booking List</h1>
    @if(session()->has('message'))
        <div class="row" style="padding: 10px;">
            <span class="alert alert-success">{{session()->get('message')}}</span>
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Room Number</th>
            <th scope="col">From Date</th>
            <th scope="col">To Date</th>
        </tr>
        </thead>
        <tbody>
        @foreach($booking as $key=>$data)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>
                {{$data->user->name}}
            </td>
            <td>{{$data->room->title}}</td>
            <td>{{$data->from_date}}</td>
            <td>{{$data->to_date}} </td>


        </tr>
        @endforeach
        </tbody>

    </table>
    </div>


    <script type="text/javascript">
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>


@endsection
