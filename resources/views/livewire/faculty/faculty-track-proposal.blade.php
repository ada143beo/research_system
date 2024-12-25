<div>
    {{-- SIDE BAR --}}
    <div class="d-flex">
        <nav class="bg-light shadow-sm vh-100 p-3 mt-0" style="width: 250px;">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <span class="btn btn-light fw-bold disabled d-flex align-items-center">HOME</span>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('faculty') }}"
                                class="btn btn-light text-dark d-flex align-items-center mb-2">
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
                            <a href="{{ route('faculty-create-proposal') }}"
                                class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-pencil-square me-2" alt="Create Proposal Icon" width="20"></i>
                                Create
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('faculty-track-proposal') }}"
                                class="btn btn-light active text-dark d-flex align-items-center mb-2">
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
                            <a href="{{ route('faculty-ongoing-research') }}"
                                class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-clock me-2" alt="Ongoing Research Icon" width="20"></i>
                                Ongoing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('faculty-completed-research') }}"
                                class="btn btn-light text-dark d-flex align-items-center mb-2">
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
            {{-- Page Title --}}
            <h3 class="text-center mb-4 fw-bold">My Proposals</h3>

            {{-- Proposal Box --}}
            <div class="card shadow-sm mb-4">
                {{-- Title Header --}}
                <div class="card-header bg-secondary text-white d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Satellite Mapping of Coastal Development</h5>
                    {{-- Three-Dots Menu --}}
                    <div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button"
                            id="proposalOptionsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-three-dots-vertical"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="proposalOptionsDropdown">
                            <li><a class="dropdown-item" href="#">Edit</a></li>
                            <li>
                                <a class="dropdown-item text-danger" data-bs-toggle="modal"
                                    data-bs-target="#deleteConfirmModal" href="#">
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card-body row">
                    {{-- Column 1: Proposal Information --}}
                    <div class="col-md-6">
                        <p>
                            <strong>Document:</strong>
                            <a href="#" class="text-primary">Proposal_Document.pdf</a>
                        </p>
                        <p><strong>Date Submitted:</strong> September 12, 2024</p>
                        <p><strong>Date Resubmitted:</strong> October 1, 2024</p>
                        <p><strong>Category:</strong> Science and Technology</p>
                        <p><strong>Description:</strong> This proposal aims to map coastal development using satellite
                            imagery to monitor changes over time.</p>
                    </div>

                    {{-- Column 2: Status --}}
                    <div class="col-md-6">
                        <p><strong>Status:</strong></p>
                        <ul class="list-group">
                            {{-- Format Compliance --}}
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Format Compliance</span>
                                <div class="d-flex align-items-center">
                                    <span class="btn btn-sm bg-warning text-white me-3">Under Review</span>
                                    <a href="#" class="text-muted" data-bs-toggle="modal"
                                        data-bs-target="#commentsModal">
                                        <i class="bi bi-chat-dots"></i>
                                    </a>
                                </div>
                            </li>

                            {{-- Ethical Standards --}}
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Ethical Standards</span>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-sm btn-secondary me-3" disabled>Pending</button>
                                    <a href="#" class="text-muted" data-bs-toggle="modal"
                                        data-bs-target="#commentsModal">
                                        <i class="bi bi-chat-dots"></i>
                                    </a>
                                </div>
                            </li>

                            {{-- Schedule for Panel Proposal --}}
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Schedule for Panel Proposal</span>
                                <div class="d-flex align-items-center">
                                    <!--<button class="btn btn-sm btn-secondary" disabled>No Schedule Yet</button>-->
                                    <button class="btn btn-sm btn-outline-success" data-bs-toggle="modal"
                                        data-bs-target="#scheduleModal">See Schedule</button>
                                </div>
                            </li>

                            {{-- Schedule for UREC Presentation --}}
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Schedule for Presentation to UREC</span>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-sm btn-secondary" disabled>No Schedule Yet</button>
                                    <!-- <button class="btn btn-sm btn-outline-success" data-bs-toggle="modal"
                                        data-bs-target="#scheduleModal">See Schedule</button> -->
                                </div>
                            </li>

                            {{-- Contract Signing --}}
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Contract Signing</span>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-sm btn-secondary" disabled>Pending</button>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            {{-- Modals --}}
            {{-- Delete Confirmation Modal --}}
            <div class="modal fade" id="deleteConfirmModal" tabindex="-1" aria-labelledby="deleteConfirmModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger" id="deleteConfirmModalLabel">Delete Proposal</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this proposal? This action cannot be undone.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                data-bs-toggle="modal" data-bs-target="#confirmFinalDeleteModal">
                                Yes, Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Confirm Final Delete Modal --}}
            <div class="modal fade" id="confirmFinalDeleteModal" tabindex="-1"
                aria-labelledby="confirmFinalDeleteModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-danger" id="confirmFinalDeleteModalLabel">Confirm Deletion
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Your proposal has been deleted successfully.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- View Schedule Modal --}}
            <div class="modal fade" id="scheduleModal" tabindex="-1" aria-labelledby="scheduleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-primary" id="scheduleModalLabel">Schedule Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Date:</strong> November 15, 2024</p>
                            <p><strong>Time:</strong> 10:00 AM</p>
                            <p><strong>Venue:</strong> Research Hall A</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Comments Modal --}}
            <div class="modal fade" id="commentsModal" tabindex="-1" aria-labelledby="commentsModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-primary" id="commentsModalLabel">Comments</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="commentText" class="form-label">Add a Comment:</label>
                                <textarea id="commentText" class="form-control" rows="3"></textarea>
                            </div>
                            <button type="button" class="btn btn-primary btn-sm">Submit Comment</button>
                            <hr>
                            <div>
                                <p><strong>User 1:</strong> Please expedite the review process.</p>
                                <p><strong>User 2:</strong> Waiting for updates on ethical standards.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
