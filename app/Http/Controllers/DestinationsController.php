<?php

namespace App\Http\Controllers;
use App\Destinations;
use Illuminate\Http\Request;

class DestinationsController extends Controller
{
        public function index(){
            $destinations = Destinations::orderByRaw('id')->get();
        return view('destinations.index',['destinations'=>$destinations]);
    }
    public function create(){
        return view('destinations.create');
    }
    public function store(Request $request){
        $this ->validate($request, [
            'name' => 'required',
            'address'=> 'required',
            'type'=> 'required',
            'rating'=> 'required',
        ]);

        Destinations::create( [
            'name' => $request['name'],
            'address' => $request['address'],
            'type' => $request['type'],
            'rating' => $request['rating'],
        ]);

        return redirect('/destinations')->with('info', 'Added a new destination.');
        }
}