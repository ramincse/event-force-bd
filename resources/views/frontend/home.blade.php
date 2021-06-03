@extends('frontend.layouts.app')
@section('main-content')
<div class="main_content">

<!-- Start Slider Section -->
<div class="banner_section slide_medium shop_banner_slider staggered-animation-wrap">
    <div id="carouselExampleControls" class="carousel slide carousel-fade light_arrow" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($all_sliders as $slider)
            <div class="carousel-item @if($loop->first)active @endif background_bg" data-img-src="{{ URL::to('/') }}/media/sliders/{{ $slider->photo }}">
                <div class="banner_slide_content">
                    <div class="container">
                        <!-- STRART CONTAINER -->
                        <div class="row">
                            <div class="col-lg-7 col-9">
                                <div class="banner_content overflow-hidden">
                                </div>
                            </div>
                        </div>
                    </div><!-- END CONTAINER-->
                </div>
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
    </div>
</div>
<!-- End Slider Section -->



<!-- START Events Section -->
    <div class="section pt-0 small_pb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cat_overlap radius_all_5">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-3">
                                <div class="text-center text-md-left">
                                    <h4 style="text-transform: uppercase;">Event Concern</h4>
                                </div>
                            </div>
                            <div class="col-lg-10 col-md-9">
                                <div class="cat_slider mt-4 mt-md-0 carousel_slider owl-carousel owl-theme nav_style5 owl-loaded owl-drag" data-loop="true" data-dots="false" data-nav="true" data-margin="30" data-responsive='{"0":{"items": "1"}, "380":{"items": "2"}, "991":{"items": "3"}, "1199":{"items": "4"}}'>
                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(-810px, 0px, 0px); transition: all 0s ease 0s; width: 2835px;">

                                            @foreach($all_events as $events)
                                            <div class="owl-item cloned" style="width: 172.5px; margin-right: 30px;">
                                                <div class="item">
                                                    <div class="categories_box">
                                                        <a href="#" style="padding: 10px 20px;">
                                                            <img src="{{ URL::to('/') }}/media/events/{{ $events->photo }}" alt="">
                                                            <span style="height: 50px;">{{ $events->title }}</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="owl-nav">
                                        <button type="button" role="presentation" class="owl-prev"><i class="ion-ios-arrow-left"></i></button>
                                        <button type="button" role="presentation" class="owl-next"><i class="ion-ios-arrow-right"></i></button>
                                    </div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Events Section -->

    @php 
        $event_portfolio = json_decode($portfolio->h_portfolio);
    @endphp

    <div class="section pb_20 small_pt">
        <div class="container px-2">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="text-center">
                        <h2 style="font-size: 24px;" class="mb-4">{{ $event_portfolio->title }}</h2>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="sale_banner">
                        <a class="hover_effect1" href="#">
                            <img style="width: 100%; height: 450px;" src="{{ URL::to('/') }}/media/portfolio/{{ $event_portfolio->photo }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="heading_s1 text-center">
                        <h2>Our Honorable Clients</h2>
                    </div>
                </div>
            </div>
            <!-- Start Clients -->
            <div class="row no-gutters">
                @foreach($all_clients as $clients)
                <div class="col-md-3">
                    <div class="sale_banner">
                        <a class="hover_effect1" href="#">
                            <img style="width: 100%; height: 200px;" src="{{ URL::to('/') }}/media/clients/{{ $clients->photo }}" alt="" />
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Start pagination -->
            <div class="row">
                <div class="col-12">
                    {{ $all_clients -> links('paginate') }}
                </div>
            </div>
        </div>
    </div>

</div>
<!-- END MAIN CONTENT -->
@endsection