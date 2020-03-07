<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;
use App\Countrie;
use App\Education;
use App\Hability;
use App\Hobbie;
use App\Profile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade as PDF;


class TableController extends Controller
{
    public function index(){
        $user = Auth::user()->id;
        $hability = Auth::user()->habilities;
        $jobs = Auth::user()->jobs;
        $education = Auth::user()->educations;
        $hobbie = Auth::user()->hobbies;
        $profile = Auth::user()->profiles;
        $pdf = PDF::loadView('test1234', compact('user','jobs','education','hability', 'hobbie','profile'));
        return $pdf->stream('mi-pdf.pdf');
        //return view('test123', compact('user','jobs','education','hability', 'hobbie','profile'));
    }

}
