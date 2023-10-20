@extends('layouts.app')

@section('content')
<section class="min-h-[90vh] px-5">
    <div class="bg-white text-center border-2 rounded-xl max-w-sm mt-[15vh] mx-auto p-5 space-y-5">
        <img  class="mx-auto" src="{{asset('images/main/logo.png')}}" alt="">
        <div class="text-xl">{{ __('Verify Your Email Address') }}</div>
        <div class="">
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }},
            <form class="d-inline" method="POST" action="{{ route('verification.send') }}">
                @csrf
                <button type="submit" class="btn btn-link bg-[rgb(0,200,255)] text-white hover:bg-[rgb(5,217,235)] rounded-2xl px-3 py-3 my-5">{{ __('Click Here To Request Another') }}</button>
            </form>
        </div>
    </div>
</section>
@endsection
