 <!--* Main Wrapper -->
            <footer class="site-footer footer-theme-two">
                <div class="container">
                    <div class="main-footer style-dark">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="widget">
                                    <div class="text-widget">
                                        <div class="about-info">
                                            <div class="image-wrapper">
                                                <img src="{{ asset('/') }}frontend/assets/images/d-code-logo-light.svg" alt="" class="img-fluid"/>
                                            </div>
                                        </div>
                                        <div class="newsletter-form style-two align-left">
                                            <h3>Sign up and receive the latest news via email.</h3>
                                            <form method="post">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" id="EmailInput" placeholder="Enter email address" required="">
                                                </div>
                                                <button type="submit">Subscribe Now!</button>
                                            </form>
                                        </div>
                                        <div class="social-media-links">
                                            <h3>Follow Us:</h3>
                                            <ul>
                                                <li><a target="_blank" href="https://www.facebook.com/sacredthemes/"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a target="_blank" href="https://www.linkedin.com/company/sacredthemes/"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a target="_blank" href="https://twitter.com/SacredThemes"><i class="fab fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!--* End Widget -->
                            </div><!--* End Col -->
                            <div class="col-lg-4">
                                <div class="widget">
                                    <div class="widget-title">
                                        <h3 class="title">Contact Inforamtion</h3>
                                    </div>
                                    <div class="text-widget">
                                        <div class="contact-info theme-two">
                                            <ul>
                                                <li class="address-field"><label>Office</label>{{ $setting->address }}</li>
                                                <li class="email-field">{{ $setting->main_email }}</li>
                                                <li class="phone-field">{{ $setting->phone_one }}</li>
                                            </ul>
                                        </div>                                        
                                    </div>
                                </div><!--* End Widget -->
                            </div><!--* End Col -->
                            <div class="col-lg-3">
                                <div class="widget">
                                    <div class="widget-title">
                                        <h3 class="title">Useful Links</h3>
                                    </div>
                                    <div class="text-widget">
                                        <div class="footer-nav">
                                            <ul>
                                                <li><a href="{{ route('abouts') }}">About Us</a></li>
                                                <li><a href="{{ route('ser') }}">Services</a></li>
                                                <li><a href="{{ route('com') }}">Contact Us</a></li>
                                                <li><a href="{{ route('cer') }}">Careers</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!--* End Widget -->
                            </div><!--* End Col -->
                        </div><!--* End Row -->
                    </div>
                    <div class="copyright-bar style-dark">
                        <div class="copyright-text text-center">
                            © Copyright DCode {{ date('Y') }}. Made with <i class="fas fa-heart"></i> by <a href="https://stylox.design/" target="_blank"><strong>StyloxDesign</strong></a>.
                        </div>
                    </div>
                </div>
            </footer>
            <!--* Main Footer -->
            <div id="theme-option" class="option-panel">
                <h3>Select Your Color</h3>
                <ul class="pattern-color-list">
                    <li><a href="#" data-url="default-color" class="default-color active"></a></li>
                    <li><a href="#" data-url="orange-color" class="orange-color"></a></li>
                    <li><a href="#" data-url="green-color" class="green-color"></a></li>
                </ul>
                <h3>RTL/LTR Option</h3>
                <div class="layout-option">
                    <a href="#" class="btn btn-secondary btn-small enable rtl-version">RTL</a>
                    <a href="#" class="btn btn-secondary btn-small ltr-version">LTR</a>
                </div>
                <div class="switcher-btn">
                    <a href="#" class="settings">
                        <i class="mdi mdi-cog-outline mdi-spin"></i>
                    </a>
                </div>
            </div>