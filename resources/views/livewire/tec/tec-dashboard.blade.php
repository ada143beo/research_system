<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <main class="container-fluid p-4">
        {{-- Panel Proposal Schedule --}}
        <h3 class="text-center mb-4 fw-bold">Panel Proposal Schedule</h3>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Presenter</th>
                        <th>Proposal Title</th>
                        <th>Schedule</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Exploring AI in Education</td>
                        <td>January 10, 2024<br>10:00 AM<br>Room 203</td>
                        <td>
                            {{-- View Info Button --}}
                            <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#proposalInfoModal1">
                                View Info
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        {{-- Proposal Info Modal--}}
        <div class="modal fade" id="proposalInfoModal1" tabindex="-1" aria-labelledby="proposalInfoModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="proposalInfoModalLabel1">Proposal Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h6><strong>Proposal Title:</strong></h6>
                        <p>Exploring AI in Education</p>
                        <h6><strong>Category:</strong></h6>
                        <p>Science and Technology</p>
                        <h6><strong>Presenter:</strong></h6>
                        <p>John Doe</p>
                        <h6><strong>Schedule:</strong></h6>
                        <p>Date: January 10, 2024</p>
                        <p>Time: 10:00 AM</p>
                        <p>Venue: Room 203</p>
                        <h6><strong>Abstract:</strong></h6>
                        <p>
                            This proposal explores the integration of artificial intelligence in educational
                            systems to improve learning outcomes and teaching efficiency. It examines current
                            AI applications and their potential benefits.
                        </p>
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
