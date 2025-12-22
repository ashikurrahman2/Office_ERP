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
                                        <p>Honesty and Integrity
Honesty is the foundation of trust and respect in all relationships.</p>
                                    </div>
                                </div>
                                <!--* End Heading -->
                            </div><!--* End Col -->
                        </div>
                        <div class="row clearfix">
                         @foreach($features as $index => $feature)
                            <div class="col-lg-6 col-md-6">
                                <div class="features-block theme-five wow fadeIn{{ $index % 2 == 0 ? 'Left' : 'Right' }}">
                                    <div class="inner-box">
                                        <div class="icon">
                                            <img class="normal" src="{{ asset('/') }}frontend/assets/images/default-color/gradient-icon-1.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <h4>{{ $feature->cer_title }}</h4>    
                                            <p>{{ $feature->cer_subtitle }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         @endforeach
                        </div>
                        <!-- End Row -->
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
                                    @foreach($features as $index => $feature)
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="heading{{ $index }}">
                                                <h3 class="panel-title">
                                                    <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse{{ $index }}" aria-expanded="false" aria-controls="collapse{{ $index }}">
                                                        {{ $feature->position }}
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapse{{ $index }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading{{ $index }}">
                                                <div class="panel-body">
                                                    <p>{{ $feature->position_des }}</p>
                                                    <p><a class="btn btn-primary" href="{{ route('req') }}">Apply Now</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection