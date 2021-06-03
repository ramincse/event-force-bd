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
                            <h4 class="card-title text-uppercase">Documentary Videos List<a class="btn btn-sm btn-info pull-right" data-toggle="modal" href="#add_docvideo_modal">Add Documentary Video</a></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Number</th>
                                            <th>Video Link</th>
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
                                                <img style="width: 160px; height: 60px; border-radius: 4px;" src="{{ URL::to('/') }}/media/documentary_video/{{ $data -> photo }}" alt="">
                                            </td>
                                            <td>{{ $data -> v_link }}</td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input status_id="{{ $data->id }}" type="checkbox" id="event_docvideo_{{ $loop-> index + 1 }}" class="check docvideo_switcher" {{ $data->status == true ? 'checked="checked"' : '' }} />
                                                    <label for="event_docvideo_{{ $loop-> index + 1 }}" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td>
                                                <a edit_id="{{ $data->id }}" class="btn btn-sm btn-info edit_docvideo" href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <form class="d-inline" action="{{ route('videos.destroy', $data->id) }}" method="POST">
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

<!-- Add Documentary Video Modal -->
<div id="add_docvideo_modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Documentary Video</h4>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Number of Video</label>
                        <input name="title" class="form-control" type="text" value="{{ old('title') }}">
                    </div>

                    <div class="form-group">
                        <label>Video Link</label>
                        <input name="v_link" class="form-control" type="text" value="{{ old('v_link') }}">
                    </div>

                    <div class="form-group">
                        <label>Photo</label>
                        <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="" alt="" id="docvideo_photo_load">
                        <input style="display: none;" id="docvideo_photo" name="photo" type="file">
                        <label for="docvideo_photo"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                        <small class="pull-right text-secondary">Size in pixel: 255 X 200</small>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-block btn-info" type="submit" value="Add Documentary Video">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Documentary Video Modal -->
<div id="update_docvideo_modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Documentary Video</h4>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('videos.update', 1) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Number of Video</label>
                        <input name="title" class="form-control" type="text">
                        <input name="id" class="form-control" type="hidden">
                    </div>

                    <div class="form-group">
                        <label>Video Link</label>
                        <input name="v_link" class="form-control" type="text">
                    </div>

                    <div class="form-group">
                        <label>Photo</label>
                        <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="" id="docvideo_new_photo_load">
                        <input style="display: none;" id="docvideo_new_photo" name="new_photo" class="form-control" type="file">
                        <label for="docvideo_new_photo"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                        <small class="pull-right text-secondary">Size in pixel: 255 X 200</small>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-block btn-info" type="submit" value="Update Documentary Video">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@section('javascript')
<script>
    (function ($) {
        $(document).ready(function () {
            $(document).on('change', '#docvideo_photo', function (e) {
                e.preventDefault();
                let file_url = URL.createObjectURL(e.target.files[0]);
                $('img#docvideo_photo_load').attr('src', file_url);
            });
        });

        //Event Management Edit
        $(document).on('click', '.edit_docvideo', function (e) {
            e.preventDefault();
            let edit_id = $(this).attr('edit_id');

            $.ajax({
                url: '/event/documentary/videos/' + edit_id + '/edit',
                success: function (data) {
                    $('#update_docvideo_modal form input[name="id"]').val(data.id);
                    $('#update_docvideo_modal form input[name="title"]').val(data.title);
                    $('#update_docvideo_modal form input[name="v_link"]').val(data.v_link);
                    $('#update_docvideo_modal img#docvideo_new_photo_load').attr('src', '/media/documentary_video/' + data.photo);
                    $('#update_docvideo_modal').modal('show');
                }
            });
        });

        $(document).ready(function () {
            $(document).on('change', '#docvideo_new_photo', function (e) {
                e.preventDefault();
                let file_url = URL.createObjectURL(e.target.files[0]);
                $('img#docvideo_new_photo_load').attr('src', file_url);
            });
        });
        
    })(jQuery)
</script>
@stop
@endsection