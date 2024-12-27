<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="d-flex">
        <nav class="bg-light shadow-sm vh-100 p-3 mt-0" style="width: 260px">
            <ul class="nav flex-column">
                {{-- Dashboard --}}
                <li class="nav-item">
                    <a href="{{ route('director-dashboard') }}"
                        class="btn btn-light text-dark d-flex align-items-center mb-2">
                        <i class="bi bi-house-door me-2"></i>
                        Dashboard
                    </a>
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

                {{-- Set Schedules --}}
                <li class="nav-item">
                    <a href="{{ route('director-set-schedule') }}"
                        class="btn btn-light text-dark d-flex align-items-center mb-2">
                        <i class="bi bi-calendar me-2"></i>
                        Set Schedules
                    </a>
                </li>

                {{-- Contract Status --}}
                <li class="nav-item">
                    <a href="{{ route('director-contract-status') }}"
                        class="btn btn-light text-dark d-flex align-items-center mb-2">
                        <i class="bi bi-check-circle me-2"></i>
                        Contract Status
                    </a>
                </li>

                <hr class="mt-0 mb-0">

                {{-- Quarterly Updates --}}
                <li class="nav-item">
                    <a href="{{ route('director-quarterly-updates') }}" class="active btn btn-light text-dark d-flex align-items-center mb-2">
                        <i class="bi bi-clock-history me-2"></i>
                        Quarterly Updates
                    </a>
                </li>

                {{-- Terminal Reports --}}
                <li class="nav-item">
                    <a href="{{ route('director-terminal-reports') }}" class="btn btn-light text-dark d-flex align-items-center mb-2">
                        <i class="bi bi-journal-check me-2"></i>
                        Terminal Reports
                    </a>
                </li>

                <hr class="mt-0 mb-0">

                {{-- Manage Profiles --}}
                <li class="nav-item">
                    <a href="{{ route('director-manage-profiles') }}" class="btn btn-light text-dark d-flex align-items-center mb-2">
                        <i class="bi bi-person-lines-fill me-2"></i>
                        Manage Profiles
                    </a>
                </li>
            </ul>
        </nav>

        <main class="container-fluid p-4">
            <h3 class="text-center mb-4 fw-bold">Quarterly Status Monitoring</h3>

            {{-- Table for Research Monitoring --}}
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Researcher</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Example Row --}}
                        <tr>
                            <td>1</td>
                            <td>Sample Research Title</td>
                            <td>John Doe</td>
                            <td>
                                {{-- Progress Bar for Status --}}
                                <div class="progress mt-2" style="height: 20px;">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%;"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                        75%
                                    </div>
                                </div>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#viewReportsModal">View Reports</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Modal for Viewing Reports --}}
            <div class="modal fade" id="viewReportsModal" tabindex="-1" aria-labelledby="viewReportsModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="viewReportsModalLabel">Quarterly Reports</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{-- Research Information --}}
                            <h5>Sample Research Title</h5>
                            <hr>
                            <h6><strong>Research Information:</strong></h6>
                            <p><strong>Category:</strong> Science and Technology</p>
                            <p><strong>Start Date:</strong> January 15, 2024</p>
                            <p><strong>Estimated End Date:</strong> December 15, 2024</p>
                            <hr>
                            {{-- Quarterly Reports --}}
                            <h6><strong>Quarterly Reports:</strong></h6>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    First Quarter Report
                                    <button class="btn btn-sm btn-outline-primary">Download</button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Second Quarter Report
                                    <button class="btn btn-sm btn-outline-primary">Download</button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Third Quarter Report
                                    <button class="btn btn-sm btn-outline-primary">Download</button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Fourth Quarter Report
                                    <button class="btn btn-sm btn-outline-primary">Download</button>
                                </li>
                            </ul>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>




    </div>
</div>
