<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="border border-secondary rounded-4 shadow p-4 bg-white" style="width: 100%; max-width: 450px;">
        {{-- Logo and Header --}}
        <div class="text-center mb-4">
            <img src="{{ asset('assets/images/RDS_Logo.png') }}" class="d-block mx-auto" style="width: 150px" alt="RDS Logo">
            <h4 class="fw-semibold mt-3">Research and Development Services</h4>
        </div>

        {{-- Divider --}}
        <hr class="mb-4">
        <h5 class="text-center fw-medium mb-3">Login</h5>

        {{-- Form --}}
        <form>
            @include('includes.errorhandler')

            {{-- Email Input --}}
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" id="email" class="form-control p-3 rounded-3" placeholder="Enter your email" wire:model='email'>
            </div>

            {{-- Password Input --}}
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control p-3 rounded-3" placeholder="Enter your password" wire:model='password'>
            </div>

            {{-- Login Button --}}
            <div class="d-grid gap-2 mt-3">
                <button type="button" wire:click='login' class="btn btn-primary btn-lg rounded-3">Login</button>
            </div>
        </form>

        {{-- Forgot Password Link --}}
        <div class="text-center mt-3">
            <a href="#" onclick="validateEmail()" class="text-primary fw-medium">Forgot Password?</a>
        </div>

        {{-- Register Link --}}
        <div class="text-center mt-3">
            <p class="text-muted">Don't have an account?
                <a href="{{ route('register') }}" class="text-primary fw-medium">Register</a>
            </p>
        </div>
    </div>
</div>

{{-- JavaScript to Validate Email --}}
<script>
    function validateEmail() {
        let email = document.getElementById('email').value;

        if (!email) {
            alert('Please enter your email address.');
        } else {
            window.location.href = `{{ route('password.request') }}?email=` + encodeURIComponent(email);
        }
    }
</script>
