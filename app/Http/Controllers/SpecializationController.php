<?php

namespace App\Http\Controllers;

use App\Models\Specialization;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specializations = Specialization::all();

        return view('specializations.index' , ['specializations' => $specializations]);
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
            'icon'  => 'required',
            'description' => 'required'

        ]);

            Specialization::create([
                'title' => request('title'),
                'icon' => request('icon'),
                'description' => request('description')
            ]);


            return redirect('/specializations');

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
    public function update(Specialization $specialization)

    {

        request() ->validate([

            'title' =>'required',
            'icon'  => 'required',
            'description' => 'required'

        ]);



           $specialization ->update([

             'title' =>request('title'),
             'icon'  =>request('icon'),
             'description' => request('description')

           ]);

           return redirect('/specializations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Specialization $specialization)
    {
        $specialization->delete();

        return redirect('/specializations');


    }

    public function edit(Specialization $specialization){
        return view('specializations.edit',['specialization' => $specialization]);

    }

    public function create(){

        return view('specializations.create');
    }
}
