<div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12 mb-4 mb-lg-0 mb-md-0">
                    <div class="footer-logo">
                        <a wire:navigate href="{{ route('home_page') }}"><img src="{{ asset('assets/images/logo-2.png') }}"
                                alt="Logo" class="img-fluid"></a>
                    </div>
                    <div class="social-icon d-flex justify-content-lg-start align-items-center mt-4">
                        <a href="#" class="d-flex justify-content-center align-items-center me-3 facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 155.139 155.139" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <path
                                        d="M89.584 155.139V84.378h23.742l3.562-27.585H89.584V39.184c0-7.984 2.208-13.425 13.67-13.425l14.595-.006V1.08C115.325.752 106.661 0 96.577 0 75.52 0 61.104 12.853 61.104 36.452v20.341H37.29v27.585h23.814v70.761h28.48z"
                                        style="" fill="#c4c4c4" data-original="#010002" class=""
                                        opacity="1"></path>
                                </g>
                            </svg>
                        </a>
                        <a href="#" class="d-flex justify-content-center align-items-center me-3">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 409.61 409.61" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <path
                                        d="M307.205 0h-204.8C46.09 0 .005 46.085.005 102.4v204.81c0 56.3 46.085 102.4 102.4 102.4h204.8c56.315 0 102.4-46.1 102.4-102.4V102.4c0-56.315-46.085-102.4-102.4-102.4zm68.265 307.21c0 37.632-30.612 68.265-68.265 68.265h-204.8c-37.637 0-68.265-30.633-68.265-68.265V102.4c0-37.642 30.628-68.265 68.265-68.265h204.8c37.653 0 68.265 30.623 68.265 68.265v204.81z"
                                        fill="#c4c4c4" opacity="1" data-original="#000000" class=""></path>
                                    <circle cx="315.755" cy="93.865" r="25.6" fill="#c4c4c4" opacity="1"
                                        data-original="#000000" class=""></circle>
                                    <path
                                        d="M204.805 102.4c-56.566 0-102.4 45.839-102.4 102.4 0 56.54 45.834 102.41 102.4 102.41 56.55 0 102.4-45.87 102.4-102.41 0-56.561-45.85-102.4-102.4-102.4zm0 170.675c-37.699 0-68.265-30.566-68.265-68.275s30.566-68.265 68.265-68.265 68.265 30.556 68.265 68.265-30.566 68.275-68.265 68.275z"
                                        fill="#c4c4c4" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                        </a>

                        <a href="#" class="d-flex justify-content-center align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                viewBox="0 0 1226.37 1226.37" style="enable-background:new 0 0 512 512"
                                xml:space="preserve" class="">
                                <g>
                                    <path
                                        d="M727.348 519.284 1174.075 0h-105.86L680.322 450.887 370.513 0H13.185l468.492 681.821L13.185 1226.37h105.866l409.625-476.152 327.181 476.152h357.328L727.322 519.284zM582.35 687.828l-47.468-67.894-377.686-540.24H319.8l304.797 435.991 47.468 67.894 396.2 566.721H905.661L582.35 687.854z"
                                        fill="#c4c4c4" opacity="1" data-original="#000000" class=""></path>
                                </g>
                            </svg>
                        </a>


                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12 mb-4 mb-lg-0 mb-md-0">
                    <div class="footer-box clearfix">
                        <h4>Services</h4>
                        <ul class="list-50 clearfix">

                          @if ($services && $services->isNotEmpty())
                          @foreach ($services as $service)
                          <li><a wire:navigate href="{{ route('service_detail', $service->slug) }}">{{ $service->title }}</a>
                          </li>
                      @endforeach 
                            
                          @endif
                        

                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-12 mb-4 mb-lg-0 mb-md-0">
                    <div class="footer-box clearfix">
                        <h4>Quick Links</h4>
                        <ul class="clearfix">
                          <li><a wire:navigate href="{{route('home_page')}}">Home</a></li> 
                          <li><a wire:navigate href="{{route('about_us')}}">About</a></li>
                          <li><a wire:navigate href="{{route('gallery')}}">Gallery</a></li>
                          <li><a wire:navigate href="{{route('news')}}">News</a></li>
                          <li><a wire:navigate href="{{route('what_we_do')}}">What We do</a></li>
                          <li><a wire:navigate href="{{route('testimonials')}}">Testimonials</a></li>
                          <li><a wire:navigate href="{{route('services')}}">Services</a></li>
                          <li><a wire:navigate href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </div>

                </div>

                <div class="col-lg-3 col-md-3 col-12 mb-4 mb-lg-0 mb-md-0">
                    <div class="footer-box clearfix">
                        <h4>Address</h4>
                        <p class="mb-4">123 Greenfield Road<br>Essex, CM1 2AB<br>United Kingdom</p>
                        <a href="mailto:info@plymouth-property.co.uk"
                            class="mb-2 d-lg-block">info@plymouth-property.co.uk</a>
                        <a href="tel:+441234567890" class="mb-2">+44 123 456 7890</a>

                    </div>

                </div>


            </div>
        </div>

        <div class="footer-bottom-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div
                            class="footer-bottom-box mt-4 py-4 border-top border-dark d-flex align-items-center justify-content-between">
                            <p class="d-inline-block align-top mb-0">© <a href="#" class="">Plymouth
                                    Property Maintenance</a> 2025 | All Right Reserved.</p>
                            <ul class="d-inline-block align-top list-inline clearfix">
                                <li><a href="#">Terms and Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


</div>
