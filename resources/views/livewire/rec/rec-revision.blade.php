<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
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
                                class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-pencil-square me-2"></i>
                                To Review
                            </a>
                        </li>
                        {{-- Require Revisions --}}
                        <li class="nav-item">
                            <a href="{{ route('rec-to-revise') }}"
                                class="active btn btn-light text-dark d-flex align-items-center mb-2">
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
        <div class="container-fluid p-4">
            {{-- Resubmitted Proposals with Comment Feature --}}
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
                            <button class="btn btn-primary btn-sm me-2" data-bs-toggle="modal" data-bs-target="#viewDetailsModal">
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
        <div class="modal fade" id="viewDetailsModal" tabindex="-1" aria-labelledby="viewDetailsModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="viewDetailsModalLabel">Proposal Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
        <div class="modal fade" id="commentsModal" tabindex="-1" aria-labelledby="commentsModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary" id="commentsModalLabel">Comments</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                            <p><strong>REC:</strong> Please ensure the methodology is detailed and clear. {{-- Feedback from REC --}}</p>
                            <p><strong>Researcher:</strong> I have updated the methodology section as per your request. {{-- Response from Researcher --}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
