@extends('layouts.app')

@section('content')
  <div id="main-wrapper" class="page-wrapper">
                {{-- <div class="inner-page-header section-padding style-dark">
                    <div class="container">
                        <div class="page-title-inner text-center clearfix">
                            <div class="heading-wrapper">
                                <h1 class="h1">About Us</h1>
                                <div class="lead-text">
                                    <p>What makes a great company? It's really easy. It's also the people that are working here.</p>
                                </div>
                            </div><!--* End Heading -->
                            <ul class="st-breadcrumb">
                                <li><a href="index-standard.html">Home</a></li>
                                <li class="active"><span>About Us</span></li>
                            </ul><!--* End Breadcrumb -->
                        </div><!--* Page Title Inner -->
                    </div>
                </div> --}}
                <!--* Page Header -->
                <div class="about-section section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 wow fadeInLeft">
                                <div class="image-wrapper">
                                    <img src="{{ asset('/') }}frontend/assets/images/default-color/user-interface-img.png" alt="">
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-6">
                                <div class="heading-wrapper with-separator">
                                    <span class="sub-title">About Dcode</span>
                                    <h2 class="h1">Why the best choose to <span>work with us</span></h2>
                                </div><!--* End Heading -->
                                <div class="text-wrapper">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sodales dictum viverra. Nam gravida dignissim eros. Vivamus congue erat ante, volutpat dictum neque dignissim eget.</p>
                                    <ul class="list-style-one">
                                        <li>Nullam placerat nunc id ornare convallis.</li>
                                        <li>Mauris id dui aliquam, dapibus felis vel, iaculis risus.</li>
                                        <li>Integer dapibus lorem in nisl hendrerit dictum.</li>
                                    </ul>
                                </div>
                                <div class="btn-wrapper">
                                    <a class="btn btn-primary" href="#">Purchase Now</a>
                                </div>
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                    </div>
                </div>
                <!--* About Section -->
                <div class="section-padding light-gradient-bg pb-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="features-block theme-one wow fadeInLeft">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal" src="images/default-color/icon-5.svg" alt="">
                                            <img class="hover" src="images/default-color/icon-5-light.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Our Responsibility</h4>    
                                            <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-4">
                                <div class="features-block theme-one wow fadeInUp">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal" src="images/default-color/icon-5.svg" alt="">
                                            <img class="hover" src="images/default-color/icon-5-light.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Our Approach</h4>    
                                            <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-4">
                                <div class="features-block theme-one wow fadeInRight">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal" src="images/default-color/icon-5.svg" alt="">
                                            <img class="hover" src="images/default-color/icon-5-light.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Our Mission, Vission</h4>    
                                            <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exer citation ullamco laboris.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                    </div>
                </div><!--* Our Approach Section -->
                <div class="our-team section-padding">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="heading-wrapper text-center with-separator">
                                    <h2 class="h1">Our Team <span>Experts</span></h2>
                                    <div class="lead-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus mi id elit gravida, quis tincidunt purus fringilla. Aenean convallis a neque non pellentesque.</p>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="st-team-member theme-one wow fadeInUp">
                                    <div class="team-member-wrapper">
                                        <div class="st-team-image">
                                            <img src="images/team-3-rect.jpg" alt="">
                                            <div class="team-social">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                        <div class="st-team-member-detail">
                                            <h3 class="member-name">Dan Kaul</h3>
                                            <span class="member-position">CEO & Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="st-team-member theme-one wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="team-member-wrapper">
                                        <div class="st-team-image">
                                            <img src="images/team-4-rect.jpg" alt="">
                                            <div class="team-social">
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                        <div class="st-team-member-detail">
                                            <h3 class="member-name">Andy Sant</h3>
                                            <span class="member-position">Planer & Manager</span>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="st-team-member theme-one wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="team-member-wrapper">
                                        <div class="st-team-image">
                                            <img src="images/team-5-rect.jpg" alt="">
                                            <div class="team-social">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                        <div class="st-team-member-detail">
                                            <h3 class="member-name">Saru Matt</h3>
                                            <span class="member-position">Sales Head</span>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-3 col-md-6">
                                <div class="st-team-member theme-one wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="team-member-wrapper">
                                        <div class="st-team-image">
                                            <img src="images/team-2-rect.jpg" alt="">
                                            <div class="team-social">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="st-team-member-detail">
                                            <h3 class="member-name">Shreyn S</h3>
                                            <span class="member-position">Analytical Head</span>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                    </div>
                </div>
                <div class="cta-section section-padding style-dark">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="call-to-action-content i-text-center">
                                    <h2 class="h1">Get a personalized demo, instantly. <span class="special-fonts">Schedule a demo</span></h2>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-5">
                                <div class="call-to-action-btn text-right i-text-center">
                                    <a href="#" class="btn btn-primary btn-light btn-large">Contact Us Now!</a>
                                </div>
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                    </div>
                </div>
                <!--* Call to Action Section -->
                <div class="companies-section section-padding">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="heading-wrapper text-center with-separator">
                                    <h2 class="h1">Trusted by many <span>companies</span></h2>
                                    <div class="lead-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus mi id elit gravida, quis tincidunt purus fringilla. Aenean convallis a neque non pellentesque.</p>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="companies-logo">
                                    <div class="item">
                                        <div class="logo-wrapper"><img src="images/company-logo-1.png" alt=""></div>    
                                    </div>
                                    <div class="item">
                                        <div class="logo-wrapper"><img src="images/company-logo-2.png" alt=""></div>    
                                    </div>
                                    <div class="item">
                                        <div class="logo-wrapper"><img src="images/company-logo-3.png" alt=""></div>   
                                    </div>
                                    <div class="item">
                                        <div class="logo-wrapper"><img src="images/company-logo-4.png" alt=""></div>
                                    </div>
                                    <div class="item">
                                        <div class="logo-wrapper"><img src="images/company-logo-5.png" alt=""></div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                    </div>
                </div>
                <!--* companies Section -->
  </div>
@endsection