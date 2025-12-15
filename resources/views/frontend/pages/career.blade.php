@extends('layouts.app')

@section('content')
     <!--* Page Header -->
                <div class="section-padding">
                    <div class="container">
                        <div class="row clearfix">
                            <div class="col-lg-8">
                                <div class="heading-wrapper with-separator">
                                    <h2 class="h1">Our <span>Values</span></h2>
                                    <div class="lead-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus mi id elit gravida, quis tincidunt purus fringilla. Aenean convallis a neque non pellentesque.</p>
                                    </div>
                                </div>
                                <!--* End Heading -->
                            </div><!--* End Col -->
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6">
                                <div class="features-block theme-five wow fadeInLeft">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal" src="images/default-color/gradient-icon-1.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Variety of Work in the Office</h4>    
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis, quam ut consectetur semper, velit turpis</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-6 col-md-6">
                                <div class="features-block theme-five wow fadeInLeft">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal" src="images/default-color/gradient-icon-2.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Feel Respected at the Workplace</h4>    
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis, quam ut consectetur semper, velit turpis</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-6 col-md-6">
                                <div class="features-block theme-five wow fadeInLeft">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal" src="images/default-color/gradient-icon-3.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Get Recognition of your Hard Work </h4>    
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis, quam ut consectetur semper, velit turpis</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-6 col-md-6">
                                <div class="features-block theme-five wow fadeInRight">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal" src="images/default-color/gradient-icon-1.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Employees Health Programs</h4>    
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis, quam ut consectetur semper, velit turpis</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-6 col-md-6">
                                <div class="features-block theme-five wow fadeInRight">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal" src="images/default-color/gradient-icon-2.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Continuous Growth & Support</h4>    
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis, quam ut consectetur semper, velit turpis</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Col -->
                            <div class="col-lg-6 col-md-6">
                                <div class="features-block theme-five wow fadeInRight">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal" src="images/default-color/gradient-icon-3.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>Personal Level Assistant</h4>    
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sagittis, quam ut consectetur semper, velit turpis</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End Col -->
                        </div><!-- End Row -->
                    </div>
                </div>

                 <div class="section-padding light-bg">
                    <div class="container">
                        <div class="row clearfix justify-content-center">
                            <div class="col-lg-8">
                                <div class="heading-wrapper with-separator text-center">
                                    <h2 class="h1">Opening <span>Positions</span></h2>
                                    <div class="lead-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus mi id elit gravida, quis tincidunt purus fringilla. Aenean convallis a neque non pellentesque.</p>
                                    </div>
                                </div>
                                <!-- End Heading -->
                            </div><!-- End Col -->
                        </div><!-- End Row -->
                        <div class="row clearfix">
                            <div class="col-lg-12">
                                <div class="panel-group style-2" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading0">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">Front-end Developer</a>
                                            </h3>
                                        </div>
                                        <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                                            <div class="panel-body">
                                                <p>Nunc scelerisque bibendum felis eu aliquet. Quisque et neque in diam feugiat dapibus laoreet vitae risus. Aliquam in mauris ante. Nullam porta, metus at dictum consectetur, mi risus auctor eros, id interdum nisl velit et ante.</p>
                                                <p><a class="btn btn-primary" href="{{ route('req') }}">Apply Now</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading1">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">Senior Business Analyst, Data Analytics</a>
                                            </h3>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                                            <div class="panel-body">
                                                <p>Nullam a nisl vitae sapien aliquet pellentesque. Mauris dui felis, sagittis non turpis quis, molestie facilisis quam. Ut ut augue tempor, tristique odio vitae, auctor erat. Sed finibus, magna a condimentum ultricies, lectus nisl euismod lectus, id aliquet mi velit in metus.</p>
                                                <p><a class="btn btn-primary" href="page-job-details.html">Apply Now</a></p>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading2">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">Social Media Marketing Manager</a>
                                            </h3>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                            <div class="panel-body">
                                                <p>Suspendisse condimentum efficitur leo, vitae porttitor risus ornare nec. Maecenas eget lorem vestibulum, vestibulum nulla et, posuere nibh.</p>
                                                <p><a class="btn btn-primary" href="page-job-details.html">Apply Now</a></p>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="heading3">
                                            <h3 class="panel-title">
                                                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">Senior Content Writer</a>
                                            </h3>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                            <div class="panel-body">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque metus mauris, ullamcorper quis fringilla pretium, faucibus quis enim. Proin at lorem nunc. Curabitur at scelerisque felis.</p>
                                                <p><a class="btn btn-primary" href="page-job-details.html">Apply Now</a></p>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection