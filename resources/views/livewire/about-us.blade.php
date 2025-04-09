<div>
   <section class="section position-relative hero-section">
     <div class="hero-inner-banner-section d-block">
       <img src="{{asset('storage/'.$pageHeading->about_bg_image)}}" srcset="{{asset('storage/'.$pageHeading->about_bg_image)}} 300w, {{asset('storage/'.$pageHeading->about_bg_image)}} 600w, {{asset('storage/'.$pageHeading->about_bg_image)}} 900w, {{asset('storage/'.$pageHeading->about_bg_image)}} 1200w, {{asset('storage/'.$pageHeading->about_bg_image)}} 1500w" sizes="(max-width: 480px) 300px, (max-width: 768px) 600px, (max-width: 1024px) 900px, 1200px" alt="Image" class="w-100">
     </div>

     <div class="hero-slider-caption-wrapper banner-caption hero-slider-caption-wrapper-alt">
       <div class="container h-100">
         <div class="row h-100 d-flex justify-content-center justify-content-lg-center align-items-center">
           <div class="col-md-12">
             <div class="hero-content-inner text-center">
               <h3 class="text-uppercase text-white fs-4 medium-title mb-3 fw-semibold">{{$pageHeading->about_subtitle}}</h3>
               <h1>{{$pageHeading->about_title}}</h1>               
               
             </div>
           </div>
           
         </div>
       </div>
     </div>
   </section>    

   <section class="section position-relative who-are-section my-60 mt-0">
     <div class="container">
       <div class="row">
         <div class="col-lg-6 col-md-6 mb-4 mb-lg-0 mb-md-0">
           <div class="image-box-wrapper mt-100 mb-5">
             <img src="{{asset('storage/'.$pageHeading->ourstory_image)}}" srcset="{{asset('storage/'.$pageHeading->ourstory_image)}} 300w, {{asset('storage/'.$pageHeading->ourstory_image)}} 600w, {{asset('storage/'.$pageHeading->ourstory_image)}} 900w, {{asset('storage/'.$pageHeading->ourstory_image)}} 1200w, {{asset('storage/'.$pageHeading->ourstory_image)}} 1500w" sizes="(max-width: 480px) 300px, (max-width: 768px) 600px, (max-width: 1024px) 900px, 1200px" alt="Responsive Example Image">
           </div>
         </div>

         <div class="col-lg-5 col-md-6 offset-lg-1">
           <div class="content-box-wrapper mt-100">
             <div class="heading mb-4">
               <h4>{{$pageHeading->ourstory_subtitle}}</h4>
               <h2>{{$pageHeading->ourstory_title}}</h2>
             </div>
             {!! $pageHeading->ourstory_description !!}
             <a href="{{$pageHeading->btn_6_url}}" class="btn custom-btn mt-4">{{$pageHeading->btn_6}}</a>
           </div>
         </div>


       </div>
     </div>
   </section>

   <section class="section position-relative who-are-section-alt my-60 mt-0">
     <div class="container">
       <div class="row">
         <div class="col-lg-6 col-md-6 mb-4 mb-lg-0 mb-md-0 order-lg-2 order-md-2 offset-lg-1">
           <div class="image-box-wrapper image-box-wrapper-alt mb-5">
             <img src="{{asset('storage/'.$pageHeading->whychoose_image)}}" srcset="{{asset('storage/'.$pageHeading->whychoose_image)}} 300w, {{asset('storage/'.$pageHeading->whychoose_image)}} 600w, {{asset('storage/'.$pageHeading->whychoose_image)}} 900w, {{asset('storage/'.$pageHeading->whychoose_image)}} 1200w, {{asset('storage/'.$pageHeading->whychoose_image)}} 1500w" sizes="(max-width: 480px) 300px, (max-width: 768px) 600px, (max-width: 1024px) 900px, 1200px" alt="Responsive Example Image">
           </div>
         </div>

         <div class="col-lg-5 col-md-6 order-lg-1 order-md-1">
           <div class="content-box-wrapper">
             <div class="heading mb-4">
               <h4>{{$pageHeading->whychoose_subtitle}}</h4>
               <h2>{{$pageHeading->whychoose_title}}</h2>
             </div>
             <p>{!! $pageHeading->whychoose_description !!}</p>

             <div class="row mt-5">
               @if ($featuresSections && $featuresSections->isNotEmpty())
               @foreach ($featuresSections as $feature)
                  
                   <div class="d-flex flex-column flex-grow-1 col-6 col-md-6 col-xl-6 col-xxl-6 featured-box mb-4 featured-box-alt">
                       <div class="featured-box-wrapper">
                           <div class="featured-box-icon">
                               <img src="{{ asset('storage/' . $feature->image) }}"
                                   alt="{{ $feature->title }}">
                           </div>
                           <h4 class="text-dark">{{ $feature->title }}</h4>
                       </div>
                   </div>
               @endforeach

           @endif



                 
             </div>


             <a href="#" class="btn custom-btn mt-5">Get a Quote</a>
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
   
 </div>