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
                                    <h4 class="card-title">Footer</h4>
                                </div>
                        <div class="card-body">
                            <form action="{{ route('theme.footer') }}" method="POST">
                                @csrf
                                <!-- Corporate Office -->
                                <div class="row">
                                    <div class="col-md-6">
                                        @php
                                            $corporate_office = json_decode($all_footers->footer1);
                                        @endphp
                                        <h4 class="card-title">Corporate Office</h4>
                                        <div class="form-group">
                                            <label>Office Name</label>
                                            <input name="c_name" type="text" class="form-control" value="{{ $corporate_office->c_name }}"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Office Address</label>
                                            <input name="c_address" type="text" class="form-control" value="{{ $corporate_office->c_address }}"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Office Phone</label>
                                            <input name="c_phone" type="text" class="form-control" value="{{ $corporate_office->c_phone }}"/>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="row">                                                
                                                <div class="col-md-12">
                                                    <label>Contact Number</label>
                                                </div>
                                            </div>                                        
                                            <div class="row">                                                
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="c_cell1" type="text" class="form-control" value="{{ $corporate_office->c_cell1 }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="c_cell2" type="text" class="form-control" value="{{ $corporate_office->c_cell2 }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="c_cell3" type="text" class="form-control" value="{{ $corporate_office->c_cell3 }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="c_cell4" type="text" class="form-control" value="{{ $corporate_office->c_cell4 }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-12">Contact E-mail</label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="c_email1" type="text" class="form-control" value="{{ $corporate_office->c_email1 }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="c_email2" type="text" class="form-control" value="{{ $corporate_office->c_email2 }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Dhaka Office 01 -->
                                    <div class="col-md-6">
                                        @php
                                            $dha1_office = json_decode($all_footers->footer2);
                                        @endphp                                        
                                        <h4 class="card-title">Dhaka Office-01</h4>
                                        <div class="form-group">
                                            <label>Office Name</label>
                                            <input name="d1_name" type="text" class="form-control" value="{{ $dha1_office->d1_name }}"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Office Address</label>
                                            <input name="d1_address" type="text" class="form-control" value="{{ $dha1_office->d1_address }}"/>
                                        </div>                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-12">Contact Number</label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="d1_cell1" type="text" class="form-control" value="{{ $dha1_office->d1_cell1 }}"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="d1_cell2" type="text" class="form-control" value="{{ $dha1_office->d1_cell2 }}"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-12">Contact E-mail</label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="d1_email1" type="text" class="form-control" value="{{ $dha1_office->d1_email1 }}"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="d1_email2" type="text" class="form-control" value="{{ $dha1_office->d1_email2 }}"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Dhaka Office 02 -->
                                    <div class="col-md-6">
                                        @php
                                            $dha2_office = json_decode($all_footers->footer3);
                                        @endphp
                                        <h4 class="card-title">Dhaka Office-02</h4>
                                        <div class="form-group">
                                            <label>Office Name</label>
                                            <input name="d2_name" type="text" class="form-control" value="{{ $dha2_office->d2_name }}"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Office Address</label>
                                            <input name="d2_address" type="text" class="form-control" value="{{ $dha2_office->d2_address }}"/>
                                        </div>                                        
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-12">Contact Number</label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="d2_cell1" type="text" class="form-control" value="{{ $dha2_office->d2_cell1 }}"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="d2_cell2" type="text" class="form-control" value="{{ $dha2_office->d2_cell2 }}"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-md-12">Contact E-mail</label>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="d2_email1" type="text" class="form-control" value="{{ $dha2_office->d2_email1 }}"/>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <input name="d2_email2" type="text" class="form-control" value="{{ $dha2_office->d2_email2 }}"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Social Links -->
                                    <div class="col-md-6">
                                        
                                        <h4 class="card-title">Social Links</h4>
                                        
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