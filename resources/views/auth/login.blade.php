<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="login-content">
            <div class="login-userset">
                <div class="login-logo">
                    <img src="assets/img/logo.png" alt="img">
                </div>
                <div class="login-userheading">
                    <h3>Sign In</h3>
                    <h4>Please login to your account</h4>
                </div>
                <div class="form-login">
                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
                <div class="form-login">
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Password')" />

                        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                </div>
                <div class="form-login">
                    <div class="alreadyuser">
                        @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                        @endif
                    </div>
                </div>
                <div class="form-login">
                    <x-primary-button class="ml-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
                <div class="signinform text-center">
                    <h4>Don’t have an account? <a href="signup.html" class="hover-a">Sign Up</a></h4>
                </div>
                <div class="form-setlogin">
                    <h4>Or sign up with</h4>
                </div>
                <div class="form-sociallink">
                    <ul>
                        <li>
                            <a href="javascript:void(0);">
                                <img src="assets/img/icons/google.png" class="me-2" alt="google">
                                Sign Up using Google
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <img src="assets/img/icons/facebook.png" class="me-2" alt="google">
                                Sign Up using Facebook
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="login-img">
            <img src="assets/img/login.jpg" alt="img">
        </div>

    </form>
</x-guest-layout>