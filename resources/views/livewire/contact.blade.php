<div class="contact">
    <section class="section position-relative hero-section">
        <div class="hero-inner-banner-section d-block">
            <img src="{{ asset('storage/' . $pageHeading->contact_bg_image) }}"
                srcset="{{ asset('storage/' . $pageHeading->contact_bg_image) }} 300w, {{ asset('storage/' . $pageHeading->contact_bg_image) }} 600w, {{ asset('storage/' . $pageHeading->contact_bg_image) }} 900w, {{ asset('storage/' . $pageHeading->contact_bg_image) }} 1200w, {{ asset('storage/' . $pageHeading->contact_bg_image) }} 1500w"
                sizes="(max-width: 480px) 300px, (max-width: 768px) 600px, (max-width: 1024px) 900px, 1200px"
                alt="Image" class="w-100">
        </div>

        <div class="hero-slider-caption-wrapper banner-caption hero-slider-caption-wrapper-alt">
            <div class="container h-100">
                <div class="row h-100 d-flex justify-content-center justify-content-lg-center align-items-center">
                    <div class="col-md-12">
                        <div class="hero-content-inner text-center">
                            <h3 class="text-uppercase text-white fs-4 medium-title mb-3 fw-semibold">
                                {{ $pageHeading->contact_subtitle }}</h3>
                            <h1>{{ $pageHeading->contact_title }}</h1>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section position-relative who-are-section-alt my-60">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-lg-5 col-md-6 mb-4 mb-lg-0 mb-md-0 order-lg-2 order-md-2 order-1">

                    <div class="form-wrapper shadow">

                        <div class="form-wrapper-heading">
                            <h4>{{ $pageHeading->contact_form_title }}</h4>
                            <p>{{ $pageHeading->contact_form_subtitle }}</p>
                        </div>

                        <div class="form-wrapper-inner">

                            <form wire:submit="send">
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-4">
                                        <label for="first-name" class="form-label text-dark fw-semibold">First
                                            Name</label>
                                        <input type="text" class="form-control" id="first-name" wire:model="fname"
                                            aria-describedby="" placeholder="Ex: John">
                                        @error('fname')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-12 mb-4">
                                        <label for="flast-name" class="form-label text-dark fw-semibold">Last
                                            Name</label>
                                        <input type="text" class="form-control" id="last-name" wire:model="lname"
                                            aria-describedby="" placeholder="Ex: Doe">
                                        @error('lname')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-12 mb-4">
                                        <label for="phone-number" class="form-label text-dark fw-semibold">Phone
                                            Number</label>
                                        <input type="tel" class="form-control" id="phone-number" wire:model="phone"
                                            aria-describedby="" placeholder="Enter Number">
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 col-12 mb-4">
                                        <label for="email-address" class="form-label text-dark fw-semibold">Email
                                            Address</label>
                                        <input type="Email" class="form-control" id="email-address" wire:model="email"
                                            aria-describedby="" placeholder="Enter Email">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 col-12 mb-4">

                                        <label for="service-select" class="form-label text-dark fw-semibold">What
                                            Service You Require?</label>
                                        <select id="service-select" wire:model="selectedService" class="form-select">
                                            <option>Select A Service</option>

                                            @if ($services && $services->isNotEmpty())

                                                @foreach ($services as $service)
                                                    <option value="{{ $service->title }}">{{ $service->title }}
                                                    </option>
                                                @endforeach
                                            @else
                                                <option disabled>No services available.</option>
                                            @endif


                                        </select>
                                        @error('selectedService')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-12 mb-4">
                                        <label for="Textarea" class="form-label text-dark fw-semibold">Describe Your Problem</label>
                                        <textarea class="form-control" wire:model="message" placeholder="Your Message" id="Textarea" rows="3"></textarea>
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-12 col-12">
                                        <input type="submit" value="Book Online Now" class="btn custom-btn w-100">
                                        {{-- <button type="submit" class="btn custom-btn w-100">Book Online Now</button> --}}

                                        <div wire:loading wire:target="send" class="loading-spinner">
                                            <span class="spinner-border text-white" aria-hidden="true"></span>
                                            <span role="status" class="text-white">Loading...</span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            @if ($success)
                                <div class="toast show align-items-center mx-auto  text-bg-success border-0 my-3"
                                    role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex ">
                                        <div class="toast-body">
                                            Success! Your form has been submitted.
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                            data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                            @endif
                        </div>

                    </div>


                </div>

                <div class="col-lg-7 col-md-6 order-2 order-lg-1 order-md-1">
                    <div class="content-box-wrapper">
                        <div class="heading mb-4">
                            <h4>{{ $pageHeading->contact_subheading }}</h4>
                            <h2>{{ $pageHeading->contact_heading }}</h2>
                        </div>


                        <div class="row mt-5">

                            <div class="d-flex flex-column flex-grow-1 col-12 featured-box mb-4 featured-box-alt">
                                <a class="featured-box-wrapper" href="tel:+{{ $pageHeading->contact_number }}">
                                    <div class="featured-box-icon">
                                        <img src="images/image-icon/phone-icon.png" alt="" class="img-fluid">
                                    </div>
                                    <h4 class="text-dark">+{{ $pageHeading->contact_number }}</h4>
                                </a>
                            </div>

                            <div class="d-flex flex-column flex-grow-1 col-12 featured-box mb-4 featured-box-alt">
                                <a class="featured-box-wrapper" href="mailto:{{ $pageHeading->contact_email }}">
                                    <div class="featured-box-icon">
                                        <img src="images/image-icon/email-icon.png" alt="" class="img-fluid">
                                    </div>
                                    <h4 class="text-dark">{{ $pageHeading->contact_email }}</h4>
                                </a>
                            </div>

                            <div class="d-flex flex-column flex-grow-1 col-12 featured-box mb-4 featured-box-alt">
                                <a class="featured-box-wrapper" href="javascript:void(0);">
                                    <div class="featured-box-icon">
                                        <img src="images/image-icon/location-icon.png" alt=""
                                            class="img-fluid">
                                    </div>
                                    <h4 class="text-dark">{!! $pageHeading->contact_address !!}</h4>
                                </a>
                            </div>




                        </div>



                    </div>
                </div>


            </div>
        </div>
    </section>

    <section class="section position-relative map-section">
        {!! $pageHeading->contact_maps !!}
    </section>

    <section class="section position-relative help-section d-flex align-items-center">
        <div class="container h-100">
            <div class="row h-100 d-flex justify-content-center justify-content-lg-center align-items-center">
                <div class="col-md-12">
                    <div class="d-lg-flex justify-content-between align-items-center">
                        <div class="heading">
                            <h2 class="text-white">{{ $pageHeading->help_title ?? null }}</h2>
                        </div>
                        <a wire:navigate href="{{ $pageHeading->btn_5_url ?? null }}"
                            class="btn custom-btn black-bg-btn">
                            {{ $pageHeading->btn_5 ?? null }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
