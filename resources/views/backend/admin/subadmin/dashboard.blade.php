@extends('backend.layouts.admin.subadmin.main')
@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Dashboard</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('subadminDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            {{-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i> Create New</button> --}}
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Coming Soon</h4>
                {{-- <h4 class="card-title">To Do :</h4>
                <ol>
                    <li>News Management : Multiple Image Upload</li>
                    <li>Create new button on all listing page</li>
                </ol> --}}
            </div>
        </div>
    </div>
</div>
@endsection