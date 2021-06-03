@extends('frontend.layouts.app')
@section('page-title', 'Gallery')
@section('main-content')
<!-- END MAIN CONTENT -->
<div class="main_content">
    <!-- START SECTION Galleries -->
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="heading_s1 text-center">
                        <h2>Event Gallery</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-style1">
                        <ul class="nav nav-tabs justify-content-center" id="nav" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="arrival-tab" data-toggle="tab" href="#national" role="tab" aria-controls="arrival" aria-selected="true">National</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="arrival-tab" data-toggle="tab" href="#general" role="tab" aria-controls="arrival" aria-selected="false">General</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="arrival-tab" data-toggle="tab" href="#weeding" role="tab" aria-controls="arrival" aria-selected="false">Weeding</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="arrival-tab" data-toggle="tab" href="#logistics" role="tab" aria-controls="arrival" aria-selected="false">Logistics</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="tab">                    
                        <div class="tab-pane fade active show" id="national" role="tabpanel" aria-labelledby="arrival-tab">
                            <div class="row shop_container">                       

                                @foreach($gallery_data as $gall_data)
                                @php
                                    $gall_cat = json_decode($gall_data->gall_cat);
                                @endphp
                                
                                @if( in_array('National', $gall_cat) )
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="javascript: void (0)">
                                                <img src="{{ URL::to('/') }}/media/gallery/{{ $gall_data->photo }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach

                            </div>
                        </div>

                        <div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="arrival-tab">
                            <div class="row shop_container">
                            @foreach($gallery_data as $gall_data)
                                @php
                                    $gall_cat = json_decode($gall_data->gall_cat);
                                @endphp
                                @if( in_array('General', $gall_cat) )
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="javascript: void (0)">
                                            <img src="{{ URL::to('/') }}/media/gallery/{{ $gall_data->photo }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                            </div>
                        </div>
    
                        <div class="tab-pane fade" id="weeding" role="tabpanel" aria-labelledby="arrival-tab">
                            <div class="row shop_container">
                            @foreach($gallery_data as $gall_data)
                                @php
                                    $gall_cat = json_decode($gall_data->gall_cat);
                                @endphp
                                @if( in_array('Weeding', $gall_cat) )
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="javascript: void (0)">
                                            <img src="{{ URL::to('/') }}/media/gallery/{{ $gall_data->photo }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                                
                            </div>
                        </div>

                        <div class="tab-pane fade" id="logistics" role="tabpanel" aria-labelledby="arrival-tab">
                            <div class="row shop_container">
                            @foreach($gallery_data as $gall_data)
                                @php
                                    $gall_cat = json_decode($gall_data->gall_cat);
                                @endphp
                                @if( in_array('Logistics', $gall_cat) )
                                <div class="col-lg-3 col-md-4 col-6">
                                    <div class="product">
                                        <div class="product_img">
                                            <a href="javascript: void (0)">
                                                <img src="{{ URL::to('/') }}/media/gallery/{{ $gall_data->photo }}" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                                
                            </div>
                        </div>

                    </div>
                    <!-- tab-content -->
                </div>
            </div>
        </div>
    </div>

</div>
<!-- END MAIN CONTENT -->
@endsection