<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="hero-slide owl-carousel site-blocks-cover">
        <div class="intro-section" style="background-image: url('{{ asset('front/images/hero_1.jpg') }}');">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                <h1>Yoojak</h1>
              </div>
            </div>
          </div>
        </div>
  
        <div class="intro-section" style="background-image: url('{{ asset('front/images/hero_1.jpg') }}');">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                <h1>You Can Learn Anything</h1>
              </div>
            </div>
          </div>
        </div>
  
      </div>
      
      <div class="site-section">
        <div class="container">
          <div class="row mb-5 justify-content-center text-center">
            <div class="col-lg-4 mb-5">
              <h2 class="section-title-underline mb-5">
                <span>Why Academics Works</span>
              </h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
  
              <div class="feature-1 border">
                <div class="icon-wrapper bg-primary">
                  <span class="flaticon-mortarboard text-white"></span>
                </div>
                <div class="feature-1-content">
                  <h2>Personalize Learning</h2>
                  <p>We offer personlised training to students to perform well in their placements</p>
                  <p><a href="https://ajiet.edu.in/pages/placement.php" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
              <div class="feature-1 border">
                <div class="icon-wrapper bg-primary">
                  <span class="flaticon-school-material text-white"></span>
                </div>
                <div class="feature-1-content">
                  <h2>Trusted Courses</h2>
                  <p>We offer trusted courses to our students to perform well in their placements.</p>
                  <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
                </div>
              </div> 
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
              <div class="feature-1 border">
                <div class="icon-wrapper bg-primary">
                  <span class="flaticon-library text-white"></span>
                </div>
                <div class="feature-1-content">
                  <h2>Tools for Students</h2>
                  <p>We offer personlised training to students to perform well in their placements</p>
                  <p><a href="#" class="btn btn-primary px-4 rounded-0">Learn More</a></p>
                </div>
              </div> 
            </div>
          </div>
        </div>
      </div>

      @include('includes.placedStudents')
  
      @livewire('about-us')
  
      <!-- // 05 - Block -->
    <div class="site-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-lg-4">
              <h2 class="section-title-underline">
                <span>Testimonials</span>
              </h2>
            </div>
          </div>
          
          @livewire('testimonials')
          
        </div>
      </div>
      
      <div class="section-bg style-1" style="background-image: url('images/hero_1.jpg');">
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

      {{-- @include('includes.placementUpdate') --}}
  
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
      {{-- @include('includes.footer') --}}
    </div>
    <!-- .site-wrap -->
</div>
