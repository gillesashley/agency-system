@extends('layouts.frontend')

@section('title', 'Contact')

@section('body-class', 'page-services')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/services-header.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Services</h2>
                <ol>
                    <li><a href="{{ route('pages.index') }}">Home</a></li>
                    <li>Services</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

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
                            <h4 class="title"><a href="#" class="stretched-link">Kitchen Assistants</a></h4>
                            <p class="description">We specialize in recruiting kitchen assistants for various
                                establishments. Our agency connects skilled individuals who support the smooth functioning
                                of kitchens in restaurants, hotels, and food service businesses.</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
                        <div>
                            <h4 class="title"><a href="#" class="stretched-link">Porters/Cleaners</a></h4>
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
                        <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
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

        <!-- ======= Services Cards Section ======= -->
        <section id="services-cards" class="services-cards">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/cards-1.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Eligendi omnis sunt veritatis.</h4>
                                        <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem
                                            placeat deleniti adipisci. Cum delectus doloribus non veritatis. Officia
                                            temporibus illo magnam. Dolor eos et.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/cards-2.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Possimus ut sed velit assumenda</h4>
                                        <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis.
                                            Est laboriosam qui iste numquam laboriosam voluptatem architecto. Est laudantium
                                            sunt at quas aut hic. Eum dignissimos.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/cards-3.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Error beatae dolor inventore aut</h4>
                                        <p>Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis
                                            numquam quae quaerat ipsam omnis. Neque debitis ipsum at architecto officia
                                            laboriosam odit. Ut sunt temporibus nulla culpa.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/cards-4.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Expedita voluptas ut ut nesciunt</h4>
                                        <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos
                                            doloremque architecto illo at beatae dolore. Fugiat suscipit et sint ratione
                                            dolores. Aut aliquid ea dolores libero nobis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>
        </section><!-- End Services Cards Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Testimonials</h2>

                </div>

                <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam
                                    duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat
                                    minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore
                                    labore illum veniam.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                </p>
                                <div class="profile mt-auto">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

    </main><!-- End #main -->
@endsection
