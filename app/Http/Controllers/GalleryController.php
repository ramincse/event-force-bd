<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = Gallery::all();
        return view('admin.gallery.index', compact('all_data'));
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

        $gall_cat_json = json_encode($request->gall_cat);

        if ($request->hasFile('photo')) {
            $img = $request->file('photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/gallery'), $photo_uname);
        }

        Gallery::create([
            'title' => $request->title,
            'photo' => $photo_uname,
            'gall_cat'   => $gall_cat_json,
        ]);

        return redirect()->route('gallery.index')->with('success', 'Gallery Added Successfull!');;
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
        $edit_data = Gallery::find($id);
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
        $update_data = Gallery::find($request->id);

        if ($request->hasFile('new_photo')) {
            $img = $request->file('new_photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/gallery'), $photo_uname);
            if (!empty($update_data->photo)) {
                unlink('media/gallery/' . $update_data->photo);
            }
        } else {
            $photo_uname = $update_data->photo;
        }

        $gall_cat_json = json_encode($request->gall_cat);

        $update_data->title     = $request->title;
        $update_data->photo     = $photo_uname;
        $update_data->gall_cat  = $gall_cat_json;
        $update_data->update();

        return redirect()->route('gallery.index')->with('success', 'Gallery updated successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data = Gallery::find($id);
        $delete_data->delete();
        if ($delete_data) {
            unlink('media/gallery/' . $delete_data->photo);
        }
        return redirect()->route('gallery.index')->with('success', 'Gallery deleted successfull!');
    }
}
