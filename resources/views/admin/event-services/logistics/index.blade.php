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
                            <h4 class="card-title text-uppercase">Event Logistics List<a class="btn btn-sm btn-info pull-right" data-toggle="modal" href="#add_logistics_modal">Add Event Logistics</a></h4>
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
                                                <img style="width: 160px; height: 60px; border-radius: 4px;" src="{{ URL::to('/') }}/media/event_services/logistics/{{ $data -> photo }}" alt="">
                                            </td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input status_id="{{ $data->id }}" type="checkbox" id="event_logistics_{{ $loop-> index + 1 }}" class="check logistics_switcher" {{ $data->status == true ? 'checked="checked"' : '' }} />
                                                    <label for="event_logistics_{{ $loop-> index + 1 }}" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td>
                                                <a edit_id="{{ $data->id }}" class="btn btn-sm btn-info edit_logistics" href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <form class="d-inline" action="{{ route('logistics.destroy', $data->id) }}" method="POST">
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

<!-- Add Logistics Modal -->
<div id="add_logistics_modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add event management</h4>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('logistics.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input name="title" class="form-control" type="text" value="{{ old('title') }}">
                    </div>

                    <div class="form-group">
                        <label>Photo</label>
                        <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="" alt="" id="logistics_photo_load">
                        <input style="display: none;" id="logistics_photo" name="photo" type="file">
                        <label for="logistics_photo"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                        <small class="pull-right text-secondary">Size in pixel: 350 X 195</small>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-block btn-info" type="submit" value="Add Logistics">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Logistics Modal -->
<div id="update_logistics_modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Event Logistics</h4>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('logistics.update', 1) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Title</label>
                        <input name="title" class="form-control" type="text">
                        <input name="id" class="form-control" type="hidden">
                    </div>

                    <div class="form-group">
                        <label>Photo</label>
                        <img style="width: 100%; height: 150px; border: 1px solid #ccc; border-radius: 4px; display: block;" src="" id="logistics_new_photo_load">
                        <input style="display: none;" id="logistics_new_photo" name="new_photo" class="form-control" type="file">
                        <label for="logistics_new_photo"><img style="width: 60px; height: 60px; cursor: pointer;" src="{{ URL::to('/') }}/admin/icons/camera.jpg" alt=""></label>
                        <small class="pull-right text-secondary">Size in pixel: 350 X 195</small>
                    </div>

                    <div class="form-group">
                        <input class="btn btn-block btn-info" type="submit" value="Update Logistics">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@section('javascript')
<script>
    (function ($) {
        //Event Logistics Image Load
        $(document).ready(function () {
            $(document).on('change', '#logistics_photo', function (e) {
                e.preventDefault();
                let file_url = URL.createObjectURL(e.target.files[0]);
                $('img#logistics_photo_load').attr('src', file_url);
            });

        //Event Management Edit
        $(document).on('click', '.edit_logistics', function (e) {
            e.preventDefault();
            let edit_id = $(this).attr('edit_id');

            $.ajax({
                url: '/event/logistics/' + edit_id + '/edit',
                success: function (data) {
                    $('#update_logistics_modal form input[name="id"]').val(data.id);
                    $('#update_logistics_modal form input[name="title"]').val(data.title);
                    $('#update_logistics_modal img#logistics_new_photo_load').attr('src', '/media/event_services/logistics/' + data.photo);
                    $('#update_logistics_modal').modal('show');
                }
            });
        });
        //Event Logistics Update Image Load
        $(document).ready(function () {
            $(document).on('change', '#logistics_new_photo', function (e) {
                e.preventDefault();
                let file_url = URL.createObjectURL(e.target.files[0]);
                $('img#logistics_new_photo_load').attr('src', file_url);
            });
        });
    });        
})(jQuery)
</script>
@stop
@endsection