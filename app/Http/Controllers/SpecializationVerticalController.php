<?php

namespace App\Http\Controllers;

use App\Models\SpecializationVertical;
use Illuminate\Http\Request;

class SpecializationVerticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $SpecializationVertical = SpecializationVertical::all();

        return view('specializationverticals.index' , ['specializationverticals' => $SpecializationVertical]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SpecializationVertical $specializationVertical)
    {
        ;

        SpecializationVertical::create([
            'verticalId' => request('verticalId'),
            'specializationId' => request('specializationId'),

        ]);

            return redirect('/specializationverticals');

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
    public function update(SpecializationVertical $specializationVertical)

    {




           $specializationVertical ->update([

            'verticalId' => request('verticalId'),
            'specializationId' => request('specializationId'),

           ]);

           return redirect('/specializationverticals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpecializationVertical $specializationVertical)
    {
        $specializationVertical->delete();

        return redirect('/specializationverticals');


    }

    public function edit(SpecializationVertical $specializationVertical){
        return view('specializationverticals.edit',['specializationVertical' => $specializationVertical]);

    }

    public function create(){

        return view('specializationverticals.create');
    }
}
