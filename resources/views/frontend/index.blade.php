@extends('layouts.frontend')

@section('body-class', 'page-index')

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h2 data-aos="fade-up">Quality Health Care Services</h2>
                    <blockquote data-aos="fade-up" data-aos-delay="100">
                        <p>Are you passionate about making a difference in people's lives? Join our Health Care Agency and
                            be part of our mission to provide exceptional healthcare services. We are actively recruiting
                            skilled and compassionate healthcare professionals who are committed to delivering quality care
                            to our patients.</p>
                    </blockquote>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ route('pages.about') }}" class="btn-get-started">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">
        <!-- ======= Why Choose Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Why Choose Us</h2>
                </div>

                <div class="row g-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-xl-5 img-bg" style="background-image: url('assets/img/why-us-bg.jpg')"></div>
                    <div class="col-xl-7 slides  position-relative">
                        <div class="slides-1 swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Join Our Health Care Agency</h3>
                                        <h4 class="mb-3">Make a Difference in Healthcare</h4>
                                        <p>Are you looking for an opportunity to grow your healthcare career? Join our
                                            Health Care Agency and be part of a team that is dedicated to providing
                                            excellent care to patients. We offer a supportive and collaborative environment
                                            where you can thrive and make a real impact in the lives of others.</p>
                                    </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Unlock Your Potential with Us</h3>
                                        <h4 class="mb-3">Experience Fulfillment in Your Career</h4>
                                        <p>Discover the opportunities and benefits of joining our Health Care Agency.
                                            We prioritize your growth and well-being. With us, you can find a supportive
                                            and engaging environment that allows you to unleash your potential.
                                            Enjoy the satisfaction of making a difference in the lives of others while
                                            experiencing professional growth and fulfillment. We are committed to
                                            providing you with a rewarding career journey.</p>
                                    </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Discover New Opportunities</h3>
                                        <h4 class="mb-3">Experience Fulfillment in Your Career Path</h4>
                                        <p>Explore a world of possibilities with our Health Care Agency.
                                            We offer diverse and fulfilling opportunities that allow you to grow
                                            and excel in your career. Experience the satisfaction of providing
                                            quality care while being supported by a team of dedicated professionals.
                                            We value your contributions and are committed to fostering a rewarding
                                            and purposeful work environment. Join us and embark on a fulfilling
                                            career journey in healthcare.</p>
                                    </div>
                                </div><!-- End slide item -->

                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Unlock Your Potential in Healthcare</h3>
                                        <h4 class="mb-3">Experience Meaningful Growth and Fulfillment</h4>
                                        <p>Discover a world of possibilities with our Health Care Agency.
                                            We provide a platform for you to unleash your potential and achieve
                                            personal and professional growth. Our agency values your well-being
                                            and offers a supportive environment where you can make a meaningful
                                            impact in the lives of others. Embrace the rewarding journey of serving
                                            others and find fulfillment in your work. Join us and become a part of
                                            our dedicated team in delivering exceptional healthcare services.</p>
                                    </div>
                                </div><!-- End slide item -->

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Choose Us Section -->

        <!-- ======= Our Services Section ======= -->
        <section id="services-list" class="services-list">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Services</h2>

                </div>

                <div class="row gy-5">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Hospitality</a></h4>
                            <p class="description">We specialize in recruiting health workers for hospitality companies. Our
                                agency connects qualified professionals who provide excellent healthcare services to guests
                                and employees in the hospitality industry.</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Kitchen Assistant</a></h4>
                            <p class="description">We specialize in recruiting kitchen assistants for various
                                establishments. Our agency connects skilled individuals who support the smooth functioning
                                of kitchens in restaurants, hotels, and food service businesses.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Porters Cleaners</a></h4>
                            <p class="description">We recruit porters and cleaners for various industries. Our agency
                                connects dedicated individuals for maintaining cleanliness and providing essential support
                                services.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i></div>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Chef Waitresses</a></h4>
                            <p class="description">We specialize in recruiting talented chef waitresses. Our agency connects
                                skilled individuals who excel in both culinary arts and customer service. Whether it's in
                                fine dining establishments, hotels, or event venues, we ensure our clients have top-notch
                                chef waitresses who deliver exceptional dining experiences.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Warehouse Staff</a></h4>
                            <p class="description">We recruit warehouse staff for various industries. Our agency connects
                                reliable individuals who excel in warehouse operations and logistics. Whether it's in
                                retail, manufacturing, or distribution, we ensure our clients have capable warehouse staff
                                who contribute to efficient and organized operations.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                        <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i>
                        </div>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Ofsted</a></h4>
                            <p class="description">We offer support for Ofsted inspections. Our agency assists educational
                                institutions in meeting the required standards and achieving positive outcomes. We provide
                                tailored guidance, training, and resources to ensure successful Ofsted inspections.</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Our Services Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h3>Ut fugiat aliquam aut non</h3>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                        <a class="cta-btn" href="#">Call To Action</a>
                    </div>
                </div>

            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">

            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                        <h3>Powerful Features for <br>Your Business</h3>

                        <div class="row gy-4">

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-store-line" style="color: #ffbb2c;"></i>
                                    <span>Easy Cart Features</span>
                                </div>
                            </div><!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                                    <span>Sit amet consectetur adipisicing</span>
                                </div>
                            </div><!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                                    <span>Ipsum Rerum Explicabo</span>
                                </div>
                            </div><!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                                    <span>Easy Cart Features</span>
                                </div>
                            </div><!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-database-2-line" style="color: #47aeff;"></i>
                                    <span>Easy Cart Features</span>
                                </div>
                            </div><!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                                    <span>Sit amet consectetur adipisicing</span>
                                </div>
                            </div><!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                                    <span>Ipsum Rerum Explicabo</span>
                                </div>
                            </div><!-- End Icon List Item-->

                            <div class="col-md-6">
                                <div class="icon-list d-flex">
                                    <i class="ri-base-station-line" style="color: #ff5828;"></i>
                                    <span>Easy Cart Features</span>
                                </div>
                            </div><!-- End Icon List Item-->
                        </div>
                    </div>
                    <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
                        <div class="phone-wrap">
                            <img src="assets/img/iphone.png" alt="Image" class="img-fluid">
                        </div>
                    </div>
                </div>

            </div>

            <div class="details">
                <div class="container" data-aos="fade-up" data-aos-delay="300">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Labore Sdio Lidui<br>Bonde Naruto</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam nostrum molestias
                                doloremque quae delectus odit minima corrupti blanditiis quo animi!</p>
                            <a href="#about" class="btn-get-started">Get Started</a>
                        </div>
                    </div>

                </div>
            </div>

        </section><!-- End Features Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-posts" class="recent-posts">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Recent Blog Posts</h2>

                </div>

                <div class="row gy-5">

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog-1.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="meta">
                                <span class="post-date">Tue, December 12</span>
                                <span class="post-author"> / Julia Parker</span>
                            </div>
                            <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>
                            <p>Illum voluptas ab enim placeat. Adipisci enim velit nulla. Vel omnis laudantium. Asperiores
                                eum ipsa est officiis. Modi qui magni est...</p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog-2.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="meta">
                                <span class="post-date">Fri, September 05</span>
                                <span class="post-author"> / Mario Douglas</span>
                            </div>
                            <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>
                            <p>Voluptatem nesciunt omnis libero autem tempora enim ut ipsam id. Odit quia ab eum assumenda.
                                Quisquam omnis doloribus...</p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog-3.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="meta">
                                <span class="post-date">Tue, July 27</span>
                                <span class="post-author"> / Lisa Hunter</span>
                            </div>
                            <h3 class="post-title">Quia assumenda est et veritati</h3>
                            <p>Quia nam eaque omnis explicabo similique eum quaerat similique laboriosam. Quis omnis
                                repellat sed quae consectetur magnam...</p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="post-box">
                            <div class="post-img"><img src="assets/img/blog/blog-4.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="meta">
                                <span class="post-date">Tue, Sep 16</span>
                                <span class="post-author"> / Mario Douglas</span>
                            </div>
                            <h3 class="post-title">Pariatur quia facilis similique deleniti</h3>
                            <p>Et consequatur eveniet nam voluptas commodi cumque ea est ex. Aut quis omnis sint ipsum earum
                                quia eligendi...</p>
                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Recent Blog Posts Section -->

    </main><!-- End #main -->
@endsection
