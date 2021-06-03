<?php

namespace App\Http\Controllers;

use App\Models\AboutText;
use Illuminate\Http\Request;
use App\Models\TopManagement;

class TopManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = TopManagement::all();
        return view('admin.about-us.about-management', compact('all_data'));
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
            $img->move(public_path('media/top_management'), $photo_uname);
        }

        TopManagement::create([
            'name'      => $request->name,
            'job'       => $request->job,
            'photo'     => $photo_uname,
        ]);

        return redirect()->route('about-management.index')->with('success', 'Member Added Successfull!');
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
        $edit_data = TopManagement::find($id);
        return [
            'id'       => $edit_data->id,
            'name'     => $edit_data->name,
            'job'      => $edit_data->job,
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
    public function update(Request $request)
    {
        $update_data = TopManagement::find($request->id);

        if ($request->hasFile('new_photo')) {
            $img = $request->file('new_photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/top_management'), $photo_uname);
            unlink('media/top_management/' . $update_data->photo);
        } else {
            $photo_uname = $update_data->photo;
        }

        $update_data->name      = $request->name;
        $update_data->job       = $request->job;
        $update_data->photo     = $photo_uname;
        $update_data->update();

        return redirect()->route('about-management.index')->with('success', 'Member updated successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data = TopManagement::find($id);
        $delete_data->delete();
        if ($delete_data) {
            unlink('media/top_management/' . $delete_data->photo);
        }
        return redirect()->route('about-management.index')->with('success', 'Member deleted successfull!');
    }


    public function showAboutTextMessage()
    {
        $abouttext = AboutText::find(1);
        return view('admin.about-us.about-text', compact('abouttext'));
    }

    public function insertAboutTextMessage(Request $request)
    {
        $abouttext_update = AboutText::find(1);

        $abouttext_update->title = $request->title;
        $abouttext_update->content = $request->content;
        $abouttext_update->update();
        return redirect()->route('about.text.message')->with('success', 'Message updated successfull!');
    }
}
