<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Client;
use App\Models\Footer;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\AboutText;
use App\Models\EventForce;
use App\Models\EventProvide;
use App\Models\EventService;
use Illuminate\Http\Request;
use App\Models\EventLogistic;
use App\Models\EventSecurity;
use App\Models\TopManagement;
use App\Models\EventManagement;
use App\Models\DocumentarySoFar;
use App\Models\DocumentaryVideo;

class FrontendController extends Controller
{
    public function homePage()
    {
        $all_sliders       = Slider::all();
        $all_events        = Event::all();
        $portfolio         = EventForce::find(1);
        $all_clients       = Client::orderBy('id', 'ASC') -> paginate(2);
        return view('frontend.home',
        [
            'all_sliders'   => $all_sliders,
            'all_events'    => $all_events,
            'portfolio'     => $portfolio,
            'all_clients'   => $all_clients,
        ]);
    }

    /**
     * About Us Page
     */
    public function showAboutUsPage()
    {
        $all_message        = Message::all();
        $all_management     = TopManagement::all();
        $abouttext          = AboutText::find(1);
        return view('frontend.about', compact('all_management', 'all_message', 'abouttext'));
    }

    /**
     * Event Services Page
     */
    public function showOurServicePage()
    {
        $event_services     = EventService::find(1);
        $event_management   = EventManagement::all();
        $event_logistics    = EventLogistic::all();
        $event_security     = EventSecurity::all();
        $event_provide      = EventProvide::all();
        return view('frontend.services', compact('event_services', 'event_management', 'event_logistics', 'event_security', 'event_provide'));
    }

    /**
     * Documentary Page
     */
    public function showDocumentaryPage()
    {
        $who_we_are = EventForce::find(1);
        $doc_videos = DocumentaryVideo::all();
        $soFar_list = DocumentarySoFar::all();
        $sofar_text = EventForce::find(1);
        return view('frontend.document', compact('who_we_are', 'doc_videos', 'soFar_list', 'sofar_text'));
    }

    /**
     * Clients Page
     */
    public function showClientPage()
    {
        $all_clients    = Client::all();
        return view('frontend.clients', [
            'all_clients'       => $all_clients,
        ]);
    }

    /**
     * Gallery Page
     */
    public function showGalleryPage()
    {
        $gallery_data    = Gallery::all();
        return view('frontend.gallery', [
            'gallery_data'       => $gallery_data,
        ]);
    }

    /**
     * Contact Us Page
     */
    public function showContactUsPage()
    {
        $contactus = Footer::find(1);
        $con_banner = EventForce::find(1);
        return view('frontend.contact', compact('contactus', 'con_banner'));
    }
}
