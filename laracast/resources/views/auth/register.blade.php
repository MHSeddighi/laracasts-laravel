<div class="modal-dialog">
    <div class="card p-4 border-radius-2 register-form">
        <form action="{{ route('register') }}" method="Post">
            <div class="text-center fs-3 mb-3" style="font-family:cabinet;">
                {{__('Create account')}}
            </div>
            @csrf

            @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                <div>{{ $error }}</div>
                @endforeach
            </div>
            @endif
            <label class="col-md-4 " for="username">{{__('Username')}} :</label>
            <input class="register-input bg-light border-radius-1" name="username" id="username" type="text" placeholder="Enter a username" value="{{ old('username') }}" autofocus><br><br>

            <label class="col-md-4 form-label" for="email">{{__('Email')}} :</label>
            <input class="bg-light border-radius-1 register-input" name="email" id="email" type="text" placeholder="Enter your email" value="{{ old('email') }}"><br><br>

            <label class="col-md-4 form-label" for="password">{{__('Password')}} :</label>
            <input class="bg-light border-radius-1 register-input" name="password" id="password" type="password" placeholder="Enter your password" value="{{ old('password') }}"><br><br>

            <label class="col-md-4 form-label" for="confirm-password">{{__('Confirm password')}} :</label>
            <input name="password_confirmation" class="bg-light border-radius-1 register-input" id="confirm-password" placeholder="Enter again the password" type="password"><br><br>

            <button class="btn submit btn-primary fs-5 align-item-center w-100" id="submit">
                {{ __('Sign Up')}}
            </button>
        </form>
    </div>
</div>