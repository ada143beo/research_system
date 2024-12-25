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
            {{-- Tabs --}}
            <ul class="nav nav-tabs mb-4" id="contractTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="set-status-tab" data-bs-toggle="tab"
                        data-bs-target="#set-status" type="button" role="tab" aria-controls="set-status"
                        aria-selected="true">
                        Set Status
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="signed-proposals-tab" data-bs-toggle="tab"
                        data-bs-target="#signed-proposals" type="button" role="tab"
                        aria-controls="signed-proposals" aria-selected="false">
                        Signed Proposals
                    </button>
                </li>
            </ul>

            {{-- Tab Content --}}
            <div class="tab-content" id="contractTabsContent">
                {{-- Set Status Tab Pane --}}
                <div class="tab-pane fade show active" id="set-status" role="tabpanel" aria-labelledby="set-status-tab">
                    <div class="card shadow-sm p-3">
                        <h4 class="mb-3">Set Contract Status</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Proposal ID</th>
                                    <th>Title</th>
                                    <th>Quarters Required</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Example Data --}}
                                <tr>
                                    <td>12345</td>
                                    <td>Research on AI</td>
                                    <td>4</td>
                                    <td>
                                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#setStatusModal">
                                            Set Status
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Signed Proposals Tab Pane --}}
                <div class="tab-pane fade" id="signed-proposals" role="tabpanel" aria-labelledby="signed-proposals-tab">
                    <div class="card shadow-sm p-3">
                        <h4 class="mb-3">Signed Proposals</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Proposal ID</th>
                                    <th>Title</th>
                                    <th>Quarters Required</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Example Data --}}
                                <tr>
                                    <td>67890</td>
                                    <td>Data Analysis Study</td>
                                    <td>3</td>
                                    <td>
                                        <button class="btn btn-info btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#viewProposalModal">
                                            See Details
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{-- Modals --}}
            {{-- Set Status Modal --}}
            <div class="modal fade" id="setStatusModal" tabindex="-1" aria-labelledby="setStatusModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="setStatusModalLabel">Set Contract Status</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="proposalId" class="form-label">Proposal ID</label>
                                    <input type="text" class="form-control" id="proposalId" value="12345"
                                        readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="contractStatus" class="form-label">Status</label>
                                    <select class="form-select" id="contractStatus">
                                        <option value="signed">Signed</option>
                                        <option value="in-progress">In Progress</option>
                                        <option value="completed">Completed</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="quartersRequired" class="form-label">Quarters Required</label>
                                    <input type="number" class="form-control" id="quartersRequired" value="4"
                                        readonly>
                                </div>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            {{-- View Proposal Modal --}}
            <div class="modal fade" id="viewProposalModal" tabindex="-1" aria-labelledby="viewProposalModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="viewProposalModalLabel">Proposal Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p><strong>Proposal ID:</strong> 67890</p>
                            <p><strong>Title:</strong> Data Analysis Study</p>
                            <p><strong>Quarters Required:</strong> 3</p>
                            <p><strong>Status:</strong> Signed</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </div>
</div>
