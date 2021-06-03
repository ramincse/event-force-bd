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
            @php 
                $whoweare_decode = json_decode($who_we_are->d_who_we_are);
            @endphp
                <div class="col-md-12">
                    @include('validate')
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Text Message</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('who.we.are') }}" method="POST">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Title</label>
                                    <div class="col-md-10">
                                        <input name="title" type="text" class="form-control form-control-lg" value="{{ $whoweare_decode->title }}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2">Content</label>
                                    <div class="col-md-10">
                                        <textarea style="height: 200px;" name="content" class="form-control form-control-lg">{{ $whoweare_decode->content }}</textarea>
                                    </div>
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
@endsection