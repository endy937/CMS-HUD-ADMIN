<x-guest-layout>

    @session('status')
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ $value }}
    </div>
    @endsession

    <div id="app" class="app app-full-height app-without-header">
        <!-- BEGIN login -->
        <div class="login">
            <!-- BEGIN login-content -->
            <div class="login-content">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <h1 class="text-center">Sign In</h1>
                    <div class="text-inverse text-opacity-50 text-center mb-4">
                        For your protection, please verify your identity.
                    </div>
                    <x-validation-errors class="mb-4" />

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                        <input type="text" name="email" class="form-control form-control-lg bg-inverse bg-opacity-5" value="{{ old('email') }}" required autocomplete="username">
                    </div>

                    <div class="mb-3">
                        <div class="d-flex">
                            <label class="form-label" for="password">Password <span class="text-danger">*</span></label>
                            <a href="{{ route('password.request') }}" class="ms-auto text-inverse text-decoration-none text-opacity-50">Forgot password?</a>
                        </div>
                        <input id="password" name="password" type="password" class="form-control form-control-lg bg-inverse bg-opacity-5" required autocomplete="current-password">
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input id="remember_me" name="remember" class="form-check-input" type="checkbox">
                            <label class="form-check-label" for="remember_me">Remember me</label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
                </form>


            </div>
            <!-- END login-content -->
        </div>
</x-guest-layout>