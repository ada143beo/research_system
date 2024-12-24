<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="border border-secondary rounded-4 shadow p-4 bg-white" style="width: 100%; max-width: 450px;">
        {{-- Logo and Header --}}
        <div class="text-center mb-4">
            <img src="{{ asset('assets/images/RDS_Logo.png') }}" class="d-block mx-auto" style="width: 150px" alt="RDS Logo">
            <h4 class="fw-semibold mt-3">Research and Development Services <br>(R&DS)</h4>
        </div>

        {{-- Divider --}}
        <hr class="mb-4">
        <h5 class="text-center fw-medium mb-3">Forgot Password</h5>
        <p class="text-muted text-center">Enter your email to reset your password.</p>

        {{-- Success or Error Message --}}
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif

        {{-- Form --}}
        <form wire:submit.prevent="sendResetLink">
            {{-- Email Input --}}
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" id="email" class="form-control p-3 rounded-3" placeholder="Enter your email" wire:model='email'>
                @error('email') <div class="text-danger mt-2">{{ $message }}</div> @enderror
            </div>

            {{-- Submit Button --}}
            <div class="d-grid gap-2 mt-3">
                <button type="submit" class="btn btn-primary btn-lg rounded-3">Send Password Reset Link</button>
            </div>
        </form>

        {{-- Back to Login --}}
        <div class="text-center mt-3">
            <p class="text-muted">Remember your password?
                <a href="{{ route('login') }}" class="text-primary fw-medium">Login</a>
            </p>
        </div>
    </div>
</div>
