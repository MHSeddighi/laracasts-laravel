<div class="modal-dialog">
    <form class="p-4 pt-5 login-form  overflow-y-auto" action="{{ route('login.store') }}" method="Post">
        @csrf
        <span class="fs-2 fw-bolder text-center" style="font-family:cabinet;">Welcome to the
            Laracast
        </span>
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <div>{{ $error }}</div>
            @endforeach
        </div>
        @endif
        <input class="login-input bg-light border-radius-1 px-3" id="username" name="username" type="text"
            placeholder="{{__('Username')}}" autofocus>

        <div class="border-radius-1 position-relative overflow-hidden">
            <input class="login-input border-radius-1 bg-light px-3 mb-1 w-100" name="password" id="password"
                type="password" placeholder="{{__('Password')}}">
            <input class="position-absolute parent-right border-radius-2" type="checkbox" onclick="toggleVisibility()">
        </div>

        <div class="d-flex flex-row">
            <div class="me-auto">
                <input class="form-check-input" type="checkbox" id="remember-me" name="remember">
                <label class="form-check-label underline-hover fs-6" for="remember-me">{{__('Remember me')}}</label>
            </div>
            <a href="#" class="underline-hover">{{__("Forgot password?")}} </a>
        </div>

        <button class="btn submit btn-primary fs-6 w-100 login-button" id="submit">
            {{ __('SIGN IN')}}
        </button>

        <div class="line">
            <span>or</span>
        </div>

        <a href="{{route('redirect')}}" class="btn btn-outline-warning login-google-button">
            <span class="align-self-center">{{ __('Continue with Google')}}</span>
        </a>

        <a href="{{route('redirect')}}" class="btn btn-outline-primary login-facebook-button">
            <span class="align-self-center">{{ __('Continue with Facebook')}}</span>
        </a>
    </form>
    <script>
        function toggleVisibility() {
            element = document.getElementById('password');
            if (element.type == "password") {
                element.type = "text";
            } else {
                element.type = "password";
            }
        }
    </script>
</div>