@extends('layouts.app')

@section('content')
<div class="card login m-3">
<div class="text-center mt-4">
        <h2>Logo</h2>
</div>
    <div class="login-form">
    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        
                        <div class="form-group">
            <label for="">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
                        <div class="form-group">
            <label for="">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-group">
            <label for="">Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

        </div>
        <input type="submit" id="register" class="mt-3 btn w-100 text-white font-weight-bold" style="background-color: #ffcc00;" value="Reset Password">
                    </form>             
</div></div>
@endsection
