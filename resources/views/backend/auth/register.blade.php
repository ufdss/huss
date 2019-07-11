{{--@if(Helper::Setting('register') == true)--}}
<!DOCTYPE html>
<html lang="{{ __('en') }}" dir="{{ __('ltr') }}">
<head>
    @include('backend.partials.head')
</head>
<body>
<div class="app" id="app">
    <!-- ############ LAYOUT START-->
    <div class="center-block w-xxl w-auto-xs p-y-md">
        <div class="navbar">
            <div class="pull-center">
                <div>
                    <a class="navbar-brand">
                        <img src="{{ URL::to('backEnd/assets/images/logo.png') }}" alt=".">
                        <span class="hidden-folded inline">{{ __('control') }}</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="p-a-md box-color r box-shadow-z1 text-color m-a">
            <div class="m-b text-sm">
                {{ __('newUser') }}
            </div>
            <form role="form" method="POST" action="{{ route('backend.register.submit') }}">
                {{ csrf_field() }}

                @if ($errors->has('name'))
                    <div class="alert alert-warning">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                @if ($errors->has('username'))
                    <div class="alert alert-warning">
                        {{ $errors->first('username') }}
                    </div>
                @endif
                @if ($errors->has('email'))
                    <div class="alert alert-warning">
                        {{ $errors->first('email') }}
                    </div>
                @endif
                @if ($errors->has('password'))
                    <div class="alert alert-warning">
                        {{ $errors->first('password') }}
                    </div>
                @endif
                <div class="md-form-group">
                    <input id="name" type="text" class="md-input" name="name" value="{{ old('name') }}" required
                           autofocus>
                    <label>{{ __('fullName') }}</label>
                </div>
                <div class="md-form-group">
                    <input id="name" type="text" class="md-input" name="username" value="{{ old('username') }}" required
                           autofocus>
                    <label>{{ __('username') }}</label>
                </div>
                <div class="md-form-group">
                    <input id="email" type="email" class="md-input" name="email" value="{{ old('email') }}" required>

                    <label>{{ __('connectEmail') }}</label>
                </div>
                <div class="md-form-group">
                    <input id="password" type="password" class="md-input" name="password" required>
                    <label>{{ __('connectPassword') }}</label>
                </div>
                <div class="md-form-group">
                    <input id="password-confirm" type="password" class="md-input" name="password_confirmation" required>
                    <label>{{ __('confirmPassword') }}</label>
                </div>

                <button type="submit" class="btn primary btn-block p-x-md"><i
                            class="material-icons">&#xe7fe;</i> {{ __('createNewAccount') }}</button>
            </form>
        </div>

        <div class="p-v-lg text-center">
            <div>
                {{ __('signedInToControl') }}
                <a href="{{ url('/login') }}"  class="text-primary _600">{{ __('signIn') }}</a>
            </div>
        </div>
    </div>

    <!-- ############ LAYOUT END-->


</div>
@include('backend.partials.footer')
</body>
</html>
{{--@else--}}
    {{--<script>--}}
        {{--window.location.href = '{{url("/login")}}';--}}
    {{--</script>--}}
{{--@endif--}}

