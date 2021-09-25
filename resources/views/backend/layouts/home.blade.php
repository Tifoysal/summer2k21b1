@extends('backend.master')

@section('content')

    <div class="row" style="margin-top: 100px;">
        <div class="col-md-3" style="background-color: green; padding: 10px; margin-right: 10px">
            <h1>Total sale</h1>
            <p><h4>{{$booking_count}}</h4></p>
        </div>
        <div class="col-md-3" style="background-color: red; padding: 10px; margin-right: 10px">
            <h1>Total customer</h1>
            <p><h4>{{$booking_count}}</h4></p>
        </div>
        <div class="col-md-3" style="background-color: orange; padding: 10px; margin-right: 10px;">
           <h1>Total Booking</h1>
            <p><h4>{{$booking_count}}</h4></p>
        </div>


    </div>

@endsection
