@extends('frontend.layouts.app')
@section('page-title', 'Documentary')
@section('main-content')

@php 
    $whoweare_decode = json_decode($who_we_are->d_who_we_are);
@endphp
<div class="main_content">
    <div class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="heading_s1 text-center">
                        <h2>{{ $whoweare_decode->title }}</h2>
                    </div>
                    <p>{{ $whoweare_decode->content }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section bg_light_blue2 pb_70">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <p class="leads">{{ $sofar_text->doc_desc }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <ul>
                        @foreach($soFar_list as $soFar)
                            <li>{{ $soFar->list }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="section pb_20 small_pt">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="heading_s1 text-center">
                        <h2>Few Documentary Videos</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach($doc_videos as $doc_video)
                <div class="col-md-3">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" target="_blank" href="{{ $doc_video->v_link }}">
                            <img src="{{ URL::to('/') }}/media/documentary_video/{{ $doc_video->photo }}" alt="shop_banner_img7">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->
@endsection