<div class="news-details">
    @section('meta')
        <x-meta-tags title="{{$news->title}}" description="{{$news->meta_description}}" ogTitle="{{$news->meta_title}}" ogDescription="{{$news->meta_description}}"
            ogUrl="{{ url()->current() }}" canonical="{{ url()->current() }}" />
    @endsection
    <section class="section position-relative blog-details-section grey-bg py-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 mb-4 mb-lg-0 md-mb-0">
                    <div class="heading mb-5">
                        <h2>{{ $news->title }}</h2>
                    </div>

                    <div class="image-container radious-10 mb-5"><img src="{{ asset('storage/' . $news->image) }}"
                            alt="{{ $news->title }}" class="img-fluid w-100"></div>

                    {!! $news->content !!}

                    <div class="">
                        <a href="{{ route('contact') }}" class="btn custom-btn mt-4 ">Contact Us</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3">
                    @if ($latestnews && $latestnews->isNotEmpty())
                        @foreach ($latestnews as $news)
                            <div class="d-flex flex-column flex-grow-1 service-box-wrapper-container mb-4">
                                <div class="service-box-wrapper">
                                    <div class="service-box-wrapper-image blog-box-wrapper-image"><img
                                            src="{{ asset('storage/' . $news->image) }}" alt=" {{ $news->title }}"
                                            class="img-fluid"></div>
                                    <div class="service-box-wrapper-content">
                                        <h3 class="mt-4"><a href="{{ route('news_detail', $news->slug) }}"
                                                class="text-dark"> {{ $news->title }}</a></h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    @endif


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
