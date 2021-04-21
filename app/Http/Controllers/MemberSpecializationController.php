<?php

namespace App\Http\Controllers;

use App\Models\MemberSpecialization;
use Illuminate\Http\Request;

class MemberSpecializationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $memberSpecializations = MemberSpecialization::all();

        return view('memberSpecializations.index' , ['memberSpecializations' => $memberSpecializations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemberSpecialization $memberSpecialization)
    {
        ;

        MemberSpecialization::create([
            'memberId' => request('memberId'),
            'specializationId' => request('specializationId'),

        ]);

            return redirect('/memberSpecializations');

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
    public function update(MemberSpecialization $memberSpecialization)

    {




           $memberSpecialization ->update([

             'memberId' =>request('memberId'),
             'specializationId'  =>request('specializationId'),

           ]);

           return redirect('/memberSpecializations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MemberSpecialization $memberSpecialization)
    {
        $memberSpecialization->delete();

        return redirect('/memberSpecializations');


    }

    public function edit(MemberSpecialization $memberSpecialization){
        return view('memberSpecializations.edit',['memberSpecialization' => $memberSpecialization]);

    }

    public function create(){

        return view('memberSpecializations.create');
    }
}
