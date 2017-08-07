<?php

namespace App\Http\Controllers\Webshop;

use Illuminate\Http\Request;

class CalendarController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('webshop.pages.calendar.calendar');
    }
}
