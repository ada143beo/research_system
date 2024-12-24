<div class="d-flex justify-content-center align-items-center vh-100 bg-light">
    <div class="col-md-4 border border-secondary rounded-4 shadow p-4 bg-white">
        <div class="text-center mb-4">
            <img src="{{ asset('assets/images/RDS_Logo.png') }}" class="d-block mx-auto mb-3" style="width: 120px" alt="RDS Logo">
            <h4 class="fw-semibold">Research and Development Services</h4>
            <p class="text-muted">Complete Your Registration</p>
        </div>

        <hr class="mb-4">
        <form wire:submit.prevent="register">
            {{-- Full Name --}}
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" id="name" class="form-control p-3 rounded-3" placeholder="Enter your full name" wire:model.lazy="name">
                @error('name') <div class="text-danger mt-2">{{ $message }}</div> @enderror
            </div>

            {{-- Password --}}
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" class="form-control p-3 rounded-3" placeholder="Create a password" wire:model.lazy="password">
                @error('password') <div class="text-danger mt-2">{{ $message }}</div> @enderror
            </div>

            {{-- Role Dropdown --}}
            <div class="mb-3">
                <label for="role" class="form-label">Select Role</label>
                <select id="role" class="form-select p-3 rounded-3" wire:model="role">
                    <option value="">-- Select Role --</option> <!-- Blank option -->
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->role_name }}</option>
                    @endforeach
                </select>
                @error('role') <div class="text-danger mt-2">{{ $message }}</div> @enderror
            </div>


            {{-- Register Button --}}
            <div class="d-grid gap-2 mt-3">
                <button type="submit" class="btn btn-primary btn-lg rounded-3">Register</button>
            </div>
        </form>

        {{-- Already Have Account --}}
        <div class="text-center mt-3">
            <p class="text-muted">Already have an account? <a href="{{ route('login') }}" class="text-primary fw-medium">Login</a></p>
        </div>
    </div>
</div>
