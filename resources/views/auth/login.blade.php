@extends('layout')

@section('conteudo')
<div class="container">
        <div class="form-group">
            <div class="col-md-offset-3 col-lg-6 text-center">
                <div class="card-header">{{ __('Login') }}</div>
                   <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-offset-1 col-sm-10">
                            <label for="email" class="control-label control-label-custom text-left">{{ __('E-Mail Address') }}</label><br><br>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} " name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                                <div class="col-md-offset-1 col-sm-10">
                            <label for="password" class="control-label control-label-custom text-left">{{ __('Password') }}</label><br><br>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-offset-1 col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-center" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-offset-1 col-sm-10">
                                <button type="submit" class="btn btn-default btn-default-custom">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
               
           
        </div>
    </div>
</div>
@endsection
