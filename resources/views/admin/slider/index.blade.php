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
                <div class="col-md-12">
                    @include('validate')
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">SLIDER LIST <a class="btn btn-sm btn-info pull-right" data-toggle="modal" href="#add_slider_modal">Add Slider</a></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Photo</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($all_data as $data)
                                        <tr>
                                            <td>{{ $loop -> index + 1 }}</td>
                                            <td>{{ $data -> title }}</td>
                                            <td>
                                                <img style="width: 260px; height: 60px; border-radius: 4px;" src="{{ URL::to('/') }}/media/sliders/{{ $data -> photo }}" alt="">
                                            </td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input status_id="{{ $data->id }}" type="checkbox" id="slider_status_{{ $loop-> index + 1 }}" class="check slider_switcher" {{ $data->status == true ? 'checked="checked"' : '' }} />
                                                    <label for="slider_status_{{ $loop-> index + 1 }}" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td>
                                                <a edit_id="{{ $data->id }}" class="btn btn-sm btn-info edit_slider" href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <form class="d-inline" action="{{ route('slider.destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button id="post_delete_btn" class="btn btn-sm btn-danger"><i style="color: #fff;" class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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

<!-- Add Slider Modal -->
<div id="add_slider_modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add new slider</h4>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input name="title" class="form-control" type="text" placeholder="Title">
                    </div>

                    <div class="form-group">
                        <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="" alt="" id="slider_photo_load">
                        <input style="display: none;" id="slider_photo" name="photo" class="form-control" type="file">
                        <label for="slider_photo"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                        <small class="pull-right text-secondary">Size in pixel: 1920 X 500</small>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-block btn-info" type="submit" value="Add slider">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Slider Modal -->
<div id="update_slider_modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update slider</h4>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('slider.update', 1) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <input name="id" class="form-control" type="hidden">
                        <input name="title" class="form-control" type="text">
                    </div>

                    <div class="form-group">
                        <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="" alt="" id="slider_new_photo_load">
                        <input style="display: none;" id="slider_new_photo" name="new_photo" class="form-control" type="file">
                        <label for="slider_new_photo"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                        <small class="pull-right text-secondary">Size in pixel: 1920 X 500</small>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-block btn-info" type="submit" value="Update slider">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection