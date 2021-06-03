<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentaryVideo;

class DocumentaryVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_data = DocumentaryVideo::all();
        return view('admin.documentary.videos.index', compact('all_data'));
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

        //Video Link Formate
        $file_array = explode('/', $request->v_link);
        if (in_array('www.youtube.com', $file_array)) {
            $video_link = str_replace('watch?v=', 'embed/', $request->v_link);
        } elseif (in_array('vimeo.com', $file_array)) {
            $video_link = str_replace('vimeo.com/', 'player.vimeo.com/video/', $request->v_link);
        }else{
            $video_link = 'Link format not correct';
        }        

        if ($request->hasFile('photo')) {
            $img = $request->file('photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/documentary_video'), $photo_uname);
        }

        DocumentaryVideo::create([
            'title'     => $request->title,
            'v_link'    => $video_link,
            'photo'     => $photo_uname,
        ]);

        return redirect()->route('videos.index')->with('success', 'Video Added Successfull!');
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
        $edit_data = DocumentaryVideo::find($id);
        return [
            'id'        => $edit_data->id,
            'title'     => $edit_data->title,
            'v_link'    => $edit_data->v_link,
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
        $update_data = DocumentaryVideo::find($request->id);

        $this->validate($request, [
            'title' => 'required',
        ]);

        if ($request->hasFile('new_photo')) {
            $img = $request->file('new_photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/documentary_video'), $photo_uname);
            if(!empty($update_data->photo)){
                unlink('media/documentary_video/' . $update_data->photo);
            }
        } else {
            $photo_uname = $update_data->photo;
        }

        if( isset($request->v_link) ){
            $file_array = explode('/', $request->v_link);
            if (in_array('www.youtube.com', $file_array)) {
                $video_link = str_replace('watch?v=', 'embed/', $request->v_link);
            } elseif (in_array('vimeo.com', $file_array)) {
                $video_link = str_replace('vimeo.com/', 'player.vimeo.com/video/', $request->v_link);
            }else{
                $video_link = 'Link format not correct';
            }  
        }else{
            $video_link = $update_data->v_link;
        }
        
        $update_data->title = $request->title;
        $update_data->v_link = $video_link;
        $update_data->photo = $photo_uname;
        $update_data->update();

        return redirect()->route('videos.index')->with('success', 'Updated successfull!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data = DocumentaryVideo::find($id);
        $delete_data->delete();
        if ( !empty($delete_data->photo) ) {
            unlink('media/documentary_video/' . $delete_data->photo);
        }
        return redirect()->route('videos.index')->with('success', 'Deleted successfull!');
    }
}
