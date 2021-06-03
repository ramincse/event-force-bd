@extends('frontend.layouts.app')
@section('page-title', 'Event Services')
@section('main-content')
<div class="main_content">
    <div class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="heading_s1 text-center">
                        <h2>Services we provide</h2>
                    </div>
                </div>
            </div>
            <ul>
                <div class="row">
                    @foreach($event_provide as $provide)
                    <div class="col-md-6">
                        <li>{{ $provide->list }}</li>
                    </div>
                    @endforeach
                </div>
            </ul>
        </div>
    </div>

    <!-- Event Services (Categories) -->
    
    <div class="section  pb_70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="heading_s1 text-center">
                        <h2>Event Services (Categories)</h2>
                    </div>
                </div>
            </div>

            <!-- A. Event Management -->
            <div class="row">
                <div class="col-md-12">
                    <h3 style="font-size: 18px;" class="heading_s1">A. Event Management</h3>
                </div>
            </div>

            <div class="row">
                @foreach($event_management as $management)
                <div class="col-md-4">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" href="#">
                            <img style="width: 350px; height: 195px;" src="{{ URL::to('/') }}/media/event_services/management/{{ $management -> photo }}" alt="#">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- B. Event Logistics -->
            <div class="row">
                <div class="col-md-12">
                    <h3 style="font-size: 18px;" class="heading_s1">B. Event Logistics</h3>
                </div>
            </div>

            <div class="row">
                @foreach($event_logistics as $logistics)
                <div class="col-md-4">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" href="#">
                            <img style="width: 350px; height: 195px;" src="{{ URL::to('/') }}/media/event_services/logistics/{{ $logistics -> photo }}" alt="#">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- C. Documentary Production House -->
            @php 
                $event_documentary = json_decode($event_services->production_house);
            @endphp
            <div class="row">
                <div class="col-md-12">
                    <h3 style="font-size: 18px;" class="heading_s1">{{ $event_documentary->title }}</h3>
                </div>
            </div>

            <div class="row row justify-content-center">
                <div class="col-md-6">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" href="#">
                            <img style="width: 550px; height: 300px; border: 1px solid #ccc; border-radius: 4px;" src="{{ URL::to('/') }}/media/event_services/documentary/{{ $event_documentary->documentary_01 }}" alt="shop_banner_img7">
                        </a>
                    </div>
                </div>                
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" href="#">
                        <img style="width: 550px; height: 300px; border: 1px solid #ccc; border-radius: 4px;" src="{{ URL::to('/') }}/media/event_services/documentary/{{ $event_documentary->documentary_02 }}" alt="shop_banner_img7">
                        </a>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" href="#">
                        <img style="width: 550px; height: 300px; border: 1px solid #ccc; border-radius: 4px;" src="{{ URL::to('/') }}/media/event_services/documentary/{{ $event_documentary->documentary_03 }}" alt="shop_banner_img7">
                        </a>
                    </div>
                </div>                
            </div>

            <!-- D. Event Security -->
            <div class="row">
                <div class="col-md-12">
                    <h3 style="font-size: 18px;" class="heading_s1">D. Event Security</h3>
                </div>
            </div>

            <div class="row">
                @foreach($event_security as $security)
                <div class="col-md-4">
                    <div class="sale-banner mb-3 mb-md-4">
                        <a class="hover_effect1" href="#">
                            <img style="width: 350px; height: 195px;" src="{{ URL::to('/') }}/media/event_services/security/{{ $security -> photo }}" alt="#">
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