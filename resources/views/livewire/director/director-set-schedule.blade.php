<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="d-flex">
        {{-- Sidebar navigation --}}
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
                        class="active btn btn-light text-dark d-flex align-items-center mb-2">
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
            {{-- Navbar Tabs --}}
            <ul class="nav nav-tabs mb-4" id="scheduleTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="panel-to-schedule-tab" data-bs-toggle="tab"
                        data-bs-target="#panel-to-schedule" type="button" role="tab"
                        aria-controls="panel-to-schedule" aria-selected="true">
                        Panel Proposal - To Schedule
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="panel-scheduled-tab" data-bs-toggle="tab"
                        data-bs-target="#panel-scheduled" type="button" role="tab" aria-controls="panel-scheduled"
                        aria-selected="false">
                        Panel Proposal - Scheduled
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="urec-to-schedule-tab" data-bs-toggle="tab"
                        data-bs-target="#urec-to-schedule" type="button" role="tab"
                        aria-controls="urec-to-schedule" aria-selected="false">
                        Presentation to UREC - To Schedule
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="urec-scheduled-tab" data-bs-toggle="tab"
                        data-bs-target="#urec-scheduled" type="button" role="tab" aria-controls="urec-scheduled"
                        aria-selected="false">
                        Presentation to UREC - Scheduled
                    </button>
                </li>
            </ul>

            {{-- Tab Content --}}
            <div class="tab-content" id="scheduleTabsContent">
                {{-- Panel Proposal - To Schedule Tab Pane --}}
                <div class="tab-pane fade show active" id="panel-to-schedule" role="tabpanel"
                    aria-labelledby="panel-to-schedule-tab">
                    <h3>Panel Proposal - To Schedule</h3>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Researcher</th>
                                <th>Submission Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>AI in Healthcare</td>
                                <td>John Doe</td>
                                <td>Nov 20, 2024</td>
                                <td>
                                    {{-- View Details Button --}}
                                    <button class="btn btn-primary btn-sm me-2" data-bs-toggle="modal"
                                        data-bs-target="#viewDetailsModal1">
                                        View Details
                                    </button>

                                    {{-- Set Schedule Button --}}
                                    <button class="btn btn-success btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#setScheduleModal1">
                                        Set Schedule
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    {{-- View Details Modal --}}
                    <div class="modal fade" id="viewDetailsModal1" tabindex="-1"
                        aria-labelledby="viewDetailsModalLabel1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="viewDetailsModalLabel1">Proposal Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Title:</strong> AI in Healthcare</p>
                                    <p><strong>Researcher:</strong> John Doe</p>
                                    <p><strong>Submission Date:</strong> Nov 20, 2024</p>
                                    <p><strong>Description:</strong> This research explores the potential of artificial
                                        intelligence in transforming the healthcare industry.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Set Schedule Modal --}}
                    <div class="modal fade" id="setScheduleModal1" tabindex="-1"
                        aria-labelledby="setScheduleModalLabel1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="setScheduleModalLabel1">Set Schedule</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form>
                                    <div class="modal-body">
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
                                            <input type="text" class="form-control" id="scheduleVenue"
                                                placeholder="Enter venue" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success">Save Schedule</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Panel Proposal - Scheduled Tab Pane --}}
                <div class="tab-pane fade" id="panel-scheduled" role="tabpanel"
                    aria-labelledby="panel-scheduled-tab">
                    <h3>Panel Proposal - Scheduled</h3>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Researcher</th>
                                <th>Scheduled Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>AI in Healthcare</td>
                                <td>John Doe</td>
                                <td>Nov 25, 2024</td>
                                <td>
                                    {{-- View Details Button --}}
                                    <button class="btn btn-primary btn-sm me-2" data-bs-toggle="modal"
                                        data-bs-target="#viewDetailsModal2">
                                        View Details
                                    </button>

                                    {{-- See Schedule Button --}}
                                    <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#seeScheduleModal2">
                                        See Schedule
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- View Details Modal --}}
                    <div class="modal fade" id="viewDetailsModal2" tabindex="-1"
                        aria-labelledby="viewDetailsModalLabel2" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="viewDetailsModalLabel2">Proposal Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Title:</strong> AI in Healthcare</p>
                                    <p><strong>Researcher:</strong> John Doe</p>
                                    <p><strong>Scheduled Date:</strong> Nov 25, 2024</p>
                                    <p><strong>Description:</strong> This research explores the potential of artificial
                                        intelligence in transforming the healthcare industry.</p>
                                    {{-- Add more details as needed --}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- See Schedule Modal --}}
                    <div class="modal fade" id="seeScheduleModal2" tabindex="-1"
                        aria-labelledby="seeScheduleModalLabel2" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="seeScheduleModalLabel2">Scheduled Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Title:</strong> AI in Healthcare</p>
                                    <p><strong>Researcher:</strong> John Doe</p>
                                    <p><strong>Scheduled Date:</strong> Nov 25, 2024</p>
                                    <p><strong>Time:</strong> 10:00 AM</p>
                                    <p><strong>Venue:</strong> Room 101, Science Building</p>
                                </div>
                                <div class="modal-footer">
                                    {{-- Edit Schedule Button --}}
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#editScheduleModal1">
                                        Edit Schedule
                                    </button>
                                    {{-- Close Button --}}
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Edit Schedule Modal --}}
                    <div class="modal fade" id="editScheduleModal2" tabindex="-1"
                        aria-labelledby="editScheduleModalLabel2" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editScheduleModalLabel2">Edit Schedule</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="scheduleDate" class="form-label">Date</label>
                                            <input type="date" class="form-control" id="scheduleDate"
                                                value="2024-11-25">
                                        </div>
                                        <div class="mb-3">
                                            <label for="scheduleTime" class="form-label">Time</label>
                                            <input type="time" class="form-control" id="scheduleTime"
                                                value="10:00">
                                        </div>
                                        <div class="mb-3">
                                            <label for="scheduleVenue" class="form-label">Venue</label>
                                            <input type="text" class="form-control" id="scheduleVenue"
                                                value="Room 101, Science Building">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success">Save Changes</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Presentation to UREC - To Schedule Tab Pane --}}
                <div class="tab-pane fade" id="urec-to-schedule" role="tabpanel"
                    aria-labelledby="urec-to-schedule-tab">
                    <h3>Presentation to UREC - To Schedule</h3>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Researcher</th>
                                <th>Submission Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>AI in Healthcare</td>
                                <td>John Doe</td>
                                <td>Nov 20, 2024</td>
                                <td>
                                    {{-- View Details Button --}}
                                    <button class="btn btn-primary btn-sm me-2" data-bs-toggle="modal"
                                        data-bs-target="#viewDetailsModal1urec">
                                        View Details
                                    </button>

                                    {{-- Set Schedule Button --}}
                                    <button class="btn btn-success btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#setScheduleModal1urec">
                                        Set Schedule
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    {{-- View Details Modal --}}
                    <div class="modal fade" id="viewDetailsModal1urec" tabindex="-1"
                        aria-labelledby="viewDetailsModalLabel1urec" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="viewDetailsModalLabel1urec">Proposal Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Title:</strong> AI in Healthcare</p>
                                    <p><strong>Researcher:</strong> John Doe</p>
                                    <p><strong>Submission Date:</strong> Nov 20, 2024</p>
                                    <p><strong>Description:</strong> This research explores the potential of artificial
                                        intelligence in transforming the healthcare industry.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Set Schedule Modal --}}
                    <div class="modal fade" id="setScheduleModal1urec" tabindex="-1"
                        aria-labelledby="setScheduleModalLabel1urec" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="setScheduleModalLabel1urec">Set Schedule</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <form>
                                    <div class="modal-body">
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
                                            <input type="text" class="form-control" id="scheduleVenue"
                                                placeholder="Enter venue" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-success">Save Schedule</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                {{-- Presentation to UREC - Scheduled Tab Pane --}}
                <div class="tab-pane fade" id="urec-scheduled" role="tabpanel" aria-labelledby="urec-scheduled-tab">
                    <h3>UREC Proposal - Scheduled</h3>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Researcher</th>
                                <th>Scheduled Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>AI in Healthcare</td>
                                <td>John Doe</td>
                                <td>Nov 25, 2024</td>
                                <td>
                                    {{-- View Details Button --}}
                                    <button class="btn btn-primary btn-sm me-2" data-bs-toggle="modal"
                                        data-bs-target="#viewDetailsModalUrec">
                                        View Details
                                    </button>

                                    {{-- See Schedule Button --}}
                                    <button class="btn btn-outline-success btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#seeScheduleModalUrec">
                                        See Schedule
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    {{-- View Details Modal --}}
                    <div class="modal fade" id="viewDetailsModalUrec" tabindex="-1"
                        aria-labelledby="viewDetailsModalLabelUrec" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="viewDetailsModalLabelUrec">Proposal Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Title:</strong> AI in Healthcare</p>
                                    <p><strong>Researcher:</strong> John Doe</p>
                                    <p><strong>Scheduled Date:</strong> Nov 25, 2024</p>
                                    <p><strong>Description:</strong> This research explores the potential of artificial
                                        intelligence in transforming the healthcare industry.</p>
                                    {{-- Add more details as needed --}}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- See Schedule Modal --}}
                    <div class="modal fade" id="seeScheduleModalUrec" tabindex="-1"
                        aria-labelledby="seeScheduleModalLabelUrec" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="seeScheduleModalLabelUrec">Scheduled Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p><strong>Title:</strong> AI in Healthcare</p>
                                    <p><strong>Researcher:</strong> John Doe</p>
                                    <p><strong>Scheduled Date:</strong> Nov 25, 2024</p>
                                    <p><strong>Time:</strong> 10:00 AM</p>
                                    <p><strong>Venue:</strong> Room 101, Science Building</p>
                                </div>
                                <div class="modal-footer">
                                    {{-- Edit Schedule Button --}}
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#editScheduleModalUrec">
                                        Edit Schedule
                                    </button>
                                    {{-- Close Button --}}
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Edit Schedule Modal --}}
                    <div class="modal fade" id="editScheduleModalUrec" tabindex="-1"
                        aria-labelledby="editScheduleModalLabelUrec" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editScheduleModalLabelUrec">Edit Schedule</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="scheduleDateUrec" class="form-label">Date</label>
                                            <input type="date" class="form-control" id="scheduleDateUrec"
                                                value="2024-11-25">
                                        </div>
                                        <div class="mb-3">
                                            <label for="scheduleTimeUrec" class="form-label">Time</label>
                                            <input type="time" class="form-control" id="scheduleTimeUrec"
                                                value="10:00">
                                        </div>
                                        <div class="mb-3">
                                            <label for="scheduleVenueUrec" class="form-label">Venue</label>
                                            <input type="text" class="form-control" id="scheduleVenueUrec"
                                                value="Room 101, Science Building">
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-success">Save Changes</button>
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
</div>
