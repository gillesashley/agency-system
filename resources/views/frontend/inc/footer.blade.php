@section('footer')
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="{{ route('pages.index') }}" class="logo d-flex align-items-center">
                            <span>JayJay Health Care</span>
                        </a>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                            valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                        <div class="social-links d-flex  mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-dash"></i> <a href="{{ route('pages.index') }}">Home</a></li>
                            <li><i class="bi bi-dash"></i> <a href="{{ route('pages.about') }}">About us</a></li>
                            <li><i class="bi bi-dash"></i> <a href="{{ route('pages.services') }}">Services</a></li>
                            <li><i class="bi bi-dash"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bi bi-dash"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-dash"></i> <a href="#">Hospitality Section</a></li>
                            <li><i class="bi bi-dash"></i> <a href="#">Kitchen Assistants</a></li>
                            <li><i class="bi bi-dash"></i> <a href="#">Porters Cleaners</a></li>
                            <li><i class="bi bi-dash"></i> <a href="#">Chef Waitresses</a></li>
                            <li><i class="bi bi-dash"></i> <a href="#">Warehouse Staff</a></li>
                            <li><i class="bi bi-dash"></i> <a href="#">Offstead</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>
                            Shine Office, 46 Harehills Road, <br>
                            Leeds LS8 5HS<br>
                            United Kingdom <br><br>
                            <strong>Phone:</strong> 0113 518 9990 | 07840 262520<br>
                            <strong>Email 1:</strong> officeadmin@jayjaysocialcare.com<br>
                            <strong>Email 2:</strong> marketing@jayjaysocialcare.com<br>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-legal">
            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>JayJay Health Care</span></strong>. All Rights Reserved
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->
@show
