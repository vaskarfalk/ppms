<div class="news"> 

    <section class="section position-relative services-section py-60">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="heading mb-5 text-center">
              <h4>{{$pageHeading->news_subtitle}}</h4>
              <h2 class="mb-3">{{$pageHeading->news_title}}</h2>
              <p>{{$pageHeading->news_description}}</p>
            </div>
          </div>


          @if ($news && $news->isNotEmpty())
          @foreach ($news as $new)

          <div class="d-flex flex-column  col-6 col-md-4 col-xl-4 col-xxl-4 service-box-wrapper-container mb-4">
            <div class="service-box-wrapper">
                  <div class="service-box-wrapper-image blog-box-wrapper-image"><img src="{{ asset('storage/' . $new->image) }}" alt="" class="img-fluid"></div>
                  <div class="service-box-wrapper-content">                    
                    <h3 class="mt-4">{{ $new->title }}</h3>
                   {{ $new->excerpt }}</p>
                    <a href="{{ route('news_detail', $new->slug) }}" class="btn custom-btn mt-2">Read More <i class="bi bi-chevron-right ms-1"></i></a>
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