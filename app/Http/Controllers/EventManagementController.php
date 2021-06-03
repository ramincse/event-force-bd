<?php

namespace App\Http\Controllers;

use App\Models\EventManagement;
use Illuminate\Http\Request;

class EventManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = EventManagement::all();
        return view('admin.event-services.management.index', compact('all_data'));
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
            $img->move(public_path('media/event_services/management'), $photo_uname);
        }

        EventManagement::create([
            'title' => $request->title,
            'photo' => $photo_uname,
        ]);

        return redirect()->route('management.index')->with('success', 'Event Added Successfull!');
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
        $edit_data = EventManagement::find($id);
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
        $update_data = EventManagement::find($request->id);

        if ($request->hasFile('new_photo')) {
            $img = $request->file('new_photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/event_services/management'), $photo_uname);
            if(!empty($update_data->photo)){
                unlink('media/event_services/management/' . $update_data->photo);
            }
        } else {
            $photo_uname = $update_data->photo;
        }

        $update_data->title = $request->title;
        $update_data->photo = $photo_uname;
        $update_data->update();

        return redirect()->route('management.index')->with('success', 'Event updated successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data = EventManagement::find($id);
        $delete_data->delete();
        if ( !empty($delete_data->photo) ) {
            unlink('media/event_services/management/' . $delete_data->photo);
        }
        return redirect()->route('management.index')->with('success', 'Event deleted successfull!');
    }
}
