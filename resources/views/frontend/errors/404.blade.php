@extends('layouts.app')

@section('title', '404')

@section('content')
  <!--* Main Wrapper -->
            <div id="main-wrapper" class="page-wrapper">
                <div class="page-header section-padding full-height dc-404">
                    <div class="container">
                        <div class="row clearfix justify-content-center">
                            <div class="col-lg-8 text-center">
                                <div class="heading-wrapper wow fadeInUp" data-wow-delay="0.2s">
                                    <h1>Oopps, <span>nothing here..</span></h1>
                                    <div class="lead-text">
                                        <p>The page you looking for is not found.</p>
                                    </div>
                                </div>
                                <div class="image-wrapper">
                                    <img src="{{ asset('/') }}frontend/assets/images/default-color/page-not-found-img.png" alt="" />
                                </div>
                                <div class="empty-space-60"></div>
                                <div class="btn-wrapper wow fadeInRight" data-wow-delay="0.5s">
                                    <a class="btn btn-primary" href="/">Go back Homepage</a>
                                </div>
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                    </div>
                </div>
                <!--* Page Header -->
            </div>
            <!--* Main Wrapper -->
@endsection
