<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();

        return view('members.index' , ['members' => $members]);
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
            'firstName' => 'required',
            'lastName' => 'required',
            'picture'  => 'required',
            'nic' =>'required'
        ]);

            Member::create([
                'firstName' => request('firstName'),
                'lastName' => request('lastName'),
                'picture' => request('picture'),
                'mobile1' => request('mobile1'),
                'mobile2' => request('mobile2'),
                'nic' => request('nic'),
                'rvsaId' => request('rvsaId'),
                'dob' => request('dob'),
                'gender' => request('gender'),
                'email' => request('email')
            ]);


            return redirect('/members');

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
    public function update(Member $member)

    {

        request() ->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'picture'  => 'required',
            'nic' =>'required'
        ]);


           $member ->update([

            'firstName' => request('firstName'),
            'lastName' => request('lastName'),
            'picture' => request('picture'),
            'mobile1' => request('mobile1'),
            'mobile2' => request('mobile2'),
            'nic' => request('nic'),
            'rvsaId' => request('rvsaId'),
            'dob' => request('dob'),
            'gender' => request('gender'),
            'email' => request('email')

           ]);

           return redirect('/members');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
        $member->delete();

        return redirect('/members');


    }

    public function edit(Member $member){
        return view('members.edit',['member' => $member]);

    }

    public function create(){

        return view('members.create');
    }
}
