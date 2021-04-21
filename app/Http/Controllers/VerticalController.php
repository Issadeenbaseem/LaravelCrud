<?php

namespace App\Http\Controllers;

use App\Models\Vertical;
use Illuminate\Http\Request;

class VerticalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verticals = Vertical::all();

        return view('verticals.index' , ['verticals' => $verticals]);
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

            Vertical::create([
                'title' => request('title'),
                'icon' => request('icon'),
                'description' => request('description')
            ]);


            return redirect('/verticals');

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
    public function update(Vertical $vertical)

    {

        request() ->validate([

            'title' =>'required',
            'icon'  => 'required',
            'description' => 'required'

        ]);



           $vertical ->update([

             'title' =>request('title'),
             'icon'  =>request('icon'),
             'description' => request('description')

           ]);

           return redirect('/verticals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vertical $vertical)
    {
        $vertical->delete();

        return redirect('/verticals');


    }

    public function edit(Vertical $vertical){
        return view('verticals.edit',['vertical' => $vertical]);

    }

    public function create(){

        return view('verticals.create');
    }
}
