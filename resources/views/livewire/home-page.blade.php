<div>
    <section class="section position-relative hero-section">
        <div class="slider hero-slider">
            <div class="slider-item">
                <img src="{{ asset('assets/images/hero-slider-image.jpg') }}"
                    srcset="{{ asset('assets/images/hero-slider-image-768.jpg') }} 300w, {{ asset('assets/images/hero-slider-image-768.jpg') }} 600w, {{ asset('assets/images/hero-slider-image.jpg') }} 900w, {{ asset('assets/images/hero-slider-image.jpg') }} 1200w, {{ asset('assets/images/hero-slider-image.jpg') }} 1500w"
                    sizes="(max-width: 480px) 300px, (max-width: 768px) 600px, (max-width: 1024px) 900px, 1200px"
                    alt="Responsive Example Image">
            </div>
            <div class="slider-item">
                <img src="{{ asset('assets/images/hero-slider-image.jpg') }}"
                    srcset="{{ asset('assets/images/hero-slider-image-768.jpg') }} 300w, {{ asset('assets/images/hero-slider-image-768.jpg') }} 600w, {{ asset('assets/images/hero-slider-image.jpg') }} 900w, {{ asset('assets/images/hero-slider-image.jpg') }} 1200w, {{ asset('assets/images/hero-slider-image.jpg') }} 1500w"
                    sizes="(max-width: 480px) 300px, (max-width: 768px) 600px, (max-width: 1024px) 900px, 1200px"
                    alt="Responsive Example Image">
            </div>
        </div>

        <div class="hero-slider-caption-wrapper banner-caption">
            <div class="container h-100">
                <div class="row h-100 d-flex justify-content-center justify-content-lg-center align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="hero-content-inner">
                            <h1 class="mb-3">Your One-Stop Shop for Property Maintenance Services!</h1>
                            <p>From repairs to routine upkeep, we provide reliable, affordable property maintenance
                                solutions to keep your space in perfect shape. Trust us to handle it all, so you don’t
                                have to!</p>
                            <div class="d-flex align-items-center caption-btn-with-icon mt-5">
                                <a href="#" class="btn custom-btn">Explore Services</a>
                                <div class="top-devider white-devider"></div>
                                <div class="google-review"><img src="{{ asset('assets/images/google-review.png') }}"
                                        alt="" class="img-fluid"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 d-none d-lg-block d-md-block">
                        <div class="form-wrapper">
                            <div class="form-wrapper-heading">
                                <h4>Book A Service Now</h4>
                                <p>£10 off any services when you book online</p>
                            </div>
                            @if ($success)
                                <div class="alert alert-success">
                                    Your message has been sent successfully!
                                </div>
                            @endif
                            <div class="form-wrapper-inner">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form wire:submit="send" method="POST">
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-4">
                                            <label for="first-name" class="form-label text-dark fw-semibold">First
                                                Name</label>
                                            <input type="text" class="form-control" id="first-name"
                                                wire:model="fname" aria-describedby="" placeholder="Ex: John">
                                        </div>
                                        <div class="col-md-6 col-12 mb-4">
                                            <label for="flast-name" class="form-label text-dark fw-semibold">Last
                                                Name</label>
                                            <input type="text" class="form-control" id="last-name" wire:model="lname"
                                                aria-describedby="" placeholder="Ex: Doe">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-4">
                                            <label for="phone-number" class="form-label text-dark fw-semibold">Phone
                                                Number</label>
                                            <input type="tel" class="form-control" id="phone-number"
                                                wire:model="phone" aria-describedby="" placeholder="Enter Number">
                                        </div>
                                        <div class="col-md-6 col-12 mb-4">
                                            <label for="email-address" class="form-label text-dark fw-semibold">Email
                                                Address</label>
                                            <input type="Email" class="form-control" id="email-address"
                                                wire:model="email" aria-describedby="" placeholder="Enter Email">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-4">

                                            <label for="service-select" class="form-label text-dark fw-semibold">What
                                                Service You Require?</label>
                                            <select id="service-select" wire:model="selectedService"
                                                class="form-select">
                                                <option>Select A Service</option>

                                                {{-- @foreach ($services as $service)                           
                              <option value="{{ $service->title }}">{{ $service->title }}</option>
                          @endforeach
                           --}}

                                                @if ($services && $services->isNotEmpty())

                                                    @foreach ($services as $service)
                                                        <option value="{{ $service->title }}">{{ $service->title }}
                                                        </option>
                                                    @endforeach
                                                @else
                                                    <option disabled>No services available.</option>
                                                @endif


                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-4">
                                            <label for="Textarea" class="form-label text-dark fw-semibold">What Service
                                                You Require?</label>
                                            <textarea class="form-control" wire:model="message" placeholder="Your Message" id="Textarea" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-12 col-12">
                                            <input type="submit" name="" value="Book Online Now"
                                                class="btn custom-btn w-100">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section position-relative why-choose-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="why-choose-wrapper pt-5 pb-5">
                        <div class="heading text-center pb-5">
                            <h2>Why Choose <span class="green-text">Plymouth</span></h2>
                        </div>

                        <div class="row">

                            @if ($featuresSections && $featuresSections->isNotEmpty())
                                @foreach ($featuresSections as $feature)
                                    <div
                                        class="d-flex flex-column flex-grow-1 col-6 col-md-4 col-xl col-xxl featured-box">
                                        <div class="featured-box-wrapper">
                                            <div class="featured-box-icon">
                                                <img src="{{ asset('storage/' .$feature->image) }}"
                                                    alt="{{ $feature->title }}">
                                            </div>
                                            <h4>{{ $feature->title }}</h4>
                                        </div>
                                    </div>
                                @endforeach

                            @endif





                        </div>


                    </div>
                </div>






            </div>
        </div>
    </section>

    <section class="section position-relative who-are-section my-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 mb-4 mb-lg-0 mb--md-0">
                    <div class="image-box-wrapper mt-100 mb-5">
                        <img src="{{ asset('assets/images/about-image.jpg') }}"
                            srcset="{{ asset('assets/images/about-image-583.jpg') }} 300w, {{ asset('assets/images/about-image-583.jpg') }} 600w, {{ asset('assets/images/about-image-583.jpg') }} 900w, {{ asset('assets/images/about-image-583.jpg') }} 1200w, {{ asset('assets/images/about-image.jpg') }} 1500w"
                            sizes="(max-width: 480px) 300px, (max-width: 768px) 600px, (max-width: 1024px) 900px, 1200px"
                            alt="Responsive Example Image">
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 offset-lg-1">
                    <div class="content-box-wrapper mt-100">
                        <div class="heading mb-4">
                            <h4>Who we are</h4>
                            <h2>The Trusted Hands Behind Your Property</h2>
                        </div>
                        <p>At Plymouth Property Maintenance Services, we provide reliable, high-quality maintenance
                            solutions for your property. Our experienced team is dedicated to ensuring your property is
                            well-cared for, whether it's routine upkeep or emergency repairs.</p>
                        <p>With a focus on professionalism and attention to detail, we’re the trusted partner you can
                            count on to keep your property in top shape.</p>
                        <a href="#" class="btn custom-btn mt-4">Read More</a>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="section position-relative grey-bg services-section py-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading mb-5 text-center">
                        <h4>Our Services</h4>
                        <h2 class="mb-3">Explore Plymouth Wide Range Of Services</h2>
                        <p>We offer a wide array of modern solutions to keep your property in excellent shape. From
                            routine care to emergency<br>repairs, our expert team delivers reliable, efficient services
                            tailored to meet your needs.</p>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="service-carousal service-slider">


                        @if ($services && $services->isNotEmpty())
                            @foreach ($services as $service)
                                <div class="service-slide-item">
                                    <div class="service-box-wrapper">
                                        <div class="service-box-wrapper-image"><img
                                                src="{{ asset('storage/' . $service->image) }}"
                                                alt="{{ $service->title }}" class="img-fluid"></div>
                                        <div class="service-box-wrapper-content">
                                            <div class="service-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512"
                                                    height="512" x="0" y="0" viewBox="0 0 512 512"
                                                    style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                    class="">
                                                    <g>
                                                        <path
                                                            d="M508.031 289.089 320 179.404V15.999a8 8 0 0 0-8-8H200a8 8 0 0 0-8 8v163.405L3.969 289.089A8 8 0 0 0 0 295.999v64a8 8 0 0 0 8 8h496a8 8 0 0 0 8-8v-64a8 8 0 0 0-3.969-6.91zm-305.868-97.09h107.674l164.571 96H37.592zm5.837-168h96v152h-96zm-192 328v-48h480v48zM188.688 436.889a12.678 12.678 0 0 1-2.378-14.652l9.33-18.66a8 8 0 1 0-14.31-7.155l-9.33 18.66a28.658 28.658 0 0 0 5.374 33.121l10.907 10.907a12.678 12.678 0 0 1 2.378 14.652l-9.329 18.66a8 8 0 1 0 14.31 7.155l9.329-18.66a28.658 28.658 0 0 0-5.374-33.121zM259.719 436.889a12.678 12.678 0 0 1-2.378-14.652l9.329-18.66a8 8 0 1 0-14.31-7.155l-9.329 18.66a28.658 28.658 0 0 0 5.374 33.121l10.907 10.907a12.678 12.678 0 0 1 2.378 14.652l-9.33 18.66a8 8 0 0 0 14.31 7.156l9.33-18.66a28.658 28.658 0 0 0-5.374-33.121zM331.719 436.889a12.678 12.678 0 0 1-2.378-14.652l9.329-18.66a8 8 0 1 0-14.31-7.155l-9.329 18.66a28.658 28.658 0 0 0 5.374 33.121l10.907 10.907a12.678 12.678 0 0 1 2.378 14.652l-9.33 18.66a8 8 0 0 0 14.31 7.156l9.33-18.66a28.658 28.658 0 0 0-5.374-33.121z"
                                                            fill="#ffffff" opacity="1" data-original="#000000"
                                                            class=""></path>
                                                        <path
                                                            d="M208 311.999a8 8 0 0 0-8 8v16a8 8 0 0 0 16 0v-16a8 8 0 0 0-8-8zM240 311.999a8 8 0 0 0-8 8v16a8 8 0 0 0 16 0v-16a8 8 0 0 0-8-8zM272 311.999a8 8 0 0 0-8 8v16a8 8 0 0 0 16 0v-16a8 8 0 0 0-8-8zM304 311.999a8 8 0 0 0-8 8v16a8 8 0 0 0 16 0v-16a8 8 0 0 0-8-8z"
                                                            fill="#ffffff" opacity="1" data-original="#000000"
                                                            class=""></path>
                                                    </g>
                                                </svg>
                                                <img src="{{ asset('storage/' . $service->icon) }}"
                                                    alt="{{ $service->title }}">
                                            </div>
                                            <h3>{{ $service->title }}</h3>
                                            <p>{{ $service->excerpt }}</p>
                                            <a href="{{ route('service_detail', $service->slug) }}"
                                                class="btn custom-btn mt-2">Read More <i
                                                    class="bi bi-chevron-right ms-1"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        @endif

                


                    </div>
                </div>



            </div>
        </div>
    </section>

    <section class="section position-relative covered-section bg-image right-tint"
        style="background-image: url({{ asset('assets/images/covered-image.jpg') }});">
        <div class="container position-relative z-2">
            <div class="row">
                <div class="col-lg-6 ms-auto">
                    <div class="heading heading-size mb-4">
                        <h2 class="text-white">For All Your Property Maintenance Needs, We've Got You Covered!</h2>
                    </div>
                    <p class="text-white">
                        We offer a full range of property maintenance solutions to keep your home or business in top
                        shape. From general repairs to specialized services, our skilled team is here to handle every
                        task with precision and care. No job is too big or small—we’ve got you covered every step of the
                        way.
                    </p>
                    <a href="#" class="btn custom-btn mt-4">Book Online Now</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section position-relative grey-bg py-60 testmonials-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading mb-5 text-center">
                        <h4>Reviews</h4>
                        <h2 class="mb-3">Plymouth Happy Customers</h2>
                        <p>Our priority is customer satisfaction. We take pride in delivering high-quality services that
                            keep our clients happy and their properties in excellent condition. With a track record of
                            reliability and attention to detail, we’ve built strong, lasting relationships with our
                            customers. Their positive feedback and trust in us are what drive our continued success.</p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="service-carousal testimonis">

                      @if ($testimonials && $testimonials->isNotEmpty())
                      @foreach ($testimonials as $testimonial)
                      <div class="testimonial-slide-item">
                        <div class="testimonial-box-wrapper shadow">
                            <div class="testimonial-box-heading mb-3">
                                <h6 class="fs-6 fw-semibold mb-2">{{$testimonial->name}}</h6>
                                <div class="review-star mb-4">

                                    {{-- <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i> --}}

                                    @for ($i = 1; $i <= floor($testimonial->star_rating); $i++)
                                    <i class="bi bi-star-fill"></i> <!-- Full star -->
                                @endfor
                            
                                @if ($testimonial->star_rating - floor($testimonial->star_rating) >= 0.5)
                                    <i class="bi bi-star-half"></i> <!-- Half star -->
                                @endif
                            
                                @for ($i = ceil($testimonial->star_rating); $i < 5; $i++)
                                    <i class="bi bi-star"></i> <!-- Empty star -->
                                @endfor

                                    {{-- @for ($i = 1; $i <= $testimonial->star_rating; $i++)
                                    <i class="bi bi-star-fill"></i>
                                @endfor --}}
                                </div>
                            </div>
                            <h5 class="mb-2 fs-5 fw-bold fst-italic">{{$testimonial->company_name}}</h5>
                            <p class="text-muted fs-6">
                              {{$testimonial->description}}
                            </p>
                        </div>
                    </div>

                      @endforeach
                        
                      @endif
            


                    </div>
                </div>

                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <a href="{{route('testimonials')}}" class="btn custom-btn mt-5">View All Reviews</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section position-relative help-section d-flex align-items-center">
        <div class="container h-100">
            <div class="row h-100 d-flex justify-content-center justify-content-lg-center align-items-center">
                <div class="col-md-12">
                    <div class="d-lg-flex justify-content-between align-items-center">
                        <div class="heading">
                            <h2 class="text-white">Have a Property Issue? We Can Help!</h2>
                        </div>
                        <a href="#" class="btn custom-btn black-bg-btn">Book Online Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
