<div>
    {{-- The best athlete wants his opponent at his best. --}}
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
                        class="active btn btn-light text-dark d-flex align-items-center mb-2">
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
            <h3 class="text-center mb-4 fw-bold">Set Contact Status</h3>

            {{-- Contract Status Table --}}
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Researcher</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Sample Research Title</td>
                            <td>John Doe</td>
                            <td>
                                {{-- Set Status Button --}}
                                <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#setStatusModal">
                                    Set Status
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>


            {{-- Modal for Setting Status --}}
            <div class="modal fade" id="setStatusModal" tabindex="-1" aria-labelledby="setStatusModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="setStatusModalLabel">Set Contract Status</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{-- Form for Setting Status --}}
                            <form id="setStatusForm">
                                {{-- Status Selection --}}
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select" id="status" required>
                                        <option value="" selected disabled>Select Status</option>
                                        <option value="Signed">Signed</option>
                                    </select>
                                </div>

                                {{-- Start Date --}}
                                <div class="mb-3">
                                    <label for="startDate" class="form-label">Start Date</label>
                                    <input type="date" class="form-control" id="startDate" required>
                                </div>

                                {{-- Estimated End Date --}}
                                <div class="mb-3">
                                    <label for="endDate" class="form-label">Estimated End Date</label>
                                    <input type="date" class="form-control" id="endDate" required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            {{-- Save Button --}}
                            <button type="button" class="btn btn-success" id="saveStatusButton">
                                Save
                            </button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>


    </div>
</div>
