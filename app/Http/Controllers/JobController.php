<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\job;
class JobController extends Controller
{
    public function index()
    {
        return view('job');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|min:2|max:25',
            'description' => 'required|string|min:2|max:25',
            'salary' =>'required|numeric|min:2',
            'emailaddress' => 'required|string|min:3|max:50',
            'phonenum' => 'required|numeric|min:2',
            'ordereduntil' => 'required|date|after:orderedfrom',
        ]);
        $job = new advertisement();
        $job->name = $request['name'];
        $job->surname = $request['surname'];
        $job->address = $request['address'];
        $job->phonenum = $request['phonenum'];
        $job->orderedfrom = $request['orderedfrom'];
        $job->ordereduntil = $request['ordereduntil'];
        $job->save();

        $extras = session()->get('extras');
        foreach($extras as $extra){
            $extra_order = new ExtraOrder();
            $extra_order->order_id = $order->id;
            $extra_order->extra_id = $extra;
            $extra_order->save();
        }

        return redirect()->route('order.show', ['order' => $order, 'total' => 0]);
    }

}
