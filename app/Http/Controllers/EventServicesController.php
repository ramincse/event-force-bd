<?php

namespace App\Http\Controllers;

use App\Models\EventService;
use Illuminate\Http\Request;

class EventServicesController extends Controller
{
    /**
     * Documentary Production House
     */
    public function showServicesDocument()
    {
        $event_document = EventService::find(1);
        return view('admin.event-services.event-document', compact('event_document'));
    }

    public function insertServicesDocument(Request $request)
    {
        $production_update = EventService::find(1);

        $production_decode = json_decode($production_update->production_house);

        $this->validate($request, [
            'title' => 'required',
        ]);

        if ($request->hasFile('documentary_01')) {
            $img = $request->file('documentary_01');
            $docphoto01_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/event_services/documentary'), $docphoto01_uname);
            if (!empty($production_decode->documentary_01)) {
                unlink('media/event_services/documentary/' . $production_decode->documentary_01);
            }
        }else{
            $docphoto01_uname = $production_decode->documentary_01;
        }

        if ($request->hasFile('documentary_02')) {
            $img = $request->file('documentary_02');
            $docphoto02_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/event_services/documentary'), $docphoto02_uname);
            if (!empty($production_decode->documentary_02)) {
                unlink('media/event_services/documentary/' . $production_decode->documentary_02);
            }
        }else{
            $docphoto02_uname = $production_decode->documentary_02;
        }

        if ($request->hasFile('documentary_03')) {
            $img = $request->file('documentary_03');
            $docphoto03_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/event_services/documentary'), $docphoto03_uname);
            if (!empty($production_decode->documentary_03)) {
                unlink('media/event_services/documentary/' . $production_decode->documentary_03);
            }
        }else{
            $docphoto03_uname = $production_decode->documentary_03;
        }     

        $production_arr = [
            'title'     => $request->title,
            'documentary_01'  => $docphoto01_uname,
            'documentary_02'  => $docphoto02_uname,
            'documentary_03'  => $docphoto03_uname,
        ];

        $production_json = json_encode($production_arr);

        // //Updated
        $production_update->production_house = $production_json;
        $production_update->update();

        return redirect()->route('event.services.document')->with('success', 'Documentary production house updated successfull!');
    }  
}
