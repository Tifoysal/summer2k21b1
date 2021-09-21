<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function dateSearch(Request $request)
    {
        $booking=Booking::select('room_id')->whereBetween('from_date',[date('Y-m-d',strtotime($request->from_date)),date('Y-m-d',strtotime($request->to_date))])
            ->orWhereBetween('to_date',[date('Y-m-d',strtotime($request->from_date)),date('Y-m-d',strtotime($request->to_date))])
            ->get();

        $room_ids=collect($booking)->pluck('room_id')->toArray();

        $available=Room::whereNotIn('id',$room_ids)->get();
        dd($available);

    }
}
