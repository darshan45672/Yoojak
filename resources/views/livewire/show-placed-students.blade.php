<main>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4"
        style="background-image: url('{{ asset('front/images/bg_1.jpg') }}')">
        <div class="container mt-5">
            <div class="row align-items-end">
                <div class="mt-5 mb-5 col-lg-7">
                    <h2 class="mb-0">Placed Students</h2>
                    <p>Discover the success stories of our alumni, thriving in diverse fields worldwide, a testament to our commitment to fostering excellence.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="{{ route('home') }}">Home</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <span class="current">Placement</span>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                @if ($placedStudents->isNotEmpty())
                @foreach ($placedStudents as $placedStudent)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                            <a href="course-single.html"><center><img src="{{ asset('storage/' .$placedStudent->image) }}" alt="Image"
                                    class="img-fluid" style="height: 200px; width:200px"></center></a>
                            <div class="price">{{ $placedStudent->package }}</div>
                            <div class="category text-center">
                                <h3>{{ $placedStudent->company }}</h3>
                            </div>
                        </figure>
                        <div class="course-1-content pb-4">
                            <h2>{{ $placedStudent->name }} <br> <span class="p-5">{{ $placedStudent->usn }}</span></h2>
                            <p>{{ $placedStudent->branch }}</p>
                            <p class="desc mb-4">{{ $placedStudent->short_desc }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>

    <div class="site-section ftco-subscribe-1" style="background-image: url('{{ asset('front/images/bg_1.jpg') }}')">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h2>Subscribe to us!</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,</p>
                </div>
                <div class="col-lg-5">
                    <form action="" class="d-flex">
                        <input type="text" class="rounded form-control mr-2 py-3" placeholder="Enter your email">
                        <button class="btn btn-primary rounded py-3 px-4" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>