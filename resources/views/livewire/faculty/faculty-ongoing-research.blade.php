{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
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
                            <a href="{{ route('faculty-ongoing-research') }}" class="btn btn-light active text-dark d-flex align-items-center mb-2">
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
            <h3 class="text-center mb-4 fw-bold">Ongoing Research</h3>
            <div class="card m-3">
                <div class="card-header bg-secondary text-white">
                    <h5>Satellite Mapping of Coastal Development in Catanduanes: Insights and Impacts</h5>
                </div>
                <div class="card-body d-flex flex-column flex-lg-row">
                    {{---- First Column: Research Information ----}}
                    <div class="col-lg-6 pe-lg-3">
                        <h6><strong>Research Information:</strong></h6>
                        <p><strong>Category:</strong> Science and Technology</p>
                        <p><strong>Start Date:</strong> January 15, 2024</p>
                        <p><strong>Estimated End Date:</strong> December 15, 2024</p>
                        <hr>
                        <h6><strong>Status Report:</strong></h6>
                        <ul class="list-group mb-4">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                First Quarter Report
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#viewModal">View</button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Second Quarter Report
                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#uploadModal">Upload</button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Third Quarter Report
                                <button class="btn btn-sm btn-secondary" disabled>Upload</button>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Fourth Quarter Report
                                <button class="btn btn-sm btn-secondary" disabled>Upload</button>
                            </li>
                        </ul>
                    </div>

                    {{---- Second Column: Reports and Submission ----}}
                    <div class="col-lg-6 ps-lg-3">
                        <h6><strong>Reports and Submissions</strong></h6>
                        <ul class="list-group mb-4">
                            {{---- Draft Terminal Report ----}}
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Draft Terminal Report
                                <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#uploadDraftModal">Upload Draft</button>
                            </li>
                            {{---- In-House Review Schedule ----}}
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                In-House Review Schedule
                                <button class="btn btn-sm btn-secondary" disabled>No Schedule Yet</button>
                                <button class="btn btn-sm btn-outline-success" data-bs-toggle="modal"
                                    data-bs-target="#scheduleModal">See Schedule</button>
                            </li>
                            {{---- Final Terminal Report ----}}
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Final Terminal Report
                                <button class="btn btn-sm btn-secondary" disabled>Upload Final</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Viewing Reports Modal --}}
            <div class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="viewModalLabel">View Report</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Status Description:</strong></p>
                            <p id="viewDescription">Lorem ipsum dolor sit amet...</p>
                            <p><strong>Uploaded File:</strong></p>
                            <a class="btn btn-primary" href="#" id="viewFileLink" download>Download File</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Uploading Reports Modal--}}
            <div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="uploadModalLabel">Upload Report</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="statusDescription" class="form-label">Status Description</label>
                                    <textarea class="form-control" id="statusDescription" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="reportFile" class="form-label">Upload File</label>
                                    <input class="form-control" type="file" id="reportFile">
                                </div>
                                <button type="button" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Uploading Draft Terminal Report Modal--}}
            <div class="modal fade" id="uploadDraftModal" tabindex="-1" aria-labelledby="uploadDraftModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="uploadDraftModalLabel">Upload Draft Terminal Report</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="draftDescription" class="form-label">Description</label>
                                    <textarea class="form-control" id="draftDescription" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="draftFile" class="form-label">Upload File</label>
                                    <input class="form-control" type="file" id="draftFile">
                                </div>
                                <button type="button" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Viewing or Uploading In-House Review Schedule Modal--}}
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
        </main>
    </div>
</div>
