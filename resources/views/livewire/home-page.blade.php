@push('styles')
<style>
    .cov-p p{
        color: #fff;
    }
</style>
    
@endpush
<div>
    <section class="section position-relative hero-section">
        <div class="slider hero-slider">

            {{-- @foreach ($pageHeading->web_banner as $pp)
            <div class="slider-item">
                <img src="{{ asset('storage/' . $pp['image']) }}" alt="{{$pp['alt']}}" class="img-fluid">
            </div>
        @endforeach --}}

            @foreach ($pageHeading->web_banner as $pp)
                <div class="slider-item">
                    <img src="{{ asset('storage/' . $pp['image']) }}"
                        srcset="
                {{ asset('storage/' . $pp['image']) }} 300w,
                {{ asset('storage/' . $pp['image']) }} 600w,
                {{ asset('storage/' . $pp['image']) }} 900w,
                {{ asset('storage/' . $pp['image']) }} 1200w,
                {{ asset('storage/' . $pp['image']) }} 1500w
            "
                        sizes="(max-width: 480px) 300px, (max-width: 768px) 600px, (max-width: 1024px) 900px, 1200px"
                        alt="{{ $pp['alt'] ?? 'Banner Image' }}" class="img-fluid">
                </div>
            @endforeach






            {{-- <div class="slider-item">
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
            </div> --}}



        </div>

        <div class="hero-slider-caption-wrapper banner-caption">
            <div class="container h-100">
                <div class="row h-100 d-flex justify-content-center justify-content-lg-center align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="hero-content-inner">
                            <h1 class="mb-3">{{ $pageHeading->title ?? null }}</h1>


                            <p>{{ $pageHeading->description ?? null }}</p>

                            <div class="d-flex align-items-center caption-btn-with-icon mt-5">
                                <a wire:navigate href="{{ $pageHeading->btn_1_url }}"
                                    class="btn custom-btn">{{ $pageHeading->btn_1 ?? null }}</a>
                                <div class="top-devider white-devider"></div>
                                <div class="google-review"><img
                                        src="{{ asset('storage/' . $pageHeading->G_rating_image) }}" alt=""
                                        class="img-fluid"></div>
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
                            <h2>{!! $pageHeading->why_title ?? '' !!}</h2>

                        </div>

                        <div class="row">

                            @if ($featuresSections && $featuresSections->isNotEmpty())
                                @foreach ($featuresSections as $feature)
                                    <div
                                        class="d-flex flex-column flex-grow-1 col-6 col-md-4 col-xl col-xxl featured-box">
                                        <div class="featured-box-wrapper">
                                            <div class="featured-box-icon">
                                                <img src="{{ asset('storage/' . $feature->image) }}"
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

                        <img src="{{ asset('storage/' . $pageHeading->who_image) }}"
                            srcset="{{ asset('storage/' . $pageHeading->who_image) }} 300w, {{ asset('storage/' . $pageHeading->who_image) }} 600w, {{ asset('storage/' . $pageHeading->who_image) }} 900w, {{ asset('storage/' . $pageHeading->who_image) }} 1200w, {{ asset('storage/' . $pageHeading->who_image) }} 1500w"
                            sizes="(max-width: 480px) 300px, (max-width: 768px) 600px, (max-width: 1024px) 900px, 1200px"
                            alt="Responsive Example Image">
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 offset-lg-1">
                    <div class="content-box-wrapper mt-100">
                        <div class="heading mb-4">
                            <h4> {{ $pageHeading->who_subtitle ?? null }}</h4>
                            <h2> {{ $pageHeading->who_title ?? null }}</h2>
                        </div>
                        {!! $pageHeading->who_description ?? '' !!}

                        <a wire:navigate  href="{{ $pageHeading->btn_2_url ?? null }}" class="btn custom-btn mt-4">
                            {{ $pageHeading->btn_2 ?? null }}</a>
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
                        <h4>{{ $pageHeading->service_subtitle ?? null }}</h4>
                        <h2 class="mb-3">{{ $pageHeading->service_title ?? null }}</h2>
                        <p>{{ $pageHeading->service_description ?? null }}</p>
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
                                              
                                                <img src="{{ asset('storage/' . $service->icon) }}"
                                                    alt="{{ $service->title }}">
                                            </div>
                                            <h3>{{ $service->title }}</h3>
                                            <p>{{ $service->excerpt }}</p>
                                            <a  wire:navigate  href="{{ route('service_detail', $service->slug) }}"
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
        style="background-image: url({{ asset('storage/' . $pageHeading->covered_image) }});">
        <div class="container position-relative z-2">
            <div class="row">
                <div class="col-lg-6 ms-auto">
                    <div class="heading heading-size mb-4">
                        <h2 class="text-white">{{ $pageHeading->covered_title ?? null }} </h2>
                    </div>
                    {{-- <p class="text-white">
                        We offer a full range of property maintenance solutions to keep your home or business in top
                        shape. From general repairs to specialized services, our skilled team is here to handle every
                        task with precision and care. No job is too big or small—we’ve got you covered every step of the
                        way.
                    </p> --}}
                    <div class="cov-p">
                       
                        {!! $pageHeading->covered_description ?? '' !!}
                    </div>
                    <a wire:navigate  href="{{ $pageHeading->btn_3_url }}"
                        class="btn custom-btn mt-4">{{ $pageHeading->btn_3 ?? null }}</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section position-relative grey-bg py-60 testmonials-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading mb-5 text-center">
                        <h4>{{ $pageHeading->review_subtitle ?? null }}</h4>
                        <h2 class="mb-3">{{ $pageHeading->review_title ?? null }}</h2>
                        <p>{{ $pageHeading->review_description ?? null }}</p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="service-carousal testimonis">

                        @if ($testimonials && $testimonials->isNotEmpty())
                            @foreach ($testimonials as $testimonial)
                                <div class="testimonial-slide-item">
                                    <div class="testimonial-box-wrapper shadow">
                                        <div class="testimonial-box-heading mb-3">
                                            <h6 class="fs-6 fw-semibold mb-2">{{ $testimonial->name ?? null }}</h6>
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
                                        <h5 class="mb-2 fs-5 fw-bold fst-italic">
                                            {{ $testimonial->company_name ?? null }}</h5>
                                        <p class="text-muted fs-6">
                                            {{ $testimonial->description ?? null }}</p>
                                        </p>
                                    </div>
                                </div>
                            @endforeach

                        @endif



                    </div>
                </div>

                <div class="col-md-12 d-flex justify-content-center align-items-center">
                    <a wire:navigate  href="{{ route('testimonials') }}"
                        class="btn custom-btn mt-5">{{ $pageHeading->btn_4 ?? null }}</a>
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
                            <h2 class="text-white">{{ $pageHeading->help_title ?? null }}</h2>
                        </div>
                        <a wire:navigate  href="{{ $pageHeading->btn_5_url ?? null }}" class="btn custom-btn black-bg-btn">
                            {{ $pageHeading->btn_5 ?? null }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
