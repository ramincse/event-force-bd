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
                        <div class="card-header">
                            <h4 class="card-title">Documentary Production House</h4>
                        </div>

                        @php 
                            $document_decode = json_decode($event_document->production_house);
                        @endphp

                        <div class="card-body">
                            <form action="{{ route('event.services.document') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Title</label>
                                    <input name="title" type="text" class="form-control" value="{{ $document_decode->title }}" />
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Documentary Photo #1</label>
                                            <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="{{ URL::to('/') }}/media/event_services/documentary/{{ $document_decode->documentary_01 }}" alt="" id="documentary_01_load">
                                            <input style="display: none;" id="documentary_01" name="documentary_01" class="form-control" type="file">
                                            <label for="documentary_01"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                                            <small class="pull-right text-secondary">Size in pixel: 550 X 300</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Documentary Photo #2</label>
                                            <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="{{ URL::to('/') }}/media/event_services/documentary/{{ $document_decode->documentary_02 }}" alt="" id="documentary_02_load">
                                            <input style="display: none;" id="documentary_02" name="documentary_02" class="form-control" type="file">
                                            <label for="documentary_02"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                                            <small class="pull-right text-secondary">Size in pixel: 550 X 300</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Documentary Photo #3</label>
                                            <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="{{ URL::to('/') }}/media/event_services/documentary/{{ $document_decode->documentary_03 }}" alt="" id="documentary_03_load">
                                            <input style="display: none;" id="documentary_03" name="documentary_03" class="form-control" type="file">
                                            <label for="documentary_03"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                                            <small class="pull-right text-secondary">Size in pixel: 550 X 300</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Save</button>
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
            //Photo 01
            $(document).on('change', '#documentary_01', function (e) {
                e.preventDefault();
                let file_url = URL.createObjectURL(e.target.files[0]);
                $('img#documentary_01_load').attr('src', file_url);
            });

            //Photo 02
            $(document).on('change', '#documentary_02', function (e) {
                e.preventDefault();
                let file_url = URL.createObjectURL(e.target.files[0]);
                $('img#documentary_02_load').attr('src', file_url);
            });

            //Photo 03
            $(document).on('change', '#documentary_03', function (e) {
                e.preventDefault();
                let file_url = URL.createObjectURL(e.target.files[0]);
                $('img#documentary_03_load').attr('src', file_url);
            });
        });
    })(jQuery)
</script>
@stop
@endsection