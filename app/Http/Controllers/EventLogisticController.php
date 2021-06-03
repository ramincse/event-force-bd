<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventLogistic;

class EventLogisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = EventLogistic::all();
        return view('admin.event-services.logistics.index', compact('all_data'));
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

        if ($request->hasFile('photo')) {
            $img = $request->file('photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/event_services/logistics'), $photo_uname);
        }

        EventLogistic::create([
            'title' => $request->title,
            'photo' => $photo_uname,
        ]);

        return redirect()->route('logistics.index')->with('success', 'Event Added Successfull!');
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
        $edit_data = EventLogistic::find($id);
        return [
            'id'        => $edit_data->id,
            'title'     => $edit_data->title,
            'photo'     => $edit_data->photo,
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $update_data = EventLogistic::find($request->id);

        if ($request->hasFile('new_photo')) {
            $img = $request->file('new_photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/event_services/logistics'), $photo_uname);
            if(!empty($update_data->photo)){
                unlink('media/event_services/logistics/' . $update_data->photo);
            }
        } else {
            $photo_uname = $update_data->photo;
        }

        $update_data->title = $request->title;
        $update_data->photo = $photo_uname;
        $update_data->update();

        return redirect()->route('logistics.index')->with('success', 'Event logistics updated successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data = EventLogistic::find($id);
        $delete_data->delete();
        if ( !empty($delete_data->photo) ) {
            unlink('media/event_services/logistics/' . $delete_data->photo);
        }
        return redirect()->route('logistics.index')->with('success', 'Event logistics deleted successfull!');
    }
}
