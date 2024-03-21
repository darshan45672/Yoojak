<main>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4"
        style="background-image: url('{{ asset('front/images/bg_1.jpg') }}')">
        <div class="mt-5 container">
            <div class="mt-5 row align-items-end">
                <div class=" mt-5 col-lg-7">
                    <h2 class=" mt-5 mb-0">Contact</h2>
                    <p>Have a question, suggestion, or simply want to connect? Reach out to us; we're here to listen and assist.</p>
                </div>
            </div>
        </div>
    </div>


    <div class="custom-breadcrumns border-bottom">
        <div class="container">
            <a href="{{ route('home') }}">Home</a>
            <span class="mx-3 icon-keyboard_arrow_right"></span>
            <span class="current">Contact</span>
        </div>
    </div>

    <div class="site-section">
        <form wire:submit='submit'>
            <div class="container ">
                <div class="container justify-content-center ">
                    @if (session('sucess'))
                    <div class="alert alert-sucess border border-success col-md-6 text-center">{{
                        session('sucess') }}</div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="fname">First Name</label>
                        <input wire:model='fname' type="text" name="fname" id="fname" class=" @error('fname')
                            is-invalid
                        @enderror form-control form-control-lg">
                        @error('fname')
                        <p class="invalid-feedback"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="lname">Last Name</label>
                        <input wire:model='lname' name="lname" type="text" id="lname" class="@error('lname')
                            is-invalid
                        @enderror form-control form-control-lg">
                        @error('lname')
                        <p class="invalid-feedback"> {{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label for="email">Email Address</label>
                        <input wire:model='email' name="email" type="email" id="email" class="@error('email')
                            is-invalid
                        @enderror form-control form-control-lg">
                        @error('email')
                        <p class="invalid-feedback"> {{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="tel">Tel. Number</label>
                        <input wire:model='tel' name="tel" type="tel" id="tel" class="@error('tel')
                            is-invalid
                        @enderror form-control form-control-lg">
                        @error('tel')
                        <p class="invalid-feedback"> {{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="submit">Subject</label>
                        {{-- <textarea name="message" wire:model='message' id="message" cols="30" rows="10"
                            class="form-control"></textarea> --}}
                        <input wire:model='subject' name="subject" type="subject" id="subject" class="@error('subject')
                            is-invalid
                        @enderror form-control form-control-lg">
                        @error('subject')
                        <p class="invalid-feedback"> {{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="message">Message</label>
                        <textarea name="message" wire:model='message' id="message" cols="30" rows="10"
                            class="form-control"></textarea>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <input type="submit" value="Send Message" class="btn btn-primary btn-lg px-5">
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="section-bg style-1" style="background-image: url('{{ asset('front/images/hero_1.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-mortarboard"></span>
                    <h3>Our Philosphy</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat
                        quis delectus ea? Dolore, amet reprehenderit.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-school-material"></span>
                    <h3>Academics Principle</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat
                        quis delectus ea?
                        Dolore, amet reprehenderit.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                    <span class="icon flaticon-library"></span>
                    <h3>Key of Success</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis recusandae, iure repellat
                        quis delectus ea?
                        Dolore, amet reprehenderit.</p>
                </div>
            </div>
        </div>
    </div>
</main>