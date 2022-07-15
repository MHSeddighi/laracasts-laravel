<div class="modal-dialog login-form">
    <form class="p-4 pt-5" action="{{ route('login.store') }}" method="Post" style="position: fixed;
        left:50%;
        transform:translateX(-50%);
        border-radius:15px;
        width:25%;
        height:80%;
        display: flex;
        flex-direction: column;
        pointer-events: auto;
        background:#fff;
        border: 1px solid rgba(0, 0, 0, 0.2);
        outline: 0;">

        @csrf

        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <div>{{ $error }}</div>
            @endforeach
        </div>
        @endif
        <input class="login-input bg-light border-1 border-radius-1 px-3" id="username" name="username" type="text" placeholder="{{__('Username')}}" autofocus><br><br>

        <input class="login-input bg-light border-1 border-radius-1 px-3 mb-1" name="password" id="password" type="password" placeholder="{{__('Password')}}"><br>

        <div>
            <input class="form-check-input" type="checkbox" id="remember-me" name="remember">
            <label class="form-check-label underline-hover fs-6" for="remember-me">{{__('Remember me')}}</label><br><br>
        </div>
        <button class="btn submit btn-primary fs-6 w-100" id="submit">
            {{ __('SIGN IN')}}
        </button>
        <hr size="3" style="width:100%">

        <button class="ps-3 mb-3 btn btn-outline-warning">
            <img  class="me-1 my-auto" src="images/google.svg" width="15px" height="15px">
            <span>{{ __('Continue with Google')}}</span>
        </button>

        <button class="ps-3 btn btn-outline-primary">
            <img  class="me-1 my-auto" src="images/facebook.svg" width="15px" height="15px">
            <span>{{ __('Continue with Facebook')}}</span>
        </button>
    </form>

</div>