<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\job;
use Illuminate\Support\Facades\DB;
class JoblistController extends Controller
{
    public function index()
    {
        $jobs = DB::table('job')->paginate(15);
        return view('joblist', ['jobs' => $jobs]);
    }
    public function show($id){
        return view('job_show', ['job' => job::FindOrFail($id)]);
    }
}
