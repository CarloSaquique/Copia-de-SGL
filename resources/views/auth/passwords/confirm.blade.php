@extends('layouts.app')

@section('content')
<section class="min-h-[90vh] px-5">
    <div class="bg-white text-center border-2 rounded-xl max-w-sm mt-[15vh] mx-auto p-5 space-y-5">
        <img  class="mx-auto" src="{{asset('images/main/logo.png')}}" alt="">
        <div class="card-header">{{ __('Confirm Password') }}</div>

        <div class="card-body">
            {{ __('Please confirm your password before continuing.') }}

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="row mb-3">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="rounded-xl form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn bg-[rgb(0,200,255)] text-white hover:bg-[rgb(5,217,235)] rounded-2xl px-3 py-3 my-5">
                            {{ __('Confirm Password') }}
                        </button>
                        <br>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link text-sm" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection
