@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="mx-auto w-50 my-5">
            <div class=" py-5">
                <div class="row">
                    <div class="mx-auto">
                        <img src="{{asset('images/key.png')}}" alt="logo" width="300">
                    </div>
                </div>
                <div class="">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row py-2">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                            <div class="row">
                                <button type="submit" class="btn btn-info w-25 mx-auto">
                                    {{ __('Login') }}
                                </button>


                            </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
