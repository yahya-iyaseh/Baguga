<?php

namespace App\Http\Controllers;

use App\Models\Receivable;
use Illuminate\Http\Request;

class receivableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $receivables = Receivable::latest()->paginate(10);
        return view('receivable.index', compact('receivables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('receivable.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $receivable = Request()->validate([
            'name' => 'required|max:255'
        ]);
        Receivable::create($request->all());
        return redirect('receivable')->with('message', 'Successfully created receivable');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Receivable  $receivable
     * @return \Illuminate\Http\Response
     */
    public function show(Receivable  $receivable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Receivable  $receivable
     * @return \Illuminate\Http\Response
     */
    public function edit(Receivable $receivable)
    {
        //

        $receivable=Receivable::find($receivable->id);
        Receivable::FindOrFail($receivable->id);
        $receivable=Receivable::select('id','name','address','phone')->find($receivable->id);
        return view('receivable.edit', compact('receivable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Receivable  $receivable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receivable  $receivable)
    {
        $receivable=Receivable::find($receivable->id);
           $receivable->update($request->all());
           return redirect('receivable')->with('message', 'Successfully udpate receivable');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Receivable  $receivable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receivable  $receivable)
    {
        //
    }
}
