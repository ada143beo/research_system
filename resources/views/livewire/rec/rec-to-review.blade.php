<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="d-flex">
        {{-- Sidebar navigation --}}
        <nav class="bg-light shadow-sm vh-100 p-3 mt-0" style="width: 250px;">
            <ul class="nav flex-column">
                {{-- Home Section --}}
                <li class="nav-item">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('rec') }}" class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-house-door me-2"></i>
                                Dashboard
                            </a>
                        </li>
                    </ul>
                </li>

                {{-- Proposals Section --}}
                <li class="nav-item">
                    <ul class="nav flex-column">
                        {{-- To Review Proposals --}}
                        <li class="nav-item">
                            <a href="{{ route('rec-to-review') }}"
                                class="active btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-pencil-square me-2"></i>
                                To Review
                            </a>
                        </li>
                        {{-- Require Revisions --}}
                        <li class="nav-item">
                            <a href="{{ route('rec-to-revise') }}"
                                class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-exclamation-circle me-2"></i>
                                For Revisions
                            </a>
                        </li>
                        {{-- Approved Proposals --}}
                        <li class="nav-item">
                            <a href="{{ route('rec-approved') }}"
                                class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-check-circle me-2"></i>
                                Approved
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        {{-- Main Content --}}
        <main class="container-fluid p-4">
            {{-- Proposals Pending Review --}}
            <div>
                <h2 class="mb-4">Proposals Pending Review</h2>

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
                                <button class="btn btn-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#viewDetailsModal1">
                                    View Details
                                </button>
                                {{-- Review Button --}}
                                <button class="btn btn-warning btn-sm me-2" data-bs-toggle="modal" data-bs-target="#submitReviewModal1">
                                    Review
                                </button>
                                {{-- Comment Button --}}
                                <a class="text-muted" data-bs-toggle="modal" data-bs-target="#commentsModal1">
                                    <i class="bi-chat-dots"></i>
                                </a>
                            </td>
                        </tr>
                        {{-- Add more rows as needed --}}
                    </tbody>
                </table>
            </div>

            {{-- View Details Modal --}}
            <div class="modal fade" id="viewDetailsModal1" tabindex="-1" aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="viewDetailsModalLabel">Proposal Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{-- Proposal Details --}}
                            <div class="mb-3">
                                <h6>Proposal Details:</h6>
                                <p><strong>Title:</strong> AI in Healthcare</p>
                                <p><strong>Researcher:</strong> John Doe</p>
                                <p><strong>Submission Date:</strong> Nov 20, 2024</p>
                                <p><strong>Category:</strong> Healthcare & Technology</p>
                                <p><strong>Description:</strong> This proposal explores the applications of AI in improving healthcare efficiency and patient outcomes.</p>
                                <p><strong>Download File:</strong> <a href="#" class="btn btn-link">Download Proposal</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Comments Modal --}}
            <div class="modal fade" id="commentsModal1" tabindex="-1" aria-labelledby="commentsModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-primary" id="commentsModalLabel">Comments</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                <p><strong>REC:</strong> Please provide more detail about the AI algorithm used.</p>
                                <p><strong>Researcher:</strong> I have included additional details in the methodology section.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Submit Review Modal --}}
            <div class="modal fade" id="submitReviewModal1" tabindex="-1" aria-labelledby="submitReviewModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="submitReviewModalLabel">Submit Review</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
        </main>
    </div>
</div>
