<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Job;
use App\Education;
use App\Hability;
use App\Hobbie;
use Illuminate\Support\Facades\Auth;
use App\User;


class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cv/cvCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   $idreg = Auth::user()->id;;
        $profile = new Profile($request->all());;
        $profile->user_id = $idreg;
        $user = User::find(1);

        $user->lenguages()->attach(1);
        $profile->save();

        $job = new Job($request->all());
        $job ->user_id = $idreg;
        $job->save();

        $education = new Education($request->all());
        $education ->user_id = $idreg;
        $education ->desde = $request->desde1;
        $education ->hasta = $request->hasta1;
        $education->save();

        $hability = new Hability($request->all());
        $hability ->user_id = $idreg;
        $hability->save();

        $hobbie = new Hobbie($request->all());
        $hobbie ->user_id = $idreg;
        $hobbie->save();

        return redirect ('/usrs');

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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
