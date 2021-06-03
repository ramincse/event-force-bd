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
                <div class="col-md-8">
                    @include('validate')
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Our Portfolio</h4>
                        </div>
                        @php 
                            $event_portfolio = json_decode($portfolio->h_portfolio);
                        @endphp
                        <div class="card-body">
                            <form action="{{ route('event.portfolio') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Title</label>
                                    <input name="title" type="text" class="form-control form-control-lg" value="{{ $event_portfolio->title }}"/>
                                </div>
                                
                                <div class="form-group">
                                    <label>Upload a Photo</label>
                                    <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="{{ URL::to('/') }}/media/portfolio/{{ $event_portfolio->photo }}" alt="" id="portfolio_photo_load">
                                    <input style="display: none;" id="portfolio_photo" name="photo" class="form-control" type="file">
                                    <label for="portfolio_photo"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                                    <small class="pull-right text-secondary">Size in pixel: 1105 X 520</small>
                                </div>

                                <div class="form-group mb-0 row">
                                    <label class="col-form-label col-md-2"></label>
                                    <div class="col-md-10 text-right">
                                        <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>           
        </div>
        <!-- content container-fluid -->
    </div>
    <!-- /Page Wrapper -->

</div>
<!-- /Main Wrapper -->
@section('javascript')
<script>
    (function ($) {
        $(document).ready(function () {
            $(document).on('change', '#portfolio_photo', function (e) {
                e.preventDefault();
                let file_url = URL.createObjectURL(e.target.files[0]);
                $('img#portfolio_photo_load').attr('src', file_url);
            });
        });        
    })(jQuery)
</script>
@stop
@endsection