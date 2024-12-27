<div>
    {{-- Do your work, then step back. --}}
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
                    <a href="{{ route('director-quarterly-updates') }}" class="btn btn-light text-dark d-flex align-items-center mb-2">
                        <i class="bi bi-clock-history me-2"></i>
                        Quarterly Updates
                    </a>
                </li>

                {{-- Terminal Reports --}}
                <li class="nav-item">
                    <a href="{{ route('director-terminal-reports') }}" class="active btn btn-light text-dark d-flex align-items-center mb-2">
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
            <h3 class="text-center mb-4 fw-bold">Monitoring Terminal Reports</h3>

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Researcher</th>
                            <th>Draft Terminal Report</th>
                            <th>In-House Review Schedule</th>
                            <th>Final Terminal Report</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Satellite Mapping of Coastal Development in Catanduanes: Insights and Impacts</td>
                            <td>John Doe</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#draftUploadedModal">Uploaded</button>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-success" data-bs-toggle="modal"
                                    data-bs-target="#seeScheduleModal">See Schedule</button>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#finalUploadedModal">Uploaded</button>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Analysis of Renewable Energy Adoption in Rural Areas</td>
                            <td>Jane Smith</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary" data-bs-toggle="modal"
                                    data-bs-target="#draftUploadedModal">Uploaded</button>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-success" data-bs-toggle="modal"
                                    data-bs-target="#setScheduleModal">Set Schedule</button>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-outline-secondary" disabled>Pending</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            {{-- Modals --}}

            {{-- Draft Terminal Report Uploaded Modal --}}
            <div class="modal fade" id="draftUploadedModal" tabindex="-1" aria-labelledby="draftUploadedModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="draftUploadedModalLabel">Draft Terminal Report</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Research Title:</strong> Satellite Mapping of Coastal Development in Catanduanes: Insights and Impacts</p>
                            <hr>
                            <a href="#" class="btn btn-sm btn-primary">Download Report</a>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Set Schedule Modal --}}
            <div class="modal fade" id="setScheduleModal" tabindex="-1" aria-labelledby="setScheduleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="setScheduleModalLabel">Set In-House Review Schedule</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form>
                            <div class="modal-body">
                                <p><strong>Research Title:</strong> Satellite Mapping of Coastal Development in Catanduanes: Insights and Impacts</p>
                                <hr>
                                <div class="mb-3">
                                    <label for="scheduleDate" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="scheduleDate" required>
                                </div>
                                <div class="mb-3">
                                    <label for="scheduleTime" class="form-label">Time</label>
                                    <input type="time" class="form-control" id="scheduleTime" required>
                                </div>
                                <div class="mb-3">
                                    <label for="scheduleVenue" class="form-label">Venue</label>
                                    <input type="text" class="form-control" id="scheduleVenue" placeholder="Enter venue" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save Schedule</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{-- See Schedule Modal --}}
            <div class="modal fade" id="seeScheduleModal" tabindex="-1" aria-labelledby="seeScheduleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="seeScheduleModalLabel">In-House Review Schedule</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Research Title:</strong> Analysis of Renewable Energy Adoption in Rural Areas</p>
                            <hr>
                            <p><strong>Schedule Details:</strong></p>
                            <p><strong>Date:</strong> November 15, 2024</p>
                            <p><strong>Time:</strong> 2:00 PM</p>
                            <p><strong>Venue:</strong> Conference Room A</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Final Terminal Report Uploaded Modal --}}
            <div class="modal fade" id="finalUploadedModal" tabindex="-1" aria-labelledby="finalUploadedModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="finalUploadedModalLabel">Final Terminal Report</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Research Title:</strong> Analysis of Renewable Energy Adoption in Rural Areas</p>
                            <hr>
                            <a href="#" class="btn btn-sm btn-primary">Download Final Report</a>
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
