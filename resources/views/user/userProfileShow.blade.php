@extends('user.user-profile-layout.layout')

@section('main')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class=" rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        @include('user.user-profile-layout.sidebar')
        <div class="col-lg-9">
            <div class="card border-0 shadow mb-4">
                    <div class="card-body  p-4">
                        <h3 class="fs-4 mb-1">My Profile</h3>
                        <div class="mb-4">
                            <label for="name" class="mb-2">Name*</label>
                            <div class="container border border-1 p-2">{{ $user->name }}</div>
                        </div>
                        <div class="mb-4">
                            <label for="email" class="mb-2">Email*</label>
                            <div class="container border border-1 p-2">{{ $user->email }}</div>
                        </div>
                        <div class="mb-4">
                            <label for="usn" class="mb-2">USN*</label>
                            @if ($user->usn === null)
                            <div class="container border border-1 p-2"> Add your USN</div>
                            @else    
                            <div class="container border border-1 p-2">{{ $user->usn }}</div>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="branch" class="mb-2">Branch*</label>
                            @if ($user->branch === null)
                            <div class="container border border-1 p-2">Add your Branch</div>
                            @else    
                            <div class="container border border-1 p-2">{{ $user->branch }}</div>
                            @endif
                        </div>
                        <div class="mb-4">
                            <label for="mobile" class="mb-2">Mobile*</label>
                            @if ($user->mobile === null)
                            <div class="container border border-1 p-2">Add your Mobile Number</div>
                            @else    
                            <div class="container border border-1 p-2">{{ $user->mobile }}</div>
                            @endif
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection