@extends('adminlte::master')

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body', 'register-page')

@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
    @php( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' )
@endif

@section('body')
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ $dashboard_url }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a>
        </div>
        <div class="card">
            <div class="card-body register-card-body">
            <p class="login-box-msg">{{ __('adminlte::adminlte.register_message') }}</p>
            <form action="{{ $register_url }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="input-group mb-3">
                    <input type="text" name="prenom" class="form-control {{ $errors->has('prenom') ? 'is-invalid' : '' }}" value="{{ old('prenom') }}"
                           placeholder="Prenom" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>

                    @if ($errors->has('prenom'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('prenom') }}</strong>
                        </div>
                    @endif
                </div>

                <div class="input-group mb-3">
                    <input type="text" name="nom" class="form-control {{ $errors->has('nom') ? 'is-invalid' : '' }}" value="{{ old('nom') }}"
                           placeholder="Nom" autofocus>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>

                    @if ($errors->has('nom'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('nom') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}"
                           placeholder="{{ __('adminlte::adminlte.email') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                    @if ($errors->has('image'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('image') }}</strong>
                        </div>
                    @endif
                  </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                           placeholder="{{ __('adminlte::adminlte.password') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @if ($errors->has('password'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password_confirmation" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                           placeholder="{{ __('adminlte::adminlte.retype_password') }}">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @if ($errors->has('password_confirmation'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </div>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-flat">
                    {{ __('adminlte::adminlte.register') }}
                </button>
            </form>
            <p class="mt-2 mb-1">
                <a href="{{ $login_url }}">
                    {{ __('adminlte::adminlte.i_already_have_a_membership') }}
                </a>
            </p>
        </div>
        <!-- /.form-box -->
    </div><!-- /.register-box -->
@stop

@section('adminlte_js')
    <script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
    @stack('js')
    @yield('js')
@stop
