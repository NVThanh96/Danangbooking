<!doctype html>
<html lang="en">
<head>
@include('views.layouts.header')
</head>
<body class="bg-light">
@include('views.layouts.menu')

<div class="container">
    <div  class="row justify-content-center">
            <div style="margin: 20% 30%" class="card">
                <div class="card-header">{{ __('OTP Verification')}}</div>
                {{--@dd($customer->id)--}}
                <div class="card-body">
                    <form method="POST" action="{{ route('verify-otp') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="otp" class="col-md-8 col-form-label text-md-right">{{ __('Enter your OTP') }}</label>

                            <div class="col-md-12">
                                <input id="otp" type="text" class="form-control @error('otp') is-invalid @enderror" name="otp" value="{{ old('otp') }}" required autocomplete="off" autofocus>

                                @error('otp')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Verify') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
