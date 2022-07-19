<div class="modal-dialog ">
    <form class="p-4 pt-5 login-form" action="{{ route('login.store') }}" method="Post">
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
        <input class="login-input bg-light border-1 border-radius-1 px-3" id="username" name="username" type="text" placeholder="{{__('Username')}}" autofocus>

        <input class="login-input bg-light border-1 border-radius-1 px-3 mb-1" name="password" id="password" type="password" placeholder="{{__('Password')}}">

        <div>
            <input class="form-check-input" type="checkbox" id="remember-me" name="remember">
            <label class="form-check-label underline-hover fs-6" for="remember-me">{{__('Remember me')}}</label>
        </div>
        <button class="btn submit btn-primary fs-6 w-100 login-button" id="submit">
            {{ __('SIGN IN')}}
        </button>

        <div class="line">
            <span>or</span>
        </div>

        <button class="btn btn-outline-warning login-google-button">
            <span>{{ __('Continue with Google')}}</span>
        </button>

        <button class="btn btn-outline-primary login-facebook-button">
            <span>{{ __('Continue with Facebook')}}</span>
        </button>
    </form>

</div>