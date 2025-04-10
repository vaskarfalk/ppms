<div>

    <section class="section position-relative services-section py-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading mb-5 text-center">
                        <h4>{{ $pageHeading->review_subtitle ?? null }}</h4>
                        <h2 class="mb-3">{{ $pageHeading->review_title ?? null }}</h2>
                        <p>{{ $pageHeading->review_description ?? null }}</p>
                    </div>
                </div>

                @if ($testimonials && $testimonials->isNotEmpty())
                    @foreach ($testimonials as $testimonial)
                        <div
                            class="d-flex flex-column col-6 col-md-4 col-xl-4 col-xxl-4 testimonials-box-wrapper-container mb-4">
                            <div class="testimonial-box-wrapper testimonial-box-wrapper-alt shadow">
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
                                <h5 class="mb-2 fs-5 fw-bold fst-italic">  {{ $testimonial->company_name ?? null }}</h5>

                                <div class="text-muted show-less-div-1">
                                    <p class="text-muted fs-6">    {{ $testimonial->description ?? null }}</p>
                                </div>

                            </div>
                        </div>
                    @endforeach

                @endif






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
