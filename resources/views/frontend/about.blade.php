@extends('frontend.layouts.app')
@section('page-title', 'About Us')
@section('main-content')
<!-- END MAIN CONTENT -->
<div class="main_content">
    <!-- Start Background History -->
    <div class="section pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="heading_s1 text-center">
                        <h2 style="text-transform: uppercase;" class="mb-2">{{ $abouttext->title }}</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="icon_box">
                        <div class="icon_box_content">
                        <p class="text-justify">{{ $abouttext->content }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Top Management -->
        <div class="section bg_light_blue2 pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="heading_s1 text-center">
                        <h2 style="text-transform: uppercase;" class="mb-5">Top Management</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach($all_management as $management)
                <div class="col-lg-4 col-sm-6">
                    <div class="icon_box icon_box_style4 box_shadow1 rounded">
                        <div class="icon">
                            <img class="rounded" style="width: 165px; height: 190px;" src="{{ URL::to('/') }}/media/top_management/{{ $management->photo }}" alt="">
                        </div>
                        <div class="icon_box_content">
                            <h5 style="font-size: 25px;">{{ $management->name }}</h5>
                            <p>{{ $management->job }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Start Management Message -->
    @foreach($all_message as $message)
    <div class="section pb_70 small_pt">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="text-center">
                        <h2 style="text-transform: uppercase;">Message</h2>
                        <h2 style="text-transform: uppercase; letter-spacing: 1.5px;" class="mb-5">{{ $message->name }}</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <img class="rounded" style="float: left; width: 450px; margin-right: 15px" src="{{ URL::to('/') }}/media/message/{{ $message->photo }}" alt="furniture_banner1">
                    <p class="text-justify">{{ $message->content }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- End Management Message -->


</div>
<!-- END MAIN CONTENT -->
@endsection