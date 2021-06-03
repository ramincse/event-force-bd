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
                            <h4 class="card-title text-uppercase">Event Services List<a class="btn btn-sm btn-info pull-right" data-toggle="modal" href="#add_security_modal">Add Event Services</a></h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>List Number</th>
                                            <th>Service Type</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($all_data as $data)
                                        <tr>
                                            <td>{{ $loop -> index + 1 }}</td>
                                            <td>{{ $data -> list_no }}</td>
                                            <td>{{ $data -> list }}</td>
                                            <td>
                                                <div class="status-toggle">
                                                    <input status_id="{{ $data->id }}" type="checkbox" id="event_services_{{ $loop-> index + 1 }}" class="check services_switcher" {{ $data->status == true ? 'checked="checked"' : '' }} />
                                                    <label for="event_services_{{ $loop-> index + 1 }}" class="checktoggle">checkbox</label>
                                                </div>
                                            </td>
                                            <td>
                                                <a edit_id="{{ $data->id }}" class="btn btn-sm btn-info edit_services" href=""><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                <form class="d-inline" action="{{ route('provide.destroy', $data->id) }}" method="POST">
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

<!-- Add Services Modal -->
<div id="add_security_modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Event Services</h4>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('provide.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Number of Services</label>
                        <input name="s_number" class="form-control" type="text" value="{{ old('s_number') }}">
                    </div>

                    <div class="form-group">
                        <label>Service Type</label>
                        <input name="title" class="form-control" type="text" value="{{ old('title') }}">
                    </div>

                    <div class="form-group">
                        <input class="btn btn-block btn-info" type="submit" value="Add Services">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Services Modal -->
<div id="update_services_modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Event Security</h4>
                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('provide.update', 1) }}" method="POST">
                    @csrf
                    @method('PUT') 
                    <div class="form-group">
                        <label>Number of Services</label>
                        <input name="s_number" class="form-control" type="text">
                        <input name="id" class="form-control" type="hidden">
                    </div>

                    <div class="form-group">
                        <label>Service Type</label>
                        <input name="title" class="form-control" type="text">
                    </div>

                    <div class="form-group">
                        <input class="btn btn-block btn-info" type="submit" value="Update Services">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@section('javascript')
<script>
    (function ($) {
        //Event Management Edit
        $(document).on('click', '.edit_services', function (e) {
            e.preventDefault();
            let edit_id = $(this).attr('edit_id');

            $.ajax({
                url: '/event/provide/' + edit_id + '/edit',
                success: function (data) {
                    $('#update_services_modal form input[name="id"]').val(data.id);
                    $('#update_services_modal form input[name="s_number"]').val(data.list_no);
                    $('#update_services_modal form input[name="title"]').val(data.list);
                    $('#update_services_modal').modal('show');
                }
            });
        });        
    })(jQuery)
</script>
@stop
@endsection