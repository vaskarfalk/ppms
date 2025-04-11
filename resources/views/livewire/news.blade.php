<div class="news">
    @section('meta')
        <x-meta-tags title="{{ $seopages->news_meta_title }}" description="{{ $seopages->news_meta_description }}"
            ogTitle="{{ $seopages->news_meta_title }}" ogDescription="{{ $seopages->news_meta_description }}"
            ogUrl="{{ url()->current() }}" canonical="{{ url()->current() }}" />
    @endsection

    <section class="section position-relative services-section py-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading mb-5 text-center">
                        <h4>{{ $pageHeading->news_subtitle }}</h4>
                        <h2 class="mb-3">{{ $pageHeading->news_title }}</h2>
                        <p>{{ $pageHeading->news_description }}</p>
                    </div>
                </div>


                @if ($news && $news->isNotEmpty())
                    @foreach ($news as $new)
                        <div
                            class="d-flex flex-column  col-6 col-md-4 col-xl-4 col-xxl-4 service-box-wrapper-container mb-4">
                            <div class="service-box-wrapper">
                                <div class="service-box-wrapper-image blog-box-wrapper-image"><img
                                        src="{{ asset('storage/' . $new->image) }}" alt="" class="img-fluid">
                                </div>
                                <div class="service-box-wrapper-content">
                                    <h3 class="mt-4">{{ $new->title }}</h3>
                                    <p>{{ Str::words($new->excerpt, 15, '...') }}</p>

                                    <a wire:navigate href="{{ route('news_detail', $new->slug) }}" class="btn custom-btn mt-2">Read
                                        More <i class="bi bi-chevron-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                @endif


            </div>
        </div>
    </section>

 

</div>
