<?php

namespace App\Http\Controllers;

use App\BusSchedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BusController extends Controller
{
    public function showAddBusForm(){
       return view('bus.add');
    }
    public function deleteBus($id){
        $bus=BusSchedule::find($id);
        $bus->delete();
        return redirect('/system/buses/list');
    }
    public function showEditForm($id){
        $bus=BusSchedule::find($id);
        return view('bus.edit',['bus'=>$bus]);
     }
    public function busList(){
        $buses=BusSchedule::all();
        return view('bus.list',['buses'=>$buses]);
     }
     public function updateBus($id,Request $request){
        $bus=BusSchedule::find($id);
        $request->validate([
            'name' => ['required'],
            'route' => ['required'],
            'fare' => ['required'],
            'departure' => ['required'],
            'arrival' => ['required'],

        ]);
        $bus->update([
            "name"=>$request->name,
            "route"=>$request->route,
            "fare"=>$request->fare,
            "departure"=>$request->departure,
            "arrival"=>$request->arrival,
            "operator"=>$request->operator,
            "seat_row"=>$request->seat_row,
            "seat_column"=>$request->seat_column,

        ]);
        return redirect('/system/buses/list');
     }
    public function addBus(Request $request){
        $request->validate([
            'name' => ['required'],
            'route' => ['required'],
            'fare' => ['required'],
            'departure' => ['required'],
            'arrival' => ['required'],

        ]);

        BusSchedule::create([
            "name"=>$request->name,
            "route"=>$request->route,
            "fare"=>$request->fare,
            "departure"=>$request->departure,
            "arrival"=>$request->arrival,
            "operator"=>$request->operator,
            "seat_row"=>$request->seat_row,
            "seat_column"=>$request->seat_column,

        ]);
        return redirect('/system/buses/list');
    }
}
