@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        
                        @csrf


                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Personal Information</h5>
    
                                
    
                                <div class="row pt-3">
                                    <div class="col-6">
                                        <label for="first_name" class="form-label">First Name</label>
                                        <input type="text" 
                                            class="form-control @error('first_name') is-invalid @enderror" id="first_name"
                                            name="first_name" />
                                        <div id="Help" class="form-text">User First Name</div>
                                        @error('first_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="last_name" class="form-label">Last Name</label>
                                        <input type="text" 
                                            class="form-control @error('last_name') is-invalid @enderror" id="last_name"
                                            name="last_name" />
                                        <div id="Help" class="form-text">User Last Name</div>
                                        @error('last_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
    
                                <div class="row pt-3">
                                    <div class="col-6">
                                        <label for="gender" class="form-label">Gender</label>
                                        <div class="form-check">
                                            <input class="form-check-input @error('gender') is-invalid @enderror" type="radio"
                                                name="gender" id="gender-male" value="male"
                                                >
                                            <label class="form-check-label" for="gender-male">
                                                Male
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input @error('gender') is-invalid @enderror" type="radio"
                                                name="gender" id="gender-female" value="female"
                                                >
                                            <label class="form-check-label" for="gender-female">
                                                Female
                                            </label>
                                            @error('gender')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="birthday" class="form-label">Birthday</label>
                                        <input type="date" class="form-control" id="birthday" name="birthday"
                                             />
                                        <div id="Help" class="form-text"></div>
                                    </div>
    
                                    <div class="col mt-3">
                                        <label for="bio" class="form-label">Bio</label>
                                        <textarea class="form-control" id="bio" name="bio"></textarea>
                                        <div id="bioHelp" class="form-text">User Bio</div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Address</h5>
    
                                <div class="row">
                                    <div class="col-6">
                                        <label for="address_1" class="form-label">Address 1</label>
                                        <input type="text" 
                                            class="form-control @error('address_1') is-invalid @enderror" id="address_1"
                                            name="address_1" />
                                        <div id="Help" class="form-text">Address 1</div>
                                        @error('address_1')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="address_2" class="form-label">Address 2</label>
                                        <input type="text" 
                                            class="form-control" id="address_2" name="address_2" />
                                        <div id="Help" class="form-text">Address 2</div>
                                    </div>
                                </div>
    
                                <div class="row pt-3">
                                    <div class="col-6">
                                        <label for="city" class="form-label">City</label>
                                        <input type="text" 
                                            class="form-control @error('city') is-invalid @enderror" id="city" name="city" />
                                        <div id="cityHelp" class="form-text">User City</div>
                                        @error('city')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="postcode" class="form-label">Post Code</label>
                                        <input type="text" 
                                            class="form-control @error('postcode') is-invalid @enderror" id="postcode"
                                            name="postcode" />
                                        <div id="postcodeHelp" class="form-text">User Post Code</div>
                                        @error('postcode')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
    
                                <input type="hidden" name="county" id="county" value="LK">
    
                                <div class="row pt-3">
                                    <div class="col-6">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text"  class="form-control"
                                            id="phone" name="phone" />
                                        <div id="phoneHelp" class="form-text"></div>
                                    </div>
                                    <div class="col-6">
                                        <label for="mobile" class="form-label">Mobile</label>
                                        <input type="text" 
                                            class="form-control @error('mobile') is-invalid @enderror" id="mobile"
                                            name="mobile" />
                                        <div id="mobileHelp" class="form-text"></div>
                                        @error('mobile')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
    
                            </div>
    
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
