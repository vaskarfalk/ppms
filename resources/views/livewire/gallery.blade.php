<div class="gallery">

    @push('styles')
    <link  rel="preload stylesheet"  href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" as="style" async>
    @endpush

    <section class="section position-relative hero-section">
      <div class="hero-inner-banner-section d-block">
        <img src="{{asset('storage/'.$pageHeading->gallery_bg_image)}}" srcset="{{asset('storage/'.$pageHeading->gallery_bg_image)}} 300w, {{asset('storage/'.$pageHeading->gallery_bg_image)}}.jpg 600w, {{asset('storage/'.$pageHeading->gallery_bg_image)}} 900w, {{asset('storage/'.$pageHeading->gallery_bg_image)}} 1200w, {{asset('storage/'.$pageHeading->gallery_bg_image)}} 1500w" sizes="(max-width: 480px) 300px, (max-width: 768px) 600px, (max-width: 1024px) 900px, 1200px" alt="Image" class="w-100">
      </div>

      <div class="hero-slider-caption-wrapper banner-caption hero-slider-caption-wrapper-alt">
        <div class="container h-100">
          <div class="row h-100 d-flex justify-content-center justify-content-lg-center align-items-center">
            <div class="col-md-12">
              <div class="hero-content-inner text-center">
                <h3 class="text-uppercase text-white fs-4 medium-title mb-3 fw-semibold">{{$pageHeading->gallery_subtitle}}</h3>
                <h1>{{$pageHeading->gallery_title}}</h1>                
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
            <li class="list" data-filter="item1">Kitchen</li>
            <li class="list" data-filter="item2">Bathrooms</li>
            <li class="list" data-filter="item3">Building Extensions</li>
            <li class="list" data-filter="item4">Loft Conversion</li>
            <li class="list" data-filter="item5">Painting & Decorating</li>
            <li class="list" data-filter="item6">Carpentry</li>
            <li class="list" data-filter="item7">Bricklaying</li>
            <li class="list" data-filter="item8">Plumbing & Heating</li>
            <li class="list" data-filter="item9">Plastering</li>
            <li class="list" data-filter="item10">Tiling</li>
            <li class="list" data-filter="item11">Block Paving</li>
            <li class="list" data-filter="item12">Electrical Work</li>
            <li class="list" data-filter="item13">Summerhouse</li>
           </ul>
         </div>

         <div class="col-lg-12">
          <div class="gallery-wrapper row">

            <div class="col-lg-4 col-6 mb-4 image-item all-items item1">
              <a data-fancybox="gallery" data-src="images/gallery-01.jpg" data-caption="caption">
               <img src="images/gallery-01.jpg" alt="" class="img-fluid">
              </a>
            </div>

            <div class="col-lg-4 col-6 mb-4 image-item all-items item2">
              <a data-fancybox="gallery" data-src="images/gallery-02.jpg" data-caption="caption">
               <img src="images/gallery-02.jpg" alt="" class="img-fluid">
              </a>
            </div>

            <div class="col-lg-4 col-6 mb-4 image-item all-items item1 item12 item11">
              <a data-fancybox="gallery" data-src="images/gallery-03.jpg" data-caption="caption">
               <img src="images/gallery-03.jpg" alt="" class="img-fluid">
              </a>
            </div>

            <div class="col-lg-4 col-6 mb-4 image-item all-items item3 item5">
              <a data-fancybox="gallery" data-src="images/gallery-04.jpg" data-caption="caption">
               <img src="images/gallery-04.jpg" alt="" class="img-fluid">
              </a>
            </div>

            <div class="col-lg-4 col-6 mb-4 image-item all-items item9 item10">
              <a data-fancybox="gallery" data-src="images/gallery-05.jpg" data-caption="caption">
               <img src="images/gallery-05.jpg" alt="" class="img-fluid">
              </a>
            </div>

            <div class="col-lg-4 col-6 mb-4 image-item all-items item8 item7 item6 item12">
              <a data-fancybox="gallery" data-src="images/gallery-06.jpg" data-caption="caption">
               <img src="images/gallery-06.jpg" alt="" class="img-fluid">
              </a>
            </div>

          </div>
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
    
    @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
      Fancybox.bind('[data-fancybox]', {
            //
      });    
    </script>
    @endpush
  </div>