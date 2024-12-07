<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    {{-- NAVBAR --}}

    <div class="d-flex">
        {{-- Sidebar navigation --}}
        <nav class="bg-light shadow-sm vh-100 p-3 mt-0" style="width: 260px">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('director-dashboard') }}"
                                class="active btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-house-door me-2"></i>
                                Dashboard
                            </a>
                        </li>
                    </ul>
                </li>
                <hr class="mt-0 mb-0">
                {{-- Format Compliance --}}
                <li class="nav-item">
                    <a href="{{ route('director-format-compliance') }}"
                        class="btn btn-light text-dark d-flex align-items-center mb-2">
                        <i class="bi bi-file-check me-2"></i>
                        Format Compliance
                    </a>
                </li>
                {{-- Set Schedule --}}
                <li class="nav-item">
                    <a href="{{ route('director-set-schedule') }}"
                        class="btn btn-light text-dark d-flex align-items-center mb-2">
                        <i class="bi bi-calendar me-2"></i>
                        Set Schedules
                    </a>
                </li>
                {{-- Approved Proposals --}}
                <li class="nav-item">
                    <a href="{{ route('rec-approved') }}"
                        class="btn btn-light text-dark d-flex align-items-center mb-2">
                        <i class="bi bi-check-circle me-2"></i>
                        Contract
                    </a>
                </li>
                <hr class="mt-0 mb-0">
            </ul>
        </nav>

        {{-- Main Content --}}
        <main class="container-fluid p-4">
            <h2 class="mb-4">Admin Dashboard</h2>

            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h5>Proposals Overview</h5>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <h3 class="text-primary">10</h3>
                            <p>Pending Proposals</p>
                        </div>
                        <div class="col-md-4">
                            <h3 class="text-success">25</h3>
                            <p>Approved Proposals</p>
                        </div>
                        <div class="col-md-4">
                            <h3 class="text-danger">5</h3>
                            <p>Rejected Proposals</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


