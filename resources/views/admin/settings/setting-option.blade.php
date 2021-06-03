@extends('admin.layouts.app')
@section('main-content')
<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    @include('admin.layouts.header')
    <!-- /Header -->

    <!-- Sidebar -->
    @include('admin.layouts.menu')
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            @include('admin.layouts.page-header')
            <!-- /Page Header -->
            <div class="row">
                @include('validate')
                <div class="col-md-12">
                    <div class="card">
                                <div class="card-header bg-secondary">
                                    <h4 class="card-title">Favicon, Logo, and Copyright</h4>
                                </div>
                        <div class="card-body">
                            <form action="{{ route('theme.option') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Upload Logo</label>
                                            <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="{{ URL::to('/') }}/media/settings/{{ $all_settings->logo }}" alt="" id="logo_photo_load">
                                            <input style="display: none;" id="logo_photo" name="logo" class="form-control" type="file">
                                            <label for="logo_photo"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                                            <small class="pull-right text-secondary">Size in pixel: 182 X 47</small>
                                        </div>                                
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Upload Favicon</label>
                                            <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="{{ URL::to('/') }}/media/settings/{{ $all_settings->favicon }}" alt="" id="favicon_photo_load">
                                            <input style="display: none;" id="favicon_photo" name="favicon" class="form-control" type="file">
                                            <label for="favicon_photo"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                                            <small class="pull-right text-secondary">Size in pixel: 30 X 30</small>
                                        </div>                                
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Website Title</label>
                                            <input name="site_title" class="form-control" type="text" value="{{ $all_settings->site_title }}">
                                        </div>    
                                        @php
                                        $copy_arr = json_decode($all_settings->copyright);
                                        @endphp                                        
                                        <div class="form-group">
                                            <label>Copyright Year</label>
                                            <input name="copy_year" class="form-control" type="text" value="{{ $copy_arr->copy_year }}">
                                        </div>  
                                        <div class="form-group">
                                            <label>Copyright By</label>
                                            <input name="copy_by" class="form-control" type="text" value="{{ $copy_arr->copy_by }}">
                                        </div>                           
                                    </div>
                                </div>

                                @php
                                $social_arr = json_decode($all_settings->social);
                                @endphp
                                <!-- Social Media Links -->
                                <div class="row">  
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header bg-secondary">
                                                <h4 class="card-title">Social Links</h4>
                                            </div>   
                                            <div class="card-body">    
                                                <div class="row">             
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Facebook</label>
                                                            <input name="facebook_link" class="form-control" type="text" value="{{ $social_arr->facebook_link }}">
                                                        </div> 
                                                    </div>   
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Twitter</label>
                                                            <input name="twitter_link" class="form-control" type="text" value="{{ $social_arr->twitter_link }}">
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Youtube</label>
                                                            <input name="youtube_link" class="form-control" type="text" value="{{ $social_arr->youtube_link }}">
                                                        </div> 
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @php
                                $sister_arr = json_decode($all_settings->sister);
                                @endphp
                                <!-- Our Sister Concern -->
                                <div class="row">  
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header bg-secondary">
                                                <h4 class="card-title">Our Sister Concern</h4>
                                            </div>   
                                            <div class="card-body">    
                                                <div class="row">             
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Title</label>
                                                            <input name="sister" class="form-control" type="text" value="{{ $sister_arr->sister }}">
                                                        </div> 
                                                    </div>   
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Website Link</label>
                                                            <input name="web_link" class="form-control" type="text" value="{{ $sister_arr->web_link }}">
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Event Management</label>
                                                            <input name="event_manage" class="form-control" type="text" value="{{ $sister_arr->event_manage }}">
                                                        </div> 
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Event Logistics</label>
                                                            <input name="event_logist" class="form-control" type="text" value="{{ $sister_arr->event_logist }}">
                                                        </div> 
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>     

                                <!-- Hotline Number -->
                                @php
                                $hotline_arr = json_decode($all_settings->hotline);
                                @endphp
                                <div class="row">  
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header bg-secondary">
                                                <h4 class="card-title">Hotline Number</h4>
                                            </div>   
                                            <div class="card-body">    
                                                <div class="row">             
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Contact Number #1</label>
                                                            <input name="cell_1" class="form-control" type="text" value="{{ $hotline_arr->cell_1 }}">
                                                        </div> 
                                                    </div>   
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Contact Number #2</label>
                                                            <input name="cell_2" class="form-control" type="text" value="{{ $hotline_arr->cell_2 }}">
                                                        </div> 
                                                    </div>
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                </div>                                     

                                <div class="text-right">
                                    <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                </div>
                            </form>
                        </div> <!-- card-body -->
                    </div> <!-- card -->
                </div> <!-- col-md-12 -->
            </div> <!-- Row -->
        <!-- content container-fluid -->
        </div>
    </div>
    <!-- /Page Wrapper -->
</div>
<!-- /Main Wrapper -->
@endsection