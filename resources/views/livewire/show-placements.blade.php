<main>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('{{ asset('front/images/bg_1.jpg') }}')">
        <div class="container mt-5">
            <div class="row align-items-end">
                <div class="mt-5 mb-5 col-lg-7">
                    <h2 class="mb-0">Placement</h2>
                    <p>Explore our comprehensive placement assistance program tailored to guide and support students toward fulfilling career opportunities.</p>
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
                @if ($placements->isNotEmpty())
                @foreach ($placements as $placement)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="course-1-item">
                        <figure class="thumnail">
                            <a href="{{ route('show-Placement') }}"><img src="{{ asset('storage/'.$placement->image) }}" alt="Image" class="img-fluid justify-content-center" style="height: 200px; width:200px"></a>
                            <div class="price">{{ $placement->package }}</div>
                            <div class="category">
                                <h3>{{ $placement->company_name }}</h3>
                            </div>
                        </figure>
                        <div class="course-1-content pb-4">
                            <h2>{{ $placement->job_role }}</h2>
                            <p class="desc mb-4">{{ $placement->short_desc }}</p>
                            <p class="desc mb-4"><b>Date: </b>{{ $placement->date}}</p>
                            <p><a target="blank" href="{{ $placement->link }}" class="btn btn-primary rounded-0 px-4">Register</a></p>
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