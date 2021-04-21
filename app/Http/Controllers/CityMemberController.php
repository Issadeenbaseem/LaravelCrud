<?php

namespace App\Http\Controllers;

use App\Models\CityMember;
use Illuminate\Http\Request;

class CityMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cityMembers = CityMember::all();

        return view('cityMembers.index' , ['cityMembers' => $cityMembers]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityMember $cityMember)
    {
        ;

        CityMember::create([
            'memberId' => request('memberId'),
            'specializationId' => request('specializationId'),

        ]);

            return redirect('/cityMembers');

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
    public function update(CityMember $cityMember)

    {




           $cityMember ->update([

             'memberId' =>request('memberId'),
             'specializationId'  =>request('specializationId'),

           ]);

           return redirect('/cityMembers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CityMember $cityMember)
    {
        $cityMember->delete();

        return redirect('/cityMembers');


    }

    public function edit(CityMember $cityMember){
        return view('cityMembers.edit',['cityMember' => $cityMember]);

    }

    public function create(){

        return view('cityMembers.create');
    }
}
