<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="border border-secondary rounded-4 shadow p-4 bg-white" style="width: 100%; max-width: 450px;">
        {{-- Logo --}}
        <div class="text-center mb-4">
            <img src="{{ asset('assets/images/RDS_Logo.png') }}" class="d-block mx-auto" style="width: 120px" alt="RDS Logo">
            <h4 class="fw-semibold mt-3">Research and Development Services</h4>
            <p class="text-muted">Email Verification</p>
        </div>

        {{-- Divider --}}
        <hr>

        {{-- Email Input Form --}}
        <div>
            <label for="email" class="form-label">Email Address</label>
            <input type="email" class="form-control p-3 rounded-3" placeholder="Enter your email" wire:model.lazy="email">
            @error('email')
                <div class="text-danger mt-2">{{ $message }}</div>
            @enderror
            <br>

            {{-- Submit Button --}}
            <div class="d-grid gap-2">
                <button type="button" wire:click="submit" class="btn btn-primary btn-lg rounded-3">Next</button>
            </div>
        </div>

        {{-- Footer --}}
        <div class="text-center mt-3">
            <p class="text-muted">Already have an account? <a href="{{ route('login') }}" class="text-primary fw-medium">Login</a></p>
        </div>
    </div>
</div>
