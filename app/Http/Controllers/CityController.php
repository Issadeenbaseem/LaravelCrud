<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();

        return view('cities.index' , ['cities' => $cities]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request() ->validate([

            'title' =>'required',
            'districtId'  => 'required',


        ]);

            City::create([
                'title' => request('title'),
                'districtId' => request('districtId'),

            ]);


            return redirect('/cities');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(City $city)

    {

        request() ->validate([

            'title' =>'required',
            'districtId'  => 'required',


        ]);



           $city ->update([

            'title' => request('title'),
            'districtId' => request('districtId'),

           ]);

           return redirect('/cities');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $city->delete();

        return redirect('/cities');


    }

    public function edit(City $city){
        return view('cities.edit',['city' => $city]);

    }

    public function create(){

        return view('cities.create');
    }
}
