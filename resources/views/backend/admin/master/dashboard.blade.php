@extends('backend.layouts.admin.master.main')
@section('breadcrumb')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Dashboard</h4>
    </div>
    <div class="col-md-7 align-self-center text-end">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item"><a href="{{ route('masterDashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            {{-- <button type="button" class="btn btn-info d-none d-lg-block m-l-15 text-white"><i class="fa fa-plus-circle"></i> Create New</button> --}}
        </div>
    </div>
</div>
@endsection

@section('title') Dashboard @endsection

@section('content')
<div class="row">
    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="{{ asset('storage/app/frontend/home.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Homepage</h4>                                
                                <a href="{{ route('home_sections') }}" class="btn btn-primary text-white">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="{{ asset('storage/app/frontend/recipes.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Recipes</h4>                                
                                <a href="{{ route('recipes_sections') }}" class="btn btn-primary text-white">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="{{ asset('storage/app/frontend/recipes-details.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Recipes Details</h4>                                
                                <a href="{{ route('recipes_details_sections') }}" class="btn btn-primary text-white">View More</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 img-responsive">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="{{ asset('storage/app/frontend/product-list.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Cuts</h4>                                
                                <a href="{{ route('cuts_sections') }}" class="btn btn-primary text-white">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="{{ asset('storage/app/frontend/experience.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Experience</h4>                                
                                <a href="{{ route('experience_sections') }}" class="btn btn-primary text-white">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <img class="card-img-top img-responsive" src="{{ asset('storage/app/frontend/about-us.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">About Us</h4>                                
                                <a href="{{ route('about_sections') }}" class="btn btn-primary text-white">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection