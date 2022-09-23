<div class="modal-dialog">
        <div class="border-radius-2 register-form">
            <form class="d-flex flex-column gap-2" action="{{ route('register') }}" method="Post">
                @csrf
                <button class="outline-0 border-0 close-btn close-hover p-1 lighting-hover parent-right-top" data-bs-dismiss="modal">
                    <svg width="25px" height="25px" color="#fff">
                        <use xlink:href="{{ asset('images/icons/close.svg') }}#close"></use>
                    </svg>
                </button>
                <h2 class="text-center m-4 font-cabin">
                    {{__('Create account')}}
                </h2>

                @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                    @endforeach
                </div>
                @endif
                <label class="col-md-5 " for="username">{{__('Username')}} :</label>
                <input class="register-input bg-light border-radius-1" name="username" id="username" type="text" placeholder="Enter a username" value="{{ old('username') }}" autofocus><br>

                <label class="col-md-5 form-label" for="email">{{__('Email')}} :</label>
                <input class="bg-light border-radius-1 register-input" name="email" id="email" type="text" placeholder="Enter your email" value="{{ old('email') }}"><br>

                <label class="col-md-5 form-label" for="register-password">{{__('Password')}} :</label>
                <div class="position-relative d-flex align-items-center register-password-box">
                    <input class="bg-light border-radius-1 register-input" name="password" id="register-password" type="password" placeholder="Enter your password" value="{{ old('password') }}"><br>
                    <input class="position-absolute parent-right" type="checkbox">
                </div>

                <label class="col-md-5 form-label mt-4" for="confirm-password">{{__('Confirm password')}} :</label>
                <div class="position-relative d-flex align-items-center mb-4">
                    <input name="password_confirmation" class="bg-light border-radius-1 register-input" id="password_confirmation" placeholder="Enter again the password" type="password" autocomplete="off"><br>
                </div>
                <div class="mb-5">
                    <lable for="occuption"> {{ __('Choose your occuption') }}</lable>
                    <select class="w-100" name="occuption" id="occuption">
                        <option>{{__('Tutor')}}</option>
                        <option>{{__('Developer')}}</option>
                    </select>
                </div>

                <button class="btn submit btn-primary fs-5 align-item-center w-100" id="submit">
                    {{ __('Sign Up')}}
                </button>
            </form>
        </div>
</div>
