<div class="modal-dialog">
    <div class="login-modal hide-scrollbar p-4 pt-5">
        <button class="outline-0 border-0 close-btn close-hover p-1 lighting-hover parent-right-top" data-bs-dismiss="modal">
            <svg width="25px" height="25px" color="#fff">
                <use xlink:href="{{ asset('images/icons/close.svg') }}#close"></use>
            </svg>
        </button>
        <form class="login-form text-white-50" action="{{ route('login.store') }}" method="Post">
            @csrf
            <span class="fs-2 fw-bolder text-center text-white mb-2" style="font-family:cabinet;">Welcome to the
                Laracast
            </span>
            @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
                @endforeach
            </div>
            @endif
            <input class="login-input bg-light-blue border-radius-1 px-3 flex-shrink-0" id="username" name="username" type="text"
                placeholder="{{__('Username')}}" autofocus>

            <div class="border-radius-1 position-relative flex-shrink-0 password-box">
                <input class="login-input border-radius-1 bg-light-blue px-3 mb-1 w-100" name="password" id="login-password"
                    type="password" placeholder="{{__('Password')}}">
                <div class="position-absolute parent-right">
                    <input type="checkbox">
                    <span class="mark d-none"></span>
                </div>
            </div>

            <div class="d-flex flex-row">
                <div class="me-auto">
                    <input class="form-check-input" type="checkbox" id="remember-me" name="remember">
                    <label class="form-check-label underline-hover fs-6" for="remember-me">{{__('Remember me')}}</label>
                </div>
                <a href="{{ route('auth.reset-password') }}" class="underline-hover">{{__("Forgot password?")}} </a>
            </div>

            <button type="submit" class="btn submit btn-primary fs-6 w-100 login-button" id="submit">
                {{ __('SIGN IN')}}
            </button>

            <div class="line">
                <span class="text-white-50">or</span>
            </div>

            <a href="{{route('redirect')}}" class="btn btn-outline-warning login-google-button">
                <span class="align-self-center">{{ __('Continue with Google')}}</span>
            </a>

            <a href="{{route('redirect')}}" class="btn btn-outline-primary login-facebook-button">
                <span class="align-self-center">{{ __('Continue with Facebook')}}</span>
            </a>
        </form>
    </div>
</div>
