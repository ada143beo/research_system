    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div>
        {{-- SIDE BAR --}}
        <div class="d-flex">
            <nav class="bg-light shadow-sm vh-100 p-3 mt-0" style="width: 250px;">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <span class="btn btn-light fw-bold disabled d-flex align-items-center">HOME</span>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="{{ route('faculty') }}" class="btn btn-light text-dark d-flex align-items-center mb-2">
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
                                <a href="{{ route('faculty-completed-research') }}" class="btn btn-light active text-dark d-flex align-items-center mb-2">
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
                <h3 class="text-center fw-bold mb-4">Completed Research</h3>
                <div class="card m-3">
                    <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
                        <h5>Satellite Mapping of Coastal Development in Catanduanes: Insights and Impacts</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Category:</strong> Science and Technology</p>
                        <p><strong>Start Date:</strong> January 15, 2024</p>
                        <p><strong>Completion Date:</strong> December 15, 2024</p>
                        <hr>
                        <h6><strong>Description:</strong></h6>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque sit vero eius sunt corporis
                            nostrum, iure eaque veniam tempore quaerat pariatur laudantium perspiciatis distinctio animi
                            alias commodi, cum impedit veritatis!</p>
                        <hr>
                        <h6><strong>Status Reports:</strong></h6>
                        <ul class="list-group mb-4">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                First Quarter Report <button class="btn btn-sm btn-outline-primary"
                                    data-bs-toggle="modal" data-bs-target="#viewModal">View</button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Second Quarter Report <button class="btn btn-sm btn-outline-primary"
                                    data-bs-toggle="modal" data-bs-target="#viewModal">View</button>
                            </li>
                        </ul>

                        <h6><strong>Terminal Report:</strong> <a href="#"
                                class="btn btn-sm btn-outline-primary">Download Final Terminal Report</a></h6>
                        <hr>
                        <h6><strong>In-House Review:</strong> November 15, 2024</h6>
                    </div>
                    {{-- MODAL --}}
                    <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="viewModalLabel">View Report</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Status Description:</strong></p>
                                    <p id="viewDescription">Detailed description of the selected quarterly status report
                                        will be shown here.</p>
                                    <p><strong>Uploaded File:</strong></p>
                                    <a href="#" id="viewFileLink" class="btn btn-primary" target="_blank">Download File</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
