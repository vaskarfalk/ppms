<div class="thank-you">
    @section('meta')
    <x-meta-tags title="thnk" description=""
        ogTitle="" ogDescription=""
        ogUrl="{{ url()->current() }}" canonical="{{ url()->current() }}" />
@endsection
<div class="text-center py-20 my-60">
    <img src="{{ asset('assets/images/check.gif') }}" class="img-fluid" alt="check">
    <div class="text-center">
        <h1>Thank You!</h1>
        <h6>Your form has been submitted successfully.</h6>
        <a wire:navigate href="{{ route('home_page') }}" class="btn custom-btn mt-4">Go Back Home</a>
    </div>
</div>

 
</div>
