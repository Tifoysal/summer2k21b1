<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $title='Dashboard';
        $link='Dashboard / home';
        $booking_count=Booking::all()->count();

        return view('backend.layouts.home',compact('title','link','booking_count'));
    }

    public function contact()
    {
        return view('backend.layouts.contact');
    }

    public function report()
    {
        $booking=Booking::with(['user','room'])->get();
//        dd($booking);

        return view('backend.layouts.report-data',compact('booking'));

    }
}
