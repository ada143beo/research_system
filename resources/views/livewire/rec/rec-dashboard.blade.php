<div>
    {{-- The whole world belongs to you. --}}
    <div class="d-flex">
        {{-- Sidebar navigation --}}
        <nav class="bg-light shadow-sm vh-100 p-3 mt-0" style="width: 250px;">
            <ul class="nav flex-column">
                {{-- Home Section --}}
                <li class="nav-item">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('rec') }}" class="active btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-house-door me-2"></i>
                                Dashboard
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Proposals Section --}}
                <li class="nav-item">
                    <ul class="nav flex-column">
                        {{-- To Review Proposals --}}
                        <li class="nav-item">
                            <a href="{{ route('rec-to-review') }}"
                                class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-pencil-square me-2"></i>
                                To Review
                            </a>
                        </li>
                        {{-- Require Revisions --}}
                        <li class="nav-item">
                            <a href="{{ route('rec-to-revise') }}"
                                class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-exclamation-circle me-2"></i>
                                For Revisions
                            </a>
                        </li>
                        {{-- Approved Proposals --}}
                        <li class="nav-item">
                            <a href="{{ route('rec-approved') }}"
                                class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle me-2"></i>
                                Approved
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        {{-- Main Content --}}
        <main class="container-fluid p-4">
            <div class="container my-4">
                <h2 class="mb-4">Research Ethics Committee Dashboard</h2>

                <!-- Overview Cards -->
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card text-center border-primary">
                            <div class="card-body">
                                <h3 class="text-primary">5</h3>
                                <p>Proposals To Review</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center border-warning">
                            <div class="card-body">
                                <h3 class="text-warning">2</h3>
                                <p>Revisions Required</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center border-success">
                            <div class="card-body">
                                <h3 class="text-success">10</h3>
                                <p>Approved Proposals</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
