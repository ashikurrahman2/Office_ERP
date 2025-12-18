@extends('layouts.app')

@section('content')
  <!--* Loader -->
            <div id="preloader">
                <div id="status">
                    <div class="d-loader">
                        <img src="{{ asset('/') }}frontend/assets/images/dcode-loader.gif" alt="DCode">
                    </div>
                </div>
            </div>
            <!--* Loader -->
 <div id="main-wrapper" class="page-wrapper">
               <div class="page-header section-padding full-height dc-five">
                    <div class="container">
                        <div class="row align-items-center flex-row-reverse">
                            <div class="col-lg-6">
                                <div class="image-wrapper">
                                    <img src="{{ asset('/') }}frontend/assets/images/default-color/erp-system-img.png" alt="" />
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-6">
                                @foreach($banners as $banner)
                                <div class="heading-wrapper with-separator wow fadeInLeft" data-wow-delay="0.2s">
                                    <h1>{{ $banner->banner_title }} <span>ERP Systems</span></h1>
                                </div>
                                <div class="text-wrapper wow fadeInLeft" data-wow-delay="0.4s">
                                    <p>{{ $banner->banner_subtitle }}</p>
                                </div>
                                <div class="btn-wrapper wow fadeInUp" data-wow-delay="0.4s">
                                    <a class="btn btn-primary" href="#">Get started</a>
                                    <a class="btn btn-outline-primary" href="#"><i class="fas fa-play-circle"></i>Watch Video</a>
                                </div>
                            </div>
                            @endforeach
                        </div><!--* End Row -->
                    </div>
                </div>
            </div>

                     <!--* Page Header -->
                <div class="features-section section-padding">
                    <div class="container">
                        <div class="row clearfix align-items-center justify-content-between">
                             <div class="col-lg-5">
                                <div class="heading-wrapper with-separator">
                                    <h2 class="h1">Why <span>Dcode ERP</span> Systems?</h2>
                                </div>
                                <!--* End Heading -->
                                <div class="text-wrapper">
                                    <p class="lead-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sodales dictum viverra.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sodales dictum viverra. Nam gravida dignissim eros. Vivamus congue erat ante, volutpat dictum neque dignissim eget.</p>
                                </div>
                                <div class="btn-wrapper">
                                    <a href="#" class="btn btn-primary">Discover More</a>
                                </div>
                                <div class="d-lg-none d-xl-block empty-space-30"></div>
                            </div><!--* End Col -->
                            <div class="col-lg-6">
                                <div class="row inner-row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="features-block theme-one wow fadeInUp">
                                            <div class="inner-box">
                                                <div class="icon">
                                                    <img class="normal img-fluid" src="images/default-color/icon-2.svg" alt="">
                                                    <img class="hover img-fluid" src="images/default-color/icon-2-light.svg" alt="">
                                                </div>
                                                <div class="text">
                                                    <h4>Easy to implement and use</h4>    
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sodales</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--* End Col -->
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="features-block theme-one wow fadeInUp" data-wow-delay="0.2s">
                                            <div class="inner-box">
                                                <div class="icon">
                                                    <img class="normal img-fluid" src="images/default-color/icon-24.svg" alt="">
                                                    <img class="hover img-fluid" src="images/default-color/icon-24-light.svg" alt="">
                                                </div>
                                                <div class="text">
                                                    <h4>Provides Custom Dashboards</h4>    
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sodales</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--* End Col -->
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="features-block theme-one wow fadeInUp" data-wow-delay="0.2s">
                                            <div class="inner-box">
                                                <div class="icon">
                                                    <img class="normal img-fluid" src="images/default-color/icon-4.svg" alt="">
                                                    <img class="hover img-fluid" src="images/default-color/icon-4-light.svg" alt="">
                                                </div>
                                                <div class="text">
                                                    <h4>Access data anywhere anytime</h4>    
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sodales</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--* End Col -->
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="features-block theme-one wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="inner-box">
                                                <div class="icon">
                                                    <img class="normal img-fluid" src="images/default-color/icon-25.svg" alt="">
                                                    <img class="hover img-fluid" src="images/default-color/icon-25-light.svg" alt="">
                                                </div>
                                                <div class="text">
                                                    <h4>A cost-effective solution</h4>    
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sodales</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--* End Col -->
                                </div><!--* End Row -->
                            </div>
                            <!--* End Col -->
                        </div><!--* End Row -->
                    </div>
                </div>
                <!--* Features Section -->
                <div class="section-padding border-top">
                    <div class="container">
                        <div class="row clearfix align-items-center">
                            <div class="col-lg-6">
                                <div class="image-wrapper">
                                    <img src="{{ asset('/') }}frontend/assets/images/default-color/erp-mobileapp-features.png" alt="" class="img-fluid">
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-6">
                                <div class="heading-wrapper with-separator">
                                    <h2 class="h1">App fledged with <span>features</span></h2>
                                </div><!--* End Heading -->
                                <div class="text-wrapper">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sodales dictum viverra. Nam gravida dignissim eros. Vivamus congue erat ante, volutpat dictum neque dignissim eget.</p>
                                    <ul class="list-style-one two-col">
                                        <li><strong>School Calendar</strong></li>
                                        <li><strong>Attendance Report</strong></li>
                                        <li><strong>Notice-board</strong></li>
                                        <li><strong>Exam Report</strong></li>
                                        <li><strong>Notifications</strong></li>
                                        <li><strong>Library</strong></li>
                                        <li><strong>Institution Fees</strong></li>
                                        <li><strong>Gallery</strong></li>
                                    </ul>
                                </div>
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                    </div>
                </div>
                <div class="benefits-section section-padding style-dark dark-bg gradient-heading-bg">
                    <div class="container">
                        <div class="row clearfix justify-content-center">
                            <div class="col-lg-8">
                                <div class="heading-wrapper text-center">
                                    <h2 class="h1"><span>Benefits</span> of DCode ERP Software</h2>
                                    <div class="lead-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus mi id elit gravida, quis tincidunt purus fringilla. Aenean convallis a neque non pellentesque.</p>
                                    </div>
                                </div><!--* End Heading -->
                                <div class="empty-space-60 clearfix"></div>
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                        <div class="row clearfix">
                            <div class="col-lg-4 col-md-6">
                                <div class="features-block theme-two wow fadeInUp">
                                    <div class="inner-box">
                                        <div class="text">
                                            <h4>Technology Integration</h4>
                                            <p>Pellentesque at libero sed tellus fringilla volutpat. Nullam vulputate velit id augue commodo scelerisque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-4 col-md-6">
                                <div class="features-block theme-two wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="inner-box">
                                        <div class="text">
                                            <h4>Flexibility</h4>
                                            <p>Pellentesque at libero sed tellus fringilla volutpat. Nullam vulputate velit id augue commodo scelerisque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-4 col-md-6">
                                <div class="features-block theme-two wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="inner-box">
                                        <div class="text">
                                            <h4>Paperless Administration</h4>
                                            <p>Pellentesque at libero sed tellus fringilla volutpat. Nullam vulputate velit id augue commodo scelerisque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-4 col-md-6">
                                <div class="features-block theme-two wow fadeInUp">
                                    <div class="inner-box">
                                        <div class="text">
                                            <h4>Productivity</h4>
                                            <p>Pellentesque at libero sed tellus fringilla volutpat. Nullam vulputate velit id augue commodo scelerisque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-4 col-md-6">
                                <div class="features-block theme-two wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="inner-box">
                                        <div class="text">
                                            <h4>Performance</h4>
                                            <p>Pellentesque at libero sed tellus fringilla volutpat. Nullam vulputate velit id augue commodo scelerisque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-4 col-md-6">
                                <div class="features-block theme-two wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="inner-box">
                                        <div class="text">
                                            <h4>Information Accessibility</h4>
                                            <p>Pellentesque at libero sed tellus fringilla volutpat. Nullam vulputate velit id augue commodo scelerisque.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                    </div>
                </div>

                    <!--* Benefits Section -->
                <div class="module-section section-padding">
                    <div class="container">
                        <div class="row clearfix justify-content-center">
                            <div class="col-lg-8">
                                <div class="heading-wrapper with-separator text-center">
                                    <h2 class="h1">DCode Provides <span>Premium Modules</span></h2>
                                    <div class="lead-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus congue erat ante, volutpat dictum neque dignissim eget.</p>
                                    </div>
                                </div>
                                <!--* End Heading -->
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                        <div class="row clearfix">
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="features-block theme-three wow fadeInUp">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal img-fluid" src="images/st-icon-1.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Fee Collection</h4>    
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="features-block theme-three wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal img-fluid" src="images/st-icon-2.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Library</h4>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="features-block theme-three wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal img-fluid" src="images/st-icon-3.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Human Resource</h4>    
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="features-block theme-three wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal img-fluid" src="images/st-icon-4.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Academic</h4>    
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="features-block theme-three wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal img-fluid" src="images/st-icon-5.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Examination</h4>    
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="features-block theme-three wow fadeInUp" data-wow-delay="1s">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal img-fluid" src="images/st-icon-6.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Student Info</h4>    
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="features-block theme-three wow fadeInUp">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal img-fluid" src="images/st-icon-7.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Expenses</h4>    
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="features-block theme-three wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal img-fluid" src="images/st-icon-8.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Attendance</h4>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="features-block theme-three wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal img-fluid" src="images/st-icon-9.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Inventory</h4>    
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="features-block theme-three wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal img-fluid" src="images/st-icon-10.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Communicate</h4>    
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="features-block theme-three wow fadeInUp" data-wow-delay="0.8s">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal img-fluid" src="images/st-icon-11.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Home work</h4>    
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-2 col-md-4 col-sm-6">
                                <div class="features-block theme-three wow fadeInUp" data-wow-delay="1s">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal img-fluid" src="images/st-icon-12.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Upload Content</h4>    
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                    </div>
                </div>
@endsection