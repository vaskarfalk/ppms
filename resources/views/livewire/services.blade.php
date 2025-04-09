<div class="services">

    <section class="section position-relative services-section py-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading mb-5 text-center">
                        <h4>{{ $pageHeading->service_subtitle ?? null }}</h4>
                        <h2 class="mb-3">{{ $pageHeading->service_title ?? null }}</h2>
                        <p>{{ $pageHeading->service_description ?? null }}</p>
                    </div>
                </div>

                @if ($services && $services->isNotEmpty())
                    @foreach ($services as $service)
                        <div
                            class="d-flex flex-column  col-6 col-md-4 col-xl-4 col-xxl-4 service-box-wrapper-container mb-4">
                            <div class="service-box-wrapper">
                                <div class="service-box-wrapper-image"><img
                                        src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}"
                                        class="img-fluid"></div>
                                <div class="service-box-wrapper-content">
                                    <div class="service-icon">

                                        <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->title }}">
                                    </div>
                                    <h3>{{ $service->title }}</h3>
                                    <p>{{ $service->excerpt }}</p>
                                    <a wire:navigate href="{{ route('service_detail', $service->slug) }}"
                                        class="btn custom-btn mt-2">Read More <i
                                            class="bi bi-chevron-right ms-1"></i></a>
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
                        <a wire:navigate href="{{ $pageHeading->btn_5_url ?? null }}"
                            class="btn custom-btn black-bg-btn">
                            {{ $pageHeading->btn_5 ?? null }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
