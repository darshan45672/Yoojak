@extends('user.user-profile-layout.layout')

@section('main')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('profile.show',Auth::user()->id) }}">Profile</a></li>
                    <li class="breadcrumb-item active">Profile Edit</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        @include('user.user-profile-layout.sidebar')
        <div class="col-lg-9">
            <div class="card border-0 shadow mb-4">
                <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="card-body  p-4">
                        <h3 class="fs-4 mb-1">My Profile</h3>
                        <div class="mb-4">
                            <label for="name" class="mb-2">Name*</label>
                            <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control"
                                value="{{ Auth::user()->name }}">
                            @error('name')
                            <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="mb-2">Email*</label>
                            <input type="text" name="email" id="email" placeholder="Enter Email" class="form-control"
                                value="{{ Auth::user()->email }}">
                                @error('email')
                                <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="mb-4">
                            <label for="usn" class="mb-2">USN*</label>
                            <input type="text" name="usn" id="usn" placeholder="Enter USN" class="form-control"
                                value="{{ Auth::user()->usn }}">
                                @error('usn')
                                <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                @enderror
                        </div>
                        <div class="mb-4">
                            <label for="branch" class="mb-2">Branch*</label>
                            <input type="text" name="branch" id="branch" placeholder="Branch" class="form-control"
                                value="{{ Auth::user()->branch }}">
                                @error('branch')
                            <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="mobile" class="mb-2">Mobile*</label>
                            <input type="text" name="mobile" id="mobile" placeholder="Mobile" class="form-control"
                                value="{{ Auth::user()->mobile }}">
                                @error('mobile')
                                <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                                @enderror
                        </div>
                    </div>
                    <div class="card-footer  p-4">
                        <button type="submit" name="submit" value="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>

            <div class="card border-0 shadow mb-4">
                <div class="card-body p-4">
                    <h3 class="fs-4 mb-1">Change Password</h3>
                    <div class="mb-4">
                        <label for="" class="mb-2">Old Password*</label>
                        <input type="password" placeholder="Old Password" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="" class="mb-2">New Password*</label>
                        <input type="password" placeholder="New Password" class="form-control">
                    </div>
                    <div class="mb-4">
                        <label for="" class="mb-2">Confirm Password*</label>
                        <input type="password" placeholder="Confirm Password" class="form-control">
                    </div>
                </div>
                <div class="card-footer  p-4">
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection