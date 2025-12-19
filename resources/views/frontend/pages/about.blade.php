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
                @foreach($abouts as $about)
                <div class="about-section section-padding">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 wow fadeInLeft">
                                <div class="image-wrapper">
                                    <img src="{{ asset($about->image) }}" alt="">
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-6">
                                <div class="heading-wrapper with-separator">
                                    <span class="sub-title">About Dcode</span>
                                    <h2 class="h1">{{ $about->heading }} <span>work with us</span></h2>
                                </div><!--* End Heading -->
                                <div class="text-wrapper">
                                    <p>{{ $about->subheading }}</p>
                                    <ul class="list-style-one">
                                        <li>{{ $about->paragraph_1 }}</li>
                                    </ul>
                                </div>
                                <div class="btn-wrapper">
                                    <a class="btn btn-primary" href="#">Purchase Now</a>
                                </div>
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                    </div>
                </div>
                @endforeach
                <!--* About Section -->
                @foreach($abouts as $about)
                <div class="section-padding light-gradient-bg pb-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="features-block theme-one wow fadeInLeft">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal" src="{{ asset('/') }}frontend/assets/images/default-color/icon-5.svg" alt="">
                                            <img class="hover" src="{{ asset('/') }}frontend/assets/images/default-color/icon-5-light.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Our Responsibility</h4>    
                                            <p>{{ $about->resposibility }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-4">
                                <div class="features-block theme-one wow fadeInUp">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal" src="{{ asset('/') }}frontend/assets/images/default-color/icon-5.svg" alt="">
                                            <img class="hover" src="{{ asset('/') }}frontend/assets/images/default-color/icon-5-light.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Our Approach</h4>    
                                            <p>{{ $about->vision }}</p>
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
                                            <p>{{ $about->paragraph_2 }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                    </div>
                </div>
                @endforeach
                <!--* Our Approach Section -->
                    
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
                        
                       @foreach($teams as $team)
    <div class="col-lg-3 col-md-6">
        <div class="st-team-member theme-one wow fadeInUp">
            <div class="team-member-wrapper">
                <div class="st-team-image">
                    <img src="{{ asset($team->mem_img) }}" alt="{{ $team->mem_name }}">
                    <div class="team-social">
                        @php
                            $socials = array_map('trim', explode(',', $team->mem_social));
                            $links = array_map('trim', explode(',', $team->mem_social_link));
                            
                            // Icon mapping for better control
                            $iconMap = [
                                'facebook' => 'fa-facebook-f',
                                'linkedin' => 'fa-linkedin-in',
                                'twitter' => 'fa-twitter',
                                'instagram' => 'fa-instagram',
                                'youtube' => 'fa-youtube',
                            ];
                        @endphp
                        
                        @foreach($socials as $index => $social)
                            @if(isset($links[$index]) && !empty($links[$index]))
                                @php
                                    $socialLower = strtolower($social);
                                    $icon = $iconMap[$socialLower] ?? 'fa-' . $socialLower;
                                @endphp
                                <a href="{{ $links[$index] }}" target="_blank" rel="noopener noreferrer">
                                    <i class="fab {{ $icon }}"></i>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="st-team-member-detail">
                    <h3 class="member-name">{{ $team->mem_name }}</h3>
                    <span class="member-position">{{ $team->mem_design }}</span>
                </div>
            </div>
        </div>
    </div>
@endforeach
                        </div><!--* End Row -->
                    </div>
                </div>
           
                <!--* Call to Action Section -->
                <!--* companies Section -->
  </div>
@endsection