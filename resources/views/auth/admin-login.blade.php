@extends('layout.fixas')

@section('conteudo')
<main class="page landing-page" style="margin-top: -55px;">
        <div class="row text-justify d-inline mx-auto" style="width: 985;height: 450;">
            <div style="background-image: url(&quot;/img/knowledge.jpg&quot;);height: 650px;background-position: center;background-size: cover;background-repeat: no-repeat;">
                <div class="d-flex justify-content-center align-items-center" style="height: inherit;min-height: initial;width: 100%;position: absolute;left: 0;background-color: rgba(30,41,99,0.25);">
                    <div class="d-flex align-items-center order-12" style="height:200px;">
                        <div class="container">
                            <div class="login-clean">
                                 <form method="POST" action="{{ route('admin.login.submit') }}">
                                    @csrf
                                    <h2 class="sr-only">Login Form</h2>
                                    <div class="illustration">
                                        <ion-icon name="contact"></ion-icon>
                                    </div>
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Senha" name="password" required>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                                    </div>
                                    <a style = "font-size: 1em;" href="#" class="forgot">Esqueceu sua senha?</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
@endsection
