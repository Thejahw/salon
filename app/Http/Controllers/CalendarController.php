<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function dashboard(){
        $events=[];

        $events[]=\Calendar::event(
            "Saloon one", //title
            "true",
            '2018-10-02T0900',//fullday
            '2018-10-04T0900',
            "1" //Id
        );

        $calendar=\Calendar::addEvents($events)
            ->setoptions([

            ])->setcallbacks([

            ]);

        return view('profile')
            ->with($calendar);




    }
}
