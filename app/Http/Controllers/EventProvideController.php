<?php

namespace App\Http\Controllers;

use App\Models\EventProvide;
use Illuminate\Http\Request;

class EventProvideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = EventProvide::all();
        return view('admin.event-services.provide.index', compact('all_data'));
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

        EventProvide::create([
            'list_no'  => $request->s_number, 	
            'list'     => $request->title,
        ]);

        return redirect()->route('provide.index')->with('success', 'Event Services Added Successfull!');
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
        $edit_data = EventProvide::find($id);
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
        $update_data = EventProvide::find($request->id);

        $update_data->list_no   = $request->s_number;
        $update_data->list      = $request->title;
        $update_data->update();

        return redirect()->route('provide.index')->with('success', 'Event service updated successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data = EventProvide::find($id);
        $delete_data->delete();
        return redirect()->route('provide.index')->with('success', 'Event service deleted successfull!');
    }
}
