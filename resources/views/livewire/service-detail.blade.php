<div>
    Service Detail {{$service->id}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 mb-4 mb-lg-0 mb-md-0">
                <div class="service-detail-box">
                    <h2>{{$service->title}}</h2>
                    <p>{{$service->content}}</p>

                    @foreach ($service->images as $img)
                    <div class="service-image">
                        <img src="{{ asset('storage/' . $img['image']) }}" alt="{{ $service->title }}" class="img-fluid">
                    </div>
                @endforeach
                </div>
            </div>
        </div>
</div>
