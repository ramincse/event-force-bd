<?php

namespace App\Http\Controllers;

use App\Models\EventForce;
use Illuminate\Http\Request;
use App\Models\DocumentarySoFar;

class DocumentarySoFarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = DocumentarySoFar::all();
        $sofar_text = EventForce::find(1);
        return view('admin.documentary.sofar.index', compact('all_data', 'sofar_text'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ]);

        DocumentarySoFar::create([
            'list_no'  => $request->s_number, 	
            'list'     => $request->title,
        ]);

        return redirect()->route('sofar.index')->with('success', 'Documentary List Added Successfull!');
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
        $edit_data = DocumentarySoFar::find($id);
        return [
            'id'       => $edit_data->id,
            'list_no'  => $edit_data->list_no,
            'list'     => $edit_data->list,
        ];
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
        $update_data = DocumentarySoFar::find($request->id);

        $update_data->list_no   = $request->s_number;
        $update_data->list      = $request->title;
        $update_data->update();

        return redirect()->route('sofar.index')->with('success', 'Documentary list updated successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data = DocumentarySoFar::find($id);
        $delete_data->delete();
        return redirect()->route('sofar.index')->with('success', 'Documentary list deleted successfull!');
    }
}
