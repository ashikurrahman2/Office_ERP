<!--* Main Wrapper -->
<footer class="site-footer footer-theme-two">
    <div class="container">
        <div class="main-footer style-dark">
            <div class="row">
                <div class="col-lg-4">
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
                
                <div class="col-lg-3">
                    <div class="widget">
                        <div class="widget-title">
                            <h3 class="title">Contact Information</h3>
                        </div>
                        <div class="text-widget">
                            <div class="contact-info theme-two">
                                <ul>
                                    <li class="address-field">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <div class="info-content">
                                            <label>Office Address</label>
                                            <span>{{ $setting->address }}</span>
                                        </div>
                                    </li>
                                    <li class="email-field">
                                        <i class="fas fa-envelope"></i>
                                        <div class="info-content">
                                            <label>Email Us</label>
                                            <span>{{ $setting->main_email }}</span>
                                        </div>
                                    </li>
                                    <li class="phone-field">
                                        <i class="fas fa-phone-alt"></i>
                                        <div class="info-content">
                                            <label>Call Us</label>
                                            <span>{{ $setting->phone_one }}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>                                        
                        </div>
                    </div><!--* End Widget -->
                </div><!--* End Col -->
                
                <div class="col-lg-2">
                    <div class="widget">
                        <div class="widget-title">
                            <h3 class="title">Office Hours</h3>
                        </div>
                        <div class="text-widget">
                            <div class="office-hours-widget">
                                <div class="hours-item">
                                    <div class="hours-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="hours-content">
                                        <span class="day">Sunday - Thrusday</span>
                                        <span class="time">{{ $setting->opening_time ?? '9:00 AM' }}</span>
                                    </div>
                                </div>
                                 <div class="hours-item closed">
                                    <div class="hours-icon">
                                        <i class="fas fa-times-circle"></i>
                                    </div>
                                    <div class="hours-content">
                                        <span class="day">Friday</span>
                                        <span class="time">{{ $setting->sunday_time ?? 'Closed' }}</span>
                                    </div>
                                </div>
                                <div class="hours-item closed">
                                    <div class="hours-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="hours-content">
                                        <span class="day">Saturday</span>
                                        <span class="time">{{ $setting->sunday_time ?? 'Closed' }}</span>
                                    </div>
                                </div>
                              
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
                                    <li><a href="{{ route('abouts') }}"><i class="fas fa-chevron-right"></i> About Us</a></li>
                                    <li><a href="{{ route('ser') }}"><i class="fas fa-chevron-right"></i> Services</a></li>
                                    <li><a href="{{ route('com') }}"><i class="fas fa-chevron-right"></i> Contact Us</a></li>
                                    <li><a href="{{ route('cer') }}"><i class="fas fa-chevron-right"></i> Careers</a></li>
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

<style>
/* Enhanced Contact Information */
.contact-info.theme-two ul li {
    display: flex;
    align-items: flex-start;
    margin-bottom: 20px;
    padding: 0;
}

.contact-info.theme-two ul li i {
    font-size: 18px;
    color: #ff6b35;
    margin-right: 15px;
    margin-top: 5px;
    min-width: 20px;
}

.contact-info.theme-two .info-content {
    display: flex;
    flex-direction: column;
}

.contact-info.theme-two .info-content label {
    font-weight: 600;
    color: #fff;
    margin-bottom: 5px;
    font-size: 14px;
}

.contact-info.theme-two .info-content span {
    color: rgba(255, 255, 255, 0.75);
    font-size: 14px;
    line-height: 1.6;
}

/* Enhanced Office Hours */
.office-hours-widget {
    padding: 0;
}

.office-hours-widget .hours-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 18px;
    padding: 12px;
    background: rgba(255, 255, 255, 0.05);
    border-radius: 8px;
    border-left: 3px solid #ff6b35;
    transition: all 0.3s ease;
}

.office-hours-widget .hours-item:hover {
    background: rgba(255, 255, 255, 0.08);
    transform: translateX(5px);
}

.office-hours-widget .hours-item.closed {
    border-left-color: #dc3545;
    opacity: 0.7;
}

.office-hours-widget .hours-icon {
    font-size: 20px;
    color: #ff6b35;
    margin-right: 12px;
    margin-top: 2px;
    min-width: 24px;
}

.office-hours-widget .hours-item.closed .hours-icon {
    color: #dc3545;
}

.office-hours-widget .hours-content {
    display: flex;
    flex-direction: column;
    flex: 1;
}

.office-hours-widget .day {
    font-weight: 600;
    color: #fff;
    font-size: 14px;
    margin-bottom: 4px;
    letter-spacing: 0.3px;
}

.office-hours-widget .time {
    color: rgba(255, 255, 255, 0.7);
    font-size: 13px;
    font-weight: 500;
}

/* Enhanced Footer Navigation */
.footer-nav ul li {
    margin-bottom: 12px;
    transition: all 0.3s ease;
}

.footer-nav ul li a {
    display: flex;
    align-items: center;
    color: rgba(255, 255, 255, 0.75);
    transition: all 0.3s ease;
    padding: 5px 0;
}

.footer-nav ul li a i {
    font-size: 10px;
    margin-right: 10px;
    color: #ff6b35;
    transition: all 0.3s ease;
}

.footer-nav ul li:hover a {
    color: #fff;
    padding-left: 5px;
}

.footer-nav ul li:hover a i {
    margin-right: 15px;
}

/* Responsive Design */
@media (max-width: 991px) {
    .office-hours-widget .hours-item {
        padding: 10px;
    }
    
    .contact-info.theme-two ul li {
        margin-bottom: 15px;
    }
}
</style>