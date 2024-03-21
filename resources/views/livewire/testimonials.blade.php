<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="owl-slide owl-carousel d-flex align-items-center">
        @foreach ($testimonials as $testimonial)
        <div class="ftco-testimonial-1">
            <div class="ftco-testimonial-vcard d-flex align-items-center mb-4">
                <img src="{{ asset('storage/' .$testimonial->image) }}" alt="Image" class="img-fluid mr-3">
                <div>
                    <h3>{{ $testimonial->name}}</h3>
                    <span>{{ $testimonial->designation }}</span>
                </div>
            </div>
            <div class="col-8">
                <p>{!! $testimonial->content !!}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>