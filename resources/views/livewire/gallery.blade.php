<div class="gallery">
    @section('meta')
        <x-meta-tags title="{{ $seopages->gallery_meta_title }}" description="{{ $seopages->gallery_meta_description }}"
            ogTitle="{{ $seopages->gallery_meta_title }}" ogDescription="{{ $seopages->gallery_meta_description }}"
            ogUrl="{{ url()->current() }}" canonical="{{ url()->current() }}" />
    @endsection

    <section class="section position-relative hero-section">
        <div class="hero-inner-banner-section d-block">
            <img src="{{ asset('storage/' . $pageHeading->gallery_bg_image) }}"
                srcset="{{ asset('storage/' . $pageHeading->gallery_bg_image) }} 300w, {{ asset('storage/' . $pageHeading->gallery_bg_image) }}.jpg 600w, {{ asset('storage/' . $pageHeading->gallery_bg_image) }} 900w, {{ asset('storage/' . $pageHeading->gallery_bg_image) }} 1200w, {{ asset('storage/' . $pageHeading->gallery_bg_image) }} 1500w"
                sizes="(max-width: 480px) 300px, (max-width: 768px) 600px, (max-width: 1024px) 900px, 1200px"
                alt="Image" class="w-100">
        </div>

        <div class="hero-slider-caption-wrapper banner-caption hero-slider-caption-wrapper-alt">
            <div class="container h-100">
                <div class="row h-100 d-flex justify-content-center justify-content-lg-center align-items-center">
                    <div class="col-lg-8">
                        <div class="hero-content-inner text-center">
                            <h3 class="text-uppercase text-white fs-4 medium-title mb-3 fw-semibold">
                                {{ $pageHeading->gallery_subtitle }}</h3>
                            <h1>{{ $pageHeading->gallery_title }}</h1>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="section position-relative gallery-section my-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul>
                        <li class="list active" data-filter="all-items">All</li>
                        @if ($galleries && $galleries->isNotEmpty())
                            @foreach ($galleries as $gallery)
                                <li class="list" data-filter="item{{ $gallery->id }}">{{ $gallery->title }}</li>
                            @endforeach

                        @endif

                    </ul>
                </div>

                <div class="col-lg-12">
                    <div class="gallery-wrapper row">
                        @if ($galleries && $galleries->isNotEmpty())
                            @foreach ($galleries as $gallery)
                                @if (!empty($gallery->G_images))
                                    @foreach ($gallery->G_images as $image)
                                        <div class="col-lg-4 col-6 mb-4 image-item all-items item{{ $gallery->id }}">
                                            <a data-fancybox="gallery"
                                                data-src="{{ asset('storage/' . $image['image']) }}"
                                                data-caption="{{ $gallery->title }}">
                                                <img src="{{ asset('storage/' . $image['image']) }}"
                                                    alt="{{ $gallery->title }}" class="img-fluid">
                                            </a>
                                        </div>
                                    @endforeach
                                @endif
                            @endforeach
                        @endif


                    </div>
                </div>



            </div>
        </div>
    </section>



</div>
