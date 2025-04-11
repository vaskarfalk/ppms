<div class="terms-and-conditions">
    @section('meta')
    <x-meta-tags title="{{ $seopages->terms_meta_title }}" description="{{ $seopages->terms_meta_description }}"
        ogTitle="{{ $seopages->terms_meta_title }}" ogDescription="{{ $seopages->terms_meta_description }}"
        ogUrl="{{ url()->current() }}" canonical="{{ url()->current() }}" />
@endsection
    <section class="section position-relative services-section py-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading  text-center">
                        <h4>{{ $terms->subtitle }}</h4>
                        <h2 class="mb-3">{{ $terms->title }}</h2>
                        {!! $terms->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
