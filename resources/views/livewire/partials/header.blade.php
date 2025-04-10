<div>
    <header class="header">
        <div class="container">
          <div class="row">
            <div class="header-item item-left">
              <div class="logo"> <a wire:navigate href="{{route('home_page')}}"><img src="{{asset('assets/images/logo-2.png')}}" alt="Logo" class="img-fluid"></a> </div>
            </div>
            <!-- menu start here -->
            <div class="header-item item-center navigation-wrapper">
              <div class="menu-overlay"></div>
              <nav class="menu">
                <div class="mobile-menu-head">
                  <div class="go-back"><i class="fa fa-angle-left"></i></div>
                  <div class="current-menu-title"></div>
                  <div class="mobile-menu-close">&times;</div>
                </div>
                <ul class="menu-main">                                                                           
                  <li><a wire:navigate href="{{route('home_page')}}" class="{{ request()->routeIs('home_page') ? 'active' : '' }}">Home</a></li> 
                  <li><a wire:navigate href="{{route('about_us')}}" class="{{ request()->routeIs('about_us') ? 'active' : '' }}">About</a></li>
                  <li><a wire:navigate href="{{route('gallery')}}" class="{{ request()->routeIs('gallery') ? 'active' : '' }}">Gallery</a></li>
                  <li><a wire:navigate href="{{route('news')}}" class="{{ request()->routeIs('news') ? 'active' : '' }}">News</a></li>
                  <li><a wire:navigate href="{{route('what_we_do')}}" class="{{ request()->routeIs('what_we_do') ? 'active' : '' }}">What We do</a></li>
                  <li><a wire:navigate href="{{route('testimonials')}}" class="{{ request()->routeIs('testimonials') ? 'active' : '' }}">Testimonials</a></li>
                  <li><a wire:navigate href="{{route('services')}}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a></li>
                  <li><a wire:navigate href="{{route('contact')}}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                </ul>
              </nav>
      
              <div class="top-slogan-text">24/7 All Suburbs</div>
            </div>
            <!-- menu end here -->
            <div class="header-item item-right"> 
              <div class="header-contact-details">
                <div class="header-contact header-float justify-content-start d-flex">
                  <a class="d-flex align-items-center text-start icon-btn sub-title-btn" target="_blank" href="https://wa.me/{{$pageHeading->whatsapp_number}}">
                    <i class="btn-svg-icon">
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g data-name="Layer 2"><path d="M256 30a226.06 226.06 0 0 1 88 434.25 226.06 226.06 0 0 1-176-416.5A224.5 224.5 0 0 1 256 30m0-30C114.62 0 0 114.62 0 256s114.62 256 256 256 256-114.62 256-256S397.38 0 256 0z" fill="#259e3a" opacity="1" data-original="#000000" class=""></path><path d="M330.69 393.87c-14.87-1-35.83-6.13-56.29-13.45-72.14-25.82-142.53-94.61-157.49-190.83-2.66-17.13.14-32.78 13.12-45.52 4.35-4.26 8.22-9 12.47-13.36 16-16.47 39.38-16.89 55.95-1.07 5.25 5 10.59 9.93 15.71 15.09a38.07 38.07 0 0 1 1.37 52.79c-4 4.44-8.2 8.66-12.42 12.87-4.61 4.6-10.34 7.24-16.49 9.16-7.59 2.38-9 5.56-5.55 12.81q32.7 68.49 102.37 98.63c6.21 2.68 9.08 1.47 11.58-4.69 5.48-13.51 15.53-23.36 27.08-31.32 13.07-9 31.79-7 44.17 3.64a263.23 263.23 0 0 1 19.43 18.5 38.22 38.22 0 0 1-.05 52.25c-1.93 2.1-3.92 4.15-5.77 6.31-11.14 12.95-25.27 19.01-49.19 18.19z" fill="#259e3a" opacity="1" data-original="#000000" class=""></path></g></g></svg>
                    </i>
                    <div class="sub-title-btn-inner d-none d-lg-block">
                      <span>Call Us. All Areas</span>
                    {{$pageHeading->whatsapp_number}}
                    </div>
                  </a>
      
                  <div class="top-devider"></div>
      
                  <a href="#" class="btn custom-btn green-btn">Book Online</a>
      
      
      
                </div>
              </div>
      
              
              
              <!-- mobile menu trigger -->
              <div class="mobile-menu-trigger"><span></span> </div>
            </div>
          </div>
        </div>
      </header>
      
</div>
