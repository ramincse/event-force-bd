<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = Message::all();
        return view('admin.about-us.about-vice', compact('all_data'));
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
            'name' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $img = $request->file('photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/message'), $photo_uname);
        }

        Message::create([
            'name'      => $request->name,
            'content'   => $request->content,
            'photo'     => $photo_uname,
        ]);

        return redirect()->route('about-vice.index')->with('success', 'Message Added Successfull!');
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
        $edit_data = Message::find($id);
        return [
            'id'       => $edit_data->id,
            'name'     => $edit_data->name,
            'content'  => $edit_data->content,
            'photo'    => $edit_data->photo,
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
        $update_data = Message::find($request->id);

        if ($request->hasFile('new_photo')) {
            $img = $request->file('new_photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/message'), $photo_uname);
            unlink('media/message/' . $update_data->photo);
        } else {
            $photo_uname = $update_data->photo;
        }

        $update_data->name      = $request->name;
        $update_data->content   = $request->content;
        $update_data->photo     = $photo_uname;
        $update_data->update();

        return redirect()->route('about-vice.index')->with('success', 'Message updated successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data = Message::find($id);
        $delete_data->delete();
        if ($delete_data) {
            unlink('media/message/' . $delete_data->photo);
        }
        return redirect()->route('about-vice.index')->with('success', 'Message deleted successfull!');
    }
}
