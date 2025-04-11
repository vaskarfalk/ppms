<div class="not-found">
    @section('meta')
    <x-meta-tags title="" description=""
        ogTitle="" ogDescription=""
        ogUrl="{{ url()->current() }}" canonical="{{ url()->current() }}" />
@endsection

    <div class="text-center py-20 my-60">
        <img src="{{ asset('assets/images/404.png') }}" class="img-fluid" alt="404">
        <div class="text-center mt-3">
            <h1 class="text-danger"><Strong class="text-black">Oops!</Strong> Page not found.</h1>
            <a wire:navigate href="{{ route('home_page') }}" class="btn custom-btn mt-4">Go Back Home</a>
        </div>
    </div>

</div>
