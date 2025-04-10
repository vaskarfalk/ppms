<div class="privacy-policy">
    <section class="section position-relative services-section py-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="heading  text-center">
                        <h4>{{ $privacy->subtitle ?? null }}</h4>
                        <h2 class="mb-3">{{ $privacy->title ?? null }}</h2>
                        {!! $privacy->content ?? null !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
