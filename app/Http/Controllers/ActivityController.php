<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;

class ActivityController extends Controller
{
    function index()
    {
        $activities = Activity::orderBy('id', 'asc')->paginate(5);
        // dd($activities);
        return view('index', compact('activities'));
    }

    function create()
    {
        return view('create');
    }

    function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'sts' => 'required',
        ],
        [
            'name.required' => 'Sila Masukkan Nama Senarai',
            'sts.required' => 'Sila Pilih Status Senarai',
        ]);

        // dd($request ->all());
        $created = Activity::create([
            'name' => $request -> name,
            'sts' => $request -> sts,
        ]);

        if($created){
            return redirect() -> route('index')->with('success', 'Activity Successfully Added');
        }
        else{
            return redirect() -> route('create-list')->with('error', 'Activity Failed To Add');
        }
    }

    function edit(Activity $activity)
    {
        // $activity = Activity::find($id);
        return view('edit', compact('activity'));
    }
    
    function update(Request $request, Activity $activity)
    {
        // dd($request ->all());
        // dd($activity)
        $updated = Activity::where('id', $activity->id)->update([
            'name' => $request -> name,
            'sts' => $request -> sts,
        ]);

        if($updated){
            return redirect() -> route('index');
        }
        else{
            return redirect() -> route('create-list');
        }
    }

    function delete(Activity $activity)
    {
        $activity->delete();
        return redirect() -> route('index')->with('success', 'Activity deleted successfully');
    }

    
}
