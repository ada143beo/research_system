<div>
    {{-- SIDE BAR --}}
    <div class="d-flex">
        <nav class="bg-light shadow-sm vh-100 p-3 mt-0" style="width: 250px;">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <span class="btn btn-light fw-bold disabled d-flex align-items-center">HOME</span>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('faculty') }}" class="btn btn-light active text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-house-door me-2" alt="Home Icon" width="20"></i>
                                Dashboard
                            </a>
                        </li>
                    </ul>   
                </li>
                <hr>
                <li class="nav-item">
                    <span class="btn btn-light fw-bold disabled d-flex align-items-center">MY PROPOSALS</span>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('faculty-create-proposal') }}" class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-pencil-square me-2" alt="Create Proposal Icon" width="20"></i>
                                Create
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('faculty-track-proposal') }}" class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-search me-2" alt="Track Proposal Icon" width="20"></i>
                                Track
                            </a>
                        </li>
                    </ul>
                </li>
                <hr>
                <li class="nav-item">
                    <span class="btn btn-light fw-bold disabled d-flex align-items-center">MY RESEARCH</span>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('faculty-ongoing-research') }}" class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-clock me-2" alt="Ongoing Research Icon" width="20"></i>
                                Ongoing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('faculty-completed-research') }}" class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-list-check me-2" alt="Completed Research Icon" width="20"></i>
                                Completed
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        {{-- MAIN CONTENT --}}
        <main class="container-fluid p-4">
            <h2 class="mb-4">Welcome to the RDS Dashboard</h2>
            <p>Start managing your research projects efficiently.</p>

            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card text-center shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Total Proposals</h5>
                            <p class="card-text display-5 fw-bold">12</p>
                            <p class="text-muted">All submitted proposals</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card text-center shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title text-warning">Pending/Under Review</h5>
                            <p class="card-text display-5 fw-bold">5</p>
                            <p class="text-muted">Proposals awaiting review</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card text-center shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title text-success">Approved</h5>
                            <p class="card-text display-5 fw-bold">3</p>
                            <p class="text-muted">Proposals approved</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="card text-center shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="card-title text-info">In Progress</h5>
                            <p class="card-text display-5 fw-bold">4</p>
                            <p class="text-muted">Proposals currently active</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


