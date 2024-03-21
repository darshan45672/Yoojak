<div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <p class="mb-4"><img src="{{ asset('front/images/logo.png')}}" alt="Image" class="img-fluid"></p>
          <p>Stay connected and explore more with our latest updates, resources, and social media links in the footer below.</p>  
          <p><a href="https://ajiet.edu.in/">Learn More</a></p>
        </div>
        <div class="col-lg-3">
          <h3 class="footer-heading"><span>Our College</span></h3>
          <ul class="list-unstyled">
              <li><a href="">Our Institution</a></li>
              <li><a href="{{ route('show-Placement') }}">Our Placements</a></li>
              <li><a href="{{ route('show-PlacedStudent') }}">Our Placed Students</a></li>
              <li><a href="{{ route('show-PlacedStudent') }}">Our Students</a></li>
          </ul>
        </div>
        <div class="col-lg-3">
            <h3 class="footer-heading"><span>Our Branches</span></h3>
            <ul class="list-unstyled">
                <li><a href="#">Computer Science &amp; Engineering</a></li>
                <li><a href="#">Information Science &amp; Engineering</a></li>
                <li><a href="#">Electronics &amp; Communication Engineering</a></li>
                {{-- <li><a href="#">Artificial &amp; Machine Learning Engineering</a></li>
                <li><a href="#">Artificial &amp; Data Science Engineering</a></li>
                <li><a href="#">IoT, Cybersecurity &amp; Blockchain Engineering</a></li> --}}
            </ul>
        </div>
        <div class="col-lg-3">
            <h3 class="footer-heading"><span>Contact</span></h3>
            <ul class="list-unstyled">
                <li><a href="{{ route('contact') }}">Help Center</a></li>
                <li><a href="#">Support Community</a></li>
                <li><a href="#">Press</a></li>
                <li><a href="#">Share Your Story</a></li>
                <li><a href="#">Our Supporters</a></li>
            </ul>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <div class="copyright">
              <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Portal is designed by <a href="#" target="_blank" >DevNation</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>