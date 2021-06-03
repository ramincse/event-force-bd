<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = Client::all();
        return view('admin.clients.index', compact('all_data'));
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
            $img->move(public_path('media/clients'), $photo_uname);
        }

        Client::create([
            'title' => $request->title,
            'photo' => $photo_uname,
        ]);

        return redirect()->route('client.index')->with('success', 'Client Added Successfull!');
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
        $edit_data = Client::find($id);
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
    public function update(Request $request, $id)
    {
        $update_data = Client::find($request->id);

        if ($request->hasFile('new_photo')) {
            $img = $request->file('new_photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/clients'), $photo_uname);
            if(!empty($update_data->photo)){
                unlink('media/clients/' . $update_data->photo);
            }
        } else {
            $photo_uname = $update_data->photo;
        }

        $update_data->title = $request->title;
        $update_data->photo = $photo_uname;
        $update_data->update();

        return redirect()->route('client.index')->with('success', 'Client updated successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data = Client::find($id);
        $delete_data->delete();
        if ( !empty($delete_data->photo) ) {
            unlink('media/clients/' . $delete_data->photo);
        }
        return redirect()->route('client.index')->with('success', 'Client deleted successfull!');
    }
}
