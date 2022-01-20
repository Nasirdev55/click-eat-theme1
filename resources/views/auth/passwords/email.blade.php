@extends('layouts.app')

@section('content')
<div class="card login m-3">
<div class="text-center mt-4">
        <h2>Logo</h2>
</div>
    <div class="login-form">
     @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" class="mb-5">
                        @csrf

                        <div class="form-group">
                        <label for="">Email</label>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <input type="submit" id="register" class="mt-3 btn w-100 text-white font-weight-bold" style="background-color: #ffcc00;" value="Send Password Reset Link">

                    </form>              
</div></div>
@endsection
