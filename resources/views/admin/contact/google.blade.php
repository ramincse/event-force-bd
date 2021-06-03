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
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Google Location</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('contact.map') }}" method="POST">
                                @csrf

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="google_loc" class="form-control">{{ $con_google->google_loc }}</textarea>
                                    </div>
                                </div>
                                
                                <div class="text-right">
                                    <button type="submit" class="btn btn-lg btn-primary">Save</button>
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