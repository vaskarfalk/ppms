<div class="what-we-do">
    @section('meta')
        <x-meta-tags title="{{ $seopages->whatwedo_meta_title }}" description="{{ $seopages->whatwedo_meta_description }}"
            ogTitle="{{ $seopages->whatwedo_meta_title }}" ogDescription="{{ $seopages->whatwedo_meta_description }}"
            ogUrl="{{ url()->current() }}" canonical="{{ url()->current() }}" />
    @endsection
    <section class="section position-relative py-60 service-details-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 mx-auto">
                    <div class="heading mb-5 text-center">
                        <h4>{{ $pageHeading->what_we_do_subtitle }}</h4>
                        <h2 class="mb-3">{{ $pageHeading->what_we_do_title }}</h2>
                        <div class="content-section text-center">
                            {!! $pageHeading->what_we_do_description !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    @if ($whatdos && $whatdos->isNotEmpty())
        @foreach ($whatdos as $key => $whats)
            <section
                class="section position-relative  {{ $key % 2 != 0 ? 'who-are-section-alt' : 'who-are-section' }}  my-60 mt-0">
                <div class="container">

                    <div class="row gy-4">
                        <div
                            class="col-lg-6 col-md-6 mb-4 mb-lg-0 mb-md-0  {{ $key % 2 != 0 ? 'order-lg-2 order-md-2 offset-lg-1' : '' }} ">
                            <div
                                class="image-box-wrapper {{ $key % 2 != 0 ? 'image-box-wrapper-alt' : '' }} mt-100 mb-5">
                                <img src="{{ asset('storage/' . $whats->image) }}"
                                    srcset="{{ asset('storage/' . $whats->image) }} 300w, {{ asset('storage/' . $whats->image) }} 600w, {{ asset('storage/' . $whats->image) }}.jpg 900w, {{ asset('storage/' . $whats->image) }} 1200w, {{ asset('storage/' . $whats->image) }} 1500w"
                                    sizes="(max-width: 480px) 300px, (max-width: 768px) 600px, (max-width: 1024px) 900px, 1200px"
                                    alt="Responsive Example Image">
                            </div>
                        </div>

                        <div
                            class="col-lg-5 col-md-6   {{ $key % 2 != 0 ? 'order-lg-1 order-md-1' : 'offset-lg-1 ' }}  ">
                            <div class="content-box-wrapper mt-100">
                                <div class="heading mb-4">
                                    <h4>{{ $whats->sub_title }}</h4>
                                    <h2>{{ $whats->title }}</h2>
                                </div>
                                <p>{!! $whats->description !!}</p>
                                <a wire:navigate href="{{ $whats->url }}"
                                    class="btn custom-btn mt-4">{{ $whats->button_name }}</a>
                            </div>
                        </div>

                    </div>


                </div>
            </section>
        @endforeach

    @endif




</div>
