<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
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
                        class="active btn btn-light text-dark d-flex align-items-center mb-2">
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
                    <a href="{{ route('director-quarterly-updates') }}"
                        class="btn btn-light text-dark d-flex align-items-center mb-2">
                        <i class="bi bi-clock-history me-2"></i>
                        Quarterly Updates
                    </a>
                </li>

                {{-- Terminal Reports --}}
                <li class="nav-item">
                    <a href="{{ route('director-terminal-reports') }}"
                        class="btn btn-light text-dark d-flex align-items-center mb-2">
                        <i class="bi bi-journal-check me-2"></i>
                        Terminal Reports
                    </a>
                </li>

                <hr class="mt-0 mb-0">

                {{-- Manage Profiles --}}
                <li class="nav-item">
                    <a href="{{ route('director-manage-profiles') }}"
                        class="btn btn-light text-dark d-flex align-items-center mb-2">
                        <i class="bi bi-person-lines-fill me-2"></i>
                        Manage Profiles
                    </a>
                </li>
            </ul>
        </nav>

        {{-- MAIN CONTENT --}}
        <main class="container-fluid p-4">
            <ul class="nav nav-tabs mb-4" id="proposalTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                        type="button" role="tab" aria-controls="review" aria-selected="true">
                        To Review
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="revision-tab" data-bs-toggle="tab" data-bs-target="#revision"
                        type="button" role="tab" aria-controls="revision" aria-selected="false">
                        Need Revision
                    </button>
                </li>
            </ul>

            {{-- Tab Content --}}
            <div class="tab-content" id="proposalTabsContent">
                {{-- Review Tab Pane --}}
                <div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
                    <div>
                        <h2 class="mb-4">Proposals Pending Review</h2>
                        <div class="table-responsive">
                            {{-- Proposals Table --}}
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Researcher</th>
                                        <th>Submission Date</th>
                                        <th>Type</th> {{-- Newly Submitted or Resubmitted --}}
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Proposal Row 1 --}}
                                    <tr>
                                        <td>1</td>
                                        <td>AI in Healthcare</td>
                                        <td>John Doe</td>
                                        <td>Nov 20, 2024</td>
                                        <td>New Submission</td> {{-- Type of Submission --}}
                                        <td>
                                            {{-- View Details Button --}}
                                            <button class="btn btn-outline-primary btn-sm me-2" data-bs-toggle="modal"
                                                data-bs-target="#viewDetailsModal1">
                                                View Details
                                            </button>
                                            {{-- Review Button --}}
                                            <button class="btn btn-warning btn-sm text-white me-2" data-bs-toggle="modal"
                                                data-bs-target="#submitReviewModal1">
                                                Review
                                            </button>
                                            {{-- Comment Button --}}
                                            <a class="text-muted" data-bs-toggle="modal"
                                                data-bs-target="#commentsModal1">
                                                <i class="bi-chat-dots"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                    {{-- View Details Modal --}}
                    <div class="modal fade" id="viewDetailsModal1" tabindex="-1"
                        aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="viewDetailsModalLabel">Proposal Details</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{-- Proposal Details --}}
                                    <div class="mb-3">
                                        <h6>Proposal Details:</h6>
                                        <p><strong>Title:</strong> AI in Healthcare</p>
                                        <p><strong>Researcher:</strong> John Doe</p>
                                        <p><strong>Submission Date:</strong> Nov 20, 2024</p>
                                        <p><strong>Category:</strong> Healthcare & Technology</p>
                                        <p><strong>Description:</strong> This proposal explores the applications of AI
                                            in improving healthcare efficiency and patient outcomes.</p>
                                        <p><strong>Download File:</strong> <a href="#"
                                                class="btn btn-link">Download Proposal</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Comments Modal --}}
                    <div class="modal fade" id="commentsModal1" tabindex="-1" aria-labelledby="commentsModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-primary" id="commentsModalLabel">Comments</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{-- Add Comment Section --}}
                                    <div class="mb-3">
                                        <label for="commentText1" class="form-label">Add a Comment:</label>
                                        <textarea id="commentText1" class="form-control" rows="3" placeholder="Write your comment..."></textarea>
                                    </div>
                                    <button type="button" class="btn btn-primary btn-sm">Submit Comment</button>
                                    <hr>
                                    {{-- Existing Comments --}}
                                    <h6 class="text-secondary">Previous Comments</h6>
                                    <div>
                                        <p><strong>REC:</strong> Please provide more detail about the AI algorithm used.
                                        </p>
                                        <p><strong>Researcher:</strong> I have included additional details in the
                                            methodology section.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Submit Review Modal --}}
                    <div class="modal fade" id="submitReviewModal1" tabindex="-1"
                        aria-labelledby="submitReviewModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="submitReviewModalLabel">Submit Review</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {{-- Proposal Details --}}
                                    <div class="mb-3">
                                        <p><strong>Title:</strong> AI in Healthcare</p>
                                        <p><strong>Researcher:</strong> John Doe</p>
                                        <p><strong>Submission Date:</strong> Nov 20, 2024</p>
                                    </div>

                                    {{-- Review Form --}}
                                    <form>
                                        <div class="mb-3">
                                            <label for="reviewDecision1" class="form-label">Decision</label>
                                            <select class="form-select" id="reviewDecision1">
                                                <option value="approve">Approve</option>
                                                <option value="revise">Need Revision</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="reviewFeedback1" class="form-label">Feedback</label>
                                            <textarea class="form-control" id="reviewFeedback1" rows="3" placeholder="Provide your feedback here..."></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-success">Submit Review</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Need Revision Tab Pane --}}
                <div class="tab-pane fade" id="revision" role="tabpanel" aria-labelledby="revision-tab">
                    <h2 class="mb-4">Proposal Require Revision</h2>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Researcher</th>
                                <th>Resubmission Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>AI in Healthcare</td>
                                <td>John Doe</td>
                                <td>Nov 30, 2024</td>
                                <td class="d-flex align-items-center">
                                    <button class="btn btn-primary btn-sm me-2" data-bs-toggle="modal"
                                        data-bs-target="#viewDetailsModal">
                                        View Details
                                    </button>
                                    <a class="text-muted" data-bs-toggle="modal" data-bs-target="#commentsModal">
                                        <i class="bi bi-chat-dots"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- View Details Modal --}}
                <div class="modal fade" id="viewDetailsModal" tabindex="-1" aria-labelledby="viewDetailsModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="viewDetailsModalLabel">Proposal Details</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p><strong>Title:</strong> AI in Healthcare</p>
                                <p><strong>Researcher:</strong> John Doe</p>
                                <p><strong>Resubmission Date:</strong> Nov 30, 2024</p>
                                <p><strong>Category:</strong> Technology</p>
                                <a href="#" class="btn btn-primary">Download File</a>
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
                                {{-- Add Comment Section --}}
                                <div class="mb-3">
                                    <label for="commentText" class="form-label">Add a Comment:</label>
                                    <textarea id="commentText" class="form-control" rows="3" placeholder="Write your comment..."></textarea>
                                </div>
                                <button type="button" class="btn btn-primary btn-sm">Submit Comment</button>
                                <hr>
                                {{-- Existing Comments --}}
                                <h6 class="text-secondary">Previous Comments</h6>
                                <div>
                                    <p><strong>REC:</strong> Please ensure the methodology is detailed and clear.
                                        {{-- Feedback from REC --}}</p>
                                    <p><strong>Researcher:</strong> I have updated the methodology section as per your
                                        request. {{-- Response from Researcher --}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>



    </div>
</div>
