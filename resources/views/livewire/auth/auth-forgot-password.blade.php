<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="container d-flex align-items-center justify-content-center vh-100">
        <div class="card shadow p-4" style="max-width: 400px; width: 100%;">
            <div class="card-body">
                <h4 class="card-title text-center mb-4">Forgot Password</h4>
                <p class="text-muted text-center">Enter your email address to reset your password.</p>
                <form action="/password-reset" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter your email" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Send Reset Link</button>
                </form>
                <div class="text-center mt-3">
                    <a href="{{ route('login') }}" class="btn btn-secondary w-100">Back to Login</a>
                </div>
            </div>
        </div>
    </div>
</div>
