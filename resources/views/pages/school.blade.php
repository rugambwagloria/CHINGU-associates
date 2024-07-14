@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your school'])
    
    <div class="card shadow-lg mx-4 card-school-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="/images/pupil.jpg" alt="school_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        
                        <p class="mb-0 font-weight-bold text-sm">
                        
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true">
                                    <i class="ni ni-app"></i>
                                    <span class="ms-2">App</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-email-83"></i>
                                    <span class="ms-2">Messages</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center "
                                    data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="false">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span class="ms-2">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <form role="form" action="{{ route('school.store') }}" method="POST">
    <!-- Your form fields here -->
    


                        @csrf
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Edit school</p>
                                <button type="submit" name="submit" class="btn btn-primary btn-sm ms-auto">Save</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">School Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    
                                    <div class="form-group{{ $errors->has('school_name') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-school_name">
                                            <i class="w3-xxlarge fa fa-user"></i>{{ __('School Name') }}
                                        </label>
                                        <input type="text" name="school_name" id="input-school_name" class="form-control{{ $errors->has('school_name') ? ' is-invalid' : '' }}" placeholder="{{ __('School Name') }}" required autofocus>
        
                                    
                                </div>
                            <hr class="horizontal dark">
                            
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <div class="form-group{{ $errors->has('school_district') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-school_district">
                                            <i class="w3-xxlarge fa fa-user"></i>{{ __('School District') }}
                                        </label>
                                        <input type="text" name="school_district" id="input-school_district" class="form-control{{ $errors->has('school_district') ? ' is-invalid' : '' }}" placeholder="{{ __('School District') }}" required autofocus>
        
                                        
                                </div>
                                <div class="col-md-6">
                                     
                                    <div class="form-group{{ $errors->has('school_regNo') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-school_regNo">
                                            <i class="w3-xxlarge fa fa-user"></i>{{ __('School RegNo') }}
                                        </label>
                                        <input type="text" name="school_regNo" id="input-school_regNo" class="form-control{{ $errors->has('school_regNo') ? ' is-invalid' : '' }}" placeholder="{{ __('School RegNo') }}" required autofocus>
        
                                    
                                </div>
                                
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">School Representative</p>
                            <div class="row">
                                <div class="col-md-12">
                                    
                                        
                                    <div class="form-group{{ $errors->has('rep_fname') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-rep_fname">
                                            <i class="w3-xxlarge fa fa-user"></i>{{ __('Representative firstname') }}
                                        </label>
                                        <input type="text" name="rep_fname" id="input-rep_fname" class="form-control{{ $errors->has('rep_fname') ? ' is-invalid' : '' }}" placeholder="{{ __('Representative first name') }}" required autofocus>
        
                                        
                                </div>
                            
                                <div class="col-md-12">
                                      <div class="form-group{{ $errors->has('rep_lname') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-rep_lname">
                                            <i class="w3-xxlarge fa fa-user"></i>{{ __('Representative last name') }}
                                        </label>
                                        <input type="text" name="rep_lname" id="input-rep_lname" class="form-control{{ $errors->has('rep_lname') ? ' is-invalid' : '' }}" placeholder="{{ __('Representative last name') }}" required autofocus>
        
                                        
                                </div>
                                    </div>
                                <div class="col-md-16">
                                       <div class="form-group{{ $errors->has('rep_email') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-rep_email">
                                            <i class="w3-xxlarge fa fa-user"></i>{{ __('Representative email') }}
                                        </label>
                                        <input type="text" name="rep_email" id="input-rep_email" class="form-control{{ $errors->has('rep_email') ? ' is-invalid' : '' }}" placeholder="{{ __('Representative email') }}" required autofocus>
        
                                        
                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-school">
                    <img src="/img/bg-school.jpg" alt="Image placeholder" class="card-img-top">
                    <div class="row justify-content-center">
                        <div class="col-4 col-lg-4 order-lg-2">
                            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                <a href="javascript:;">
                                    <img src="/img/team-2.jpg"
                                        class="rounded-circle img-fluid border border-2 border-white">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
