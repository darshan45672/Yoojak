<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4"
        style="background-image: url('{{ asset('front/images/bg_1.jpg') }}')">
        <div class="mt-5 container">
            <div class="mt-5 row align-items-end">
                <div class="mt-5 col-lg-7">
                    <h2 class="mt-5 mb-0">About Us</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="{{ route('home') }}">Home</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <span class="current">About Us</span>
        </div>
    </div>

    {{-- <div class="container pt-5 mb-5">
        <div class="row">
            <div class="col-lg-4">
                <h2 class="section-title-underline">
                    <span>Academics History</span>
                </h2>
            </div>
            <div class="col-lg-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, iure dolorum! Nam veniam tempore
                    tenetur aliquam architecto, hic alias quia quisquam, obcaecati laborum dolores. Ex libero cumque
                    veritatis numquam placeat?</p>
            </div>
            <div class="col-lg-4">
                <p>Nam veniam tempore tenetur aliquam
                    architecto, hic alias quia quisquam, obcaecati laborum dolores. Ex libero cumque veritatis numquam
                    placeat?</p>
            </div>
        </div>
    </div> --}}

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <img src="{{ asset('front/images/place.jpg') }}" alt="Image" class="img-fluid">
                </div>
                <div class="col-lg-5 ml-auto align-self-center">
                    <h2 class="section-title-underline mb-5">
                        <span>About Our Placement</span>
                    </h2>
                    <p class="text-justify">The Training & Placement Department is the one which initiates and conducts various placement related activities like training, placement drives etc. It has a central placement team with staff representatives from every technical department overseeing its activities. The student coordinators nominated act as an interface between the student group and staff placement coordinators.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section-bg style-1" style="background-image: url('{{ asset('front/images/hero_1.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-mortarboard"></span>
                    <h3>Our Philosphy</h3>
                    <p>In seeking understanding, fostering empathy, and embracing growth, we navigate the journey of life with purpose and grace.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-school-material"></span>
                    <h3>Academics Principle</h3>
                    <p>Through rigorous inquiry, disciplined study, and intellectual integrity, we uphold the pursuit of knowledge as a sacred duty.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-library"></span>
                    <h3>Key of Success</h3>
                    <p>Dedication, resilience, and a commitment to excellence unlock the doors to triumph in every endeavor.</p>
                </div>
            </div>
        </div>
    </div>

    @livewire('placement-faculties')

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
</div>