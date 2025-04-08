<div>
   <section class="section position-relative hero-section">
     <div class="hero-inner-banner-section d-block">
       <img src="{{asset('assets/images/about-banner.jpg')}}" srcset="{{asset('assets/images/about-banner-768.jpg')}} 300w, {{asset('assets/images/about-banner-768.jpg')}} 600w, {{asset('assets/images/about-banner.jpg')}} 900w, {{asset('assets/images/about-banner.jpg')}} 1200w, {{asset('assets/images/about-banner.jpg')}} 1500w" sizes="(max-width: 480px) 300px, (max-width: 768px) 600px, (max-width: 1024px) 900px, 1200px" alt="Image" class="w-100">
     </div>

     <div class="hero-slider-caption-wrapper banner-caption hero-slider-caption-wrapper-alt">
       <div class="container h-100">
         <div class="row h-100 d-flex justify-content-center justify-content-lg-center align-items-center">
           <div class="col-md-12">
             <div class="hero-content-inner text-center">
               <h3 class="text-uppercase text-white fs-4 medium-title mb-3 fw-semibold">about Us</h3>
               <h1>Your Trusted Experts in<br>Property Maintenance</h1>               
               
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
             <img src="images/about-image.jpg" srcset="images/about-image-583.jpg 300w, images/about-image-583.jpg 600w, images/about-image-583.jpg 900w, images/about-image-583.jpg 1200w, images/about-image.jpg 1500w" sizes="(max-width: 480px) 300px, (max-width: 768px) 600px, (max-width: 1024px) 900px, 1200px" alt="Responsive Example Image">
           </div>
         </div>

         <div class="col-lg-5 col-md-6 offset-lg-1">
           <div class="content-box-wrapper mt-100">
             <div class="heading mb-4">
               <h4>OUR STORY</h4>
               <h2>Your Trusted Experts in Property Maintenance</h2>
             </div>
             <p>At Plymouth Property Maintenance Services, we take pride in delivering high-quality, reliable, and professional property maintenance solutions tailored to meet your needs. With years of experience in the industry, our skilled team specializes in a wide range of services.</p>
             <p>Our mission is to enhance and maintain the value, functionality, and aesthetic appeal of your property through expert craftsmanship and attention to detail.</p>
             <a href="#" class="btn custom-btn mt-4">Contact Us</a>
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
             <img src="images/about-02.jpg" srcset="images/about-02.jpg 300w, images/about-02.jpg 600w, images/about-02.jpg 900w, images/about-02.jpg 1200w, images/about-02.jpg 1500w" sizes="(max-width: 480px) 300px, (max-width: 768px) 600px, (max-width: 1024px) 900px, 1200px" alt="Responsive Example Image">
           </div>
         </div>

         <div class="col-lg-5 col-md-6 order-lg-1 order-md-1">
           <div class="content-box-wrapper">
             <div class="heading mb-4">
               <h4>why choose us</h4>
               <h2>Experience the Difference with Us!</h2>
             </div>
             <p>At Plymouth Property Maintenance Services, your property is our priority, and we are dedicated to bringing your ideas to life with precision, expertise, and care.</p>

             <div class="row mt-5">
               @if ($featuresSections && $featuresSections->isNotEmpty())
               @foreach ($featuresSections as $feature)
                  
                   <div class="d-flex flex-column flex-grow-1 col-6 col-md-6 col-xl-6 col-xxl-6 featured-box mb-4 featured-box-alt">
                       <div class="featured-box-wrapper">
                           <div class="featured-box-icon">
                               <img src="{{ asset('storage/' . $feature->image) }}"
                                   alt="{{ $feature->title }}">
                           </div>
                           <h4>{{ $feature->title }}</h4>
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