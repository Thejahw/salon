<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\reservation;

class CalendarController extends Controller
{
    public function availability(Request $request){
$notification=[];
        $date= $request->query('date');
        $phase= $request->query('phase');
        $sid= $request->query('sid');
        print_r($date);
        $validatedData = $request->validate([
            'date' => 'required',
            'phase' => 'required',
        ]);

        $unavailables=DB::table('reservations')
            ->where('reservations.sId','like','%'. $sid.'%')
            ->where('reservations.saloonId','like','%'. $date.'%')
            ->get();
        print_r($unavailables);

        if($unavailables->isEmpty()) {
            $notification=array(
                'message'=>'Stylist is available',
                'alert-type'=>'success');

        }
        else{
            $notification=array(
                'message'=>'Stylist is unavailable',
                'alert-type'=>'warning');

        }



        return back()->with($notification);







    }

    public function messages()
    {
        return [
            'date.required' => 'not available',
            'phase.required'  => 'A message is required',
        ];
    }
}
