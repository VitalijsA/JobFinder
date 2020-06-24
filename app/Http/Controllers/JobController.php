<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\job;
use App\User;
class JobController extends Controller
{
    public function destroy($id)
    {
        DB::Table('job')->where('id', $id)->delete();
        return redirect()->route('user.joblist', Auth::user()->id);
    }
    public function create()
    {
        return view('job');
    }
    public function edit($id)
    {
        return view('job_edit', ['job' => job::FindOrFail($id)]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|min:2|max:100',
            'salary' =>'required|numeric|min:2',
            'emailaddress' => 'required|string|min:3|max:50',
            'phonenum' => 'required|numeric|min:2',
            'dateuntil' => 'required|date',
            'image' => 'required|file|image|max:10000',
        ]);
        $job = new job();
        $job->title = $request['title'];
        $job->description = $request['description'];
        $job->keyword = $request['category'];
        $job->salary = $request['salary'];
        $job->emailaddress = $request['emailaddress'];
        $job->phonenum = $request['phonenum'];
        $job->dateuntil = $request['dateuntil'];
        $job->image = $request['image']->store('uploads','public');
        $job->user_id = auth::id();
        $job->save();
        

        $jobs = DB::table('job')->paginate(15);
        return view('joblist', ['jobs' => $jobs]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|min:2|max:100',
            'salary' =>'required|numeric|min:2',
            'emailaddress' => 'required|string|min:3|max:50',
            'phonenum' => 'required|numeric|min:2',
            'dateuntil' => 'required|date',
            'image' => 'file|image|max:10000',
        ]);
        $job = job::find($request['job_id']);
        $job->title = $request['title'];
        $job->description = $request['description'];
        $job->keyword = $request['category'];
        $job->salary = $request['salary'];
        $job->emailaddress = $request['emailaddress'];
        $job->phonenum = $request['phonenum'];
        $job->dateuntil = $request['dateuntil'];
        if (!is_null($request['image'])) $job->image = $request['image']->store('uploads','public');
        $job->user_id = auth::id();
        $job->save();
        

        $jobs = DB::table('job')->paginate(15);
        return view('user.joblist')->with (['jobs' => job::where('user_id', Auth::id())->get()]);
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
