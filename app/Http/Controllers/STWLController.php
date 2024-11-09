<?php

namespace App\Http\Controllers;

use App\Models\STWL;
use Illuminate\Http\Request;

class STWLController extends Controller
{

    public function index()
    {
        $data = STWL::all(); // or use pagination: STWL::paginate(10);
        return view('STWLRecord', compact('data'));
    }

    public function create()
    {
        // Show a form for creating a new resource, if needed
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Adjust validation to handle arrays
        $request->validate([
            'WhName' => 'required|string|max:100',
            'WhCode' => 'required|string|max:50',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'conducted_by' => 'required|string|max:30',
            'no_of_labour' => 'required|integer',

            'hc_present' => 'required|string|max:3',

            'topic' => 'required|string|max:100',

            'remarks' => 'nullable|string|max:20',
        ]);

        // Loop through each array index and save entries

        STWL::create([
            'WhName' => $request->WhName,
            'WhCode' => $request->WhCode,
            'date' => $request->date,
            'time' => $request->time,
            'conducted_by' => $request->conducted_by,
            'no_of_labour' => $request->no_of_labour,
            'hc_present' => $request->hc_present,
            'topic' => $request->topic,
            'remarks' => $request->remarks,
        ]);


        return redirect()->route('stwl.form')->with('success', 'Details saved successfully!');
    }

    public function showForm()
    {
        return view('STWL');
    }

    public function showdeleForm()
    {
        return view('STWLDELE');
    }
    public function edit($id)
    {
        $record = STWL::find($id);
        if (!$record) {
            return redirect()->route('STWL.index')->with('error', 'Record not found.');
        }

        return view('edit', compact('record'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'WhName' => 'required|string|max:100',
            'WhCode' => 'required|string|max:50',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'conducted_by' => 'required|string|max:30',
            'no_of_labour' => 'required|integer',
            'hc_present' => 'required|string|max:3',
            'topic' => 'required|string|max:100',
            'remarks' => 'nullable|string|max:20',
        ]);

        $record = STWL::find($id);
        if (!$record) {
            return redirect()->route('STWL.index')->with('error', 'Record not found.');
        }

        $record->update([
            'WhName' => $request->WhName,
            'WhCode' => $request->WhCode,
            'date' => $request->date,
            'time' => $request->time,
            'conducted_by' => $request->conducted_by,
            'no_of_labour' => $request->no_of_labour,
            'hc_present' => $request->hc_present,
            'topic' => $request->topic,
            'remarks' => $request->remarks,
        ]);

        return redirect()->route('STWL.index')->with('success', 'Record updated successfully!');
    }



    public function destroy($id)
    {
        $record = STWL::find($id);
        if ($record) {
            $record->delete();
        }

        return redirect()->route('STWL.index')->with('success', 'Record deleted successfully.');
    }
}
