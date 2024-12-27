<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <main class="container-fluid p-4">
        {{-- Schedule for Presentation to UREC --}}
        <h3 class="text-center mb-4 fw-bold">Presentation to UREC Schedule</h3>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Proposal Title</th>
                        <th>Presenter</th>
                        <th>Schedule</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Satellite Mapping of Coastal Development</td>
                        <td>John Doe</td>
                        <td>January 20, 2024<br>9:00 AM<br>Conference Room 1</td>
                        <td>
                            {{-- View Info Button --}}
                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#scheduleInfoModal">
                                View Info
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Modal for Schedule Info --}}
        <div class="modal fade" id="scheduleInfoModal" tabindex="-1" aria-labelledby="scheduleInfoModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="scheduleInfoModalLabel">Presentation Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6><strong>Proposal Title:</strong></h6>
                        <p>Satellite Mapping of Coastal Development</p>
                        <h6><strong>Category:</strong></h6>
                        <p>Environmental Science</p>
                        <h6><strong>Presenter:</strong></h6>
                        <p>John Doe</p>
                        <h6><strong>Schedule:</strong></h6>
                        <p>Date: January 20, 2024</p>
                        <p>Time: 9:00 AM</p>
                        <p>Venue: Conference Room 1</p>
                        <h6><strong>Proposal File:</strong></h6>
                        <a href="files/sample.pdf" download class="btn btn-success btn-sm">
                            Download Proposal
                        </a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

</div>
