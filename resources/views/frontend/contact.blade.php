@extends('layouts.frontend')

@section('title', 'Contact')

@section('body-class', 'page-contact')

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/contact-header.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">
                <h2>Contact</h2>
                <ol>
                    <li><a href="{{ route('pages.index') }}">Home</a></li>
                    <li>Contact</li>
                </ol>
            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container position-relative" data-aos="fade-up">
                <div class="row gy-4 d-flex justify-content-end">
                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Location:</h4>
                                <p>Shine Office, 46 Harehills Road, Leeds LS8 5HS</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>officeadmin@jayjaysocialcare.com</p>
                                <p>marketing@jayjaysocialcare.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Call:</h4>
                                <p>0113 518 9990</p>
                                <p>07840 262520</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                        {{-- Success alert --}}
                        @if (session('success'))
                            <div class="alert alert-success mx-auto">
                                {{ session('success') }}
                            </div>
                        @endif
                        <form action="{{ route('contact.send') }}" method="post" role="form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control mb-4" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>
                        </form>
                    </div><!-- End Contact Form -->
                </div>
                <div class="row gy-4 d-flex justify-content-end mt-4">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2335.3953599881875!2d-1.519361717145698!3d53.81230130692342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48795c7648177937%3A0xb43dd036c7b45f99!2sHarehills%20Rd%2C%20Harehills%2C%20Leeds%20LS8%205HS%2C%20UK!5e0!3m2!1sen!2sgh!4v1689861312695!5m2!1sen!2sgh"
                        width="1000" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main><!-- End #main -->
@endsection
