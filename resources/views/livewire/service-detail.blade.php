<div class="services-details">
    <section class="section position-relative hero-section">
      <div class="hero-inner-banner-section d-block">


        <img src="{{asset('storage/'.$service->image)}}" srcset="{{asset('storage/'.$service->image)}} 300w, {{asset('storage/'.$service->image)}} 600w, {{asset('storage/'.$service->image)}} 900w, {{asset('storage/'.$service->image)}} 1200w, {{asset('storage/'.$service->image)}} 1500w"
        
        sizes="(max-width: 480px) 300px, (max-width: 768px) 600px, (max-width: 1024px) 900px, 1200px" alt="Image" class="w-100">


      </div>

      <div class="hero-slider-caption-wrapper banner-caption">
        <div class="container h-100">
          <div class="row h-100 d-flex justify-content-center justify-content-lg-center align-items-center">
            <div class="col-lg-7 col-md-12">
              <div class="hero-content-inner">
                <h1 class="mb-4">{{$service->title}}</h1>
                <p>{{$service->excerpt}}</p>

                <div class="row mt-5">


                    @if ($featuresSections && $featuresSections->isNotEmpty())
                    @foreach ($featuresSections as $feature)
                        <div
                            class="d-flex flex-column flex-grow-1 col-6 col-md-6 col-xl-6 col-xxl-6 featured-box mb-4 featured-box-alt">
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


            <div class="col-lg-5 col-md-12 d-none d-lg-block d-md-block">
              <div class="form-wrapper">
                <div class="form-wrapper-heading">
                  <h4>Book A Service Now</h4>
                  <p>£10 off any services when you book online</p>
                  @if ($success)
                  <div class="alert alert-success">
                      Your message has been sent successfully!
                  </div>
                     @endif

                  @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
                  @endif

                </div>
                <div class="form-wrapper-inner">
                    <form wire:submit.prevent="send" method="POST">
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

                                    @if ($services && $services->isNotEmpty())

                                        @foreach ($services as $serce)
                                            <option value="{{ $serce->title }}">{{ $serce->title }}
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

    <section class="section position-relative py-60 service-details-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto mb-5">
            <div class="content-section text-center">

                {!! $service->short_content ?? '' !!}
          

            </div>
          </div>
        </div>

        <div class="row d-flex justify-content-around">

            @foreach ($service->images as $key=>$img)
          <div class="col-lg-5 col-md-6 mb-4">
            <div class="image-box-wrapper {{$key % 2 != 0 ? 'image-box-wrapper-alt' : ''}}">
              <img src="{{ asset('storage/' . $img['image']) }}" srcset="{{ asset('storage/' . $img['image']) }} 300w, {{ asset('storage/' . $img['image']) }} 600w, {{ asset('storage/' . $img['image']) }} 900w, {{ asset('storage/' . $img['image']) }} 1200w, {{ asset('storage/' . $img['image']) }} 1500w" sizes="(max-width: 480px) 300px, (max-width: 768px) 600px, (max-width: 1024px) 900px, 1200px" alt="Responsive Example Image">
            </div>            
          </div>
          @endforeach

        </div>

        <div class="row mt-5">
          <div class="col-lg-12">
            {!! $service->content !!}
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

          <div class="col-md-12" wire:ignore>
            <div class="service-carousal testimonis">
                @if ($testimonials && $testimonials->isNotEmpty())
                @foreach ($testimonials as $testimonial)
                <div class="testimonial-slide-item">
                    <div class="testimonial-box-wrapper shadow">
                        <div class="testimonial-box-heading mb-3">
                            <h6 class="fs-6 fw-semibold mb-2">{{ $testimonial->name ?? null }}</h6>
                            <div class="review-star mb-4">

                        
                                @for ($i = 1; $i <= floor($testimonial->star_rating); $i++)
                                    <i class="bi bi-star-fill"></i> <!-- Full star -->
                                @endfor

                                @if ($testimonial->star_rating - floor($testimonial->star_rating) >= 0.5)
                                    <i class="bi bi-star-half"></i> <!-- Half star -->
                                @endif

                                @for ($i = ceil($testimonial->star_rating); $i < 5; $i++)
                                    <i class="bi bi-star"></i> <!-- Empty star -->
                                @endfor

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

          {{-- <div class="col-md-12 d-flex justify-content-center align-items-center">
            <a href="#" class="btn custom-btn mt-5">View All Reviews</a>
          </div> --}}

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