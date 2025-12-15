@extends('layouts.app')

@section('content')
     <!--* Page Header -->
                <div class="section-padding">
                    <div class="container">
                        <div class="row clearfix">
                            <div class="col-lg-12">
                                <div class="text-wrapper">
                                    <p class="lead-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    <p>When an unknown printer took a galleywhen an unknown printer tookLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>    
                                </div>
                                <div class="empty-space-15"></div>
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                        <div class="row clearfix">
                            <div class="col-lg-6">
                                <div class="text-wrapper">
                                    <h3>Requirements</h3>
                                    <ul class="list-style-one">
                                        <li>Nunc vulputate nulla vitae augue viverra, accumsan lobortis ante molestie.</li>
                                        <li>Aenean ac erat a tortor aliquet tincidunt.</li>
                                        <li>Aliquam vel nunc eu lacus vulputate aliquet accumsan tincidunt metus.</li>
                                        <li>Vivamus dictum quam in enim mattis viverra ac ac elit.</li>
                                        <li>Maecenas dictum nisi at eros efficitur, et euismod felis varius.</li>
                                    </ul>
                                </div>
                            </div><!--* End Col -->
                            <div class="col-lg-6">
                                <div class="text-wrapper">
                                    <h3>Benefits</h3>
                                    <ul class="list-style-one">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                        <li>Sed et mi ullamcorper, feugiat mauris sed, mattis erat.</li>
                                        <li>Nam id dui semper, posuere purus ac, tempus elit.</li>
                                        <li>Nulla imperdiet mi at purus tincidunt bibendum.</li>
                                        <li>In scelerisque libero nec euismod cursus.</li>
                                        <li>Vestibulum ut magna id justo scelerisque tempor eget ac lorem.</li>
                                    </ul>
                                </div>
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                    </div>
                </div>
                <div class="section-padding light-bg">
                    <div class="container">
                        <div class="row clearfix justify-content-center">
                            <div class="col-lg-8">
                                <div class="heading-wrapper with-separator text-center">
                                    <h2 class="h1">Apply for <span>this Job</span></h2>
                                    <div class="lead-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis finibus mi id elit gravida, quis tincidunt purus fringilla. Aenean convallis a neque non pellentesque.</p>
                                    </div>
                                </div>
                                <!--* End Heading -->
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                        <div class="row clearfix">
                            <div class="col-lg-12">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="inputFullName" placeholder="Full Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="inputPhone" placeholder="Phone">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" id="inputLinkedin" placeholder="Linkedin Profile">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="inputAddress" placeholder="Location">
                                    </div>
                                    <div class="form-group">
                                        <textarea placeholder="Have you any question?" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input id="upload" type="file" class="form-control">
                                        <div class="upload-main">
                                            <div class="upload-path"><span id="upload-res"></span><span class="upload-close">Remove.</span></div>
                                            <div class="uploadInput"><label for="upload" class="Uin">Upload Your Resume</label><span>( Supports PDF, DOC )</span></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Apply Now</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection