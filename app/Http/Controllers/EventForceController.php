<?php

namespace App\Http\Controllers;

use App\Models\EventForce;
use Illuminate\Http\Request;

class EventForceController extends Controller
{
    public function showOurPortfolio()
    {
        $portfolio = EventForce::find(1);
        return view('admin.portfolio.index', compact('portfolio'));
    }

    public function insertOurPortfolio(Request $request)
    {
        $portfolio_update = EventForce::find(1);

        $portfolio_decode = json_decode($portfolio_update->h_portfolio);

        $this->validate($request, [
            'title' => 'required',
        ]);

        if ($request->hasFile('photo')) {
            $img = $request->file('photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/portfolio'), $photo_uname);
            if (!empty($portfolio_decode->photo)) {
                unlink('media/portfolio/' . $portfolio_decode->photo);
            }
        }else{
            $photo_uname = $portfolio_decode->photo;
        }

        $portfolio_arr = [
            'title'  => $request->title,
            'photo'  => $photo_uname,
        ];

        $portfolio_json = json_encode($portfolio_arr);

        $portfolio_update -> h_portfolio = $portfolio_json;
        $portfolio_update -> update();

        return redirect()->route('event.portfolio')->with('success', 'Our portfolio updated Successfull!');
    }

    public function showWhoWeAre()
    {
        $who_we_are = EventForce::find(1);
        return view('admin.documentary.who-we-are', compact('who_we_are'));
    }

    public function insertWhoWeAre(Request $request)
    {
        $whoweare_update = EventForce::find(1);

        $whoweare_decode = json_decode($whoweare_update->d_who_we_are);

        $whoweare_arr = [
            'title'     => $request->title,
            'content'   => $request->content,
        ];

        $whoweare_json = json_encode($whoweare_arr);

        $whoweare_update -> d_who_we_are = $whoweare_json;
        $whoweare_update -> update();

        return redirect()->route('who.we.are')->with('success', 'Updated Successfull!');
    }

    /**
     * SoFar Fixed Text
     */
    public function insertSoFarText(Request $request)
    {
        $sofar_update = EventForce::find(1);

        $sofar_update -> doc_desc = $request->content;
        $sofar_update -> update();

        return redirect()->route('sofar.index')->with('success', 'Documentary text updated successfull!');
    }

    /**
     * Contact Page Banner Photo
     */
    public function showContactBanner()
    {
        $con_banner = EventForce::find(1);
        return view('admin.contact.top-image', compact('con_banner'));
    }

    public function insertContactBanner(Request $request)
    {
        $con_banner_update = EventForce::find(1);

        if ($request->hasFile('photo')) {
            $img = $request->file('photo');
            $photo_uname = md5(time() . rand()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('media/contact'), $photo_uname);
            if (!empty($con_banner_update->con_banner)) {
                unlink('media/contact/' . $con_banner_update->con_banner);
            }
        }else{
            $photo_uname = $con_banner_update->con_banner;
        }

        $con_banner_update -> con_banner = $photo_uname;
        $con_banner_update -> update();

        return redirect()->route('contact.banner')->with('success', 'Updated successfull!');
    }

    //Google Map
    public function showContactGoogle()
    {
        $con_google = EventForce::find(1);
        return view('admin.contact.google', compact('con_google'));
    }
    public function insertContactGoogle(Request $request)
    {
        $con_google_update = EventForce::find(1);

        $con_google_update -> google_loc = $request->google_loc;
        $con_google_update -> update();

        return redirect()->route('contact.map')->with('success', 'Google Location Updated successfull!');
    }
    
}
