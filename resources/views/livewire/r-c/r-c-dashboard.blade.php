<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="d-flex">
        {{-- Sidebar navigation --}}
        <nav class="bg-light shadow-sm vh-100 p-3 mt-0" style="width: 260px">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('rc-dashboard') }}"
                                class="active btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-house-door me-2"></i>
                                Dashboard
                            </a>
                        </li>
                    </ul>
                </li>
                <hr class="mt-0 mb-0">
                {{-- Format Compliance --}}
                <li class="nav-item">
                    <a href="{{ route('rc-monitor') }}"
                        class="btn btn-light text-dark d-flex align-items-center mb-2">
                        <i class="bi bi-file-check me-2"></i>
                        Monitor Research
                    </a>
                </li>
                {{-- Set Schedule --}}
                <li class="nav-item">
                    <a href="{{ route('rc-tasks') }}"
                        class="btn btn-light text-dark d-flex align-items-center mb-2">
                        <i class="bi bi-calendar me-2"></i>
                        Tasks/Reminders
                    </a>
                </li>
                {{-- Approved Proposals --}}
                <li class="nav-item">
                    <a href="{{ route('rc-reports') }}"
                        class="btn btn-light text-dark d-flex align-items-center mb-2">
                        <i class="bi bi-check-circle me-2"></i>
                        Reports
                    </a>
                </li>
                <hr class="mt-0 mb-0">
            </ul>
        </nav>

        {{-- Main Content --}}
        <main class="container-fluid p-4">
              <!-- Main Content -->
              <div class="container mt-5">



                  <!-- Task Reminders -->
                  <div class="col-lg-6">
                    <div class="card dashboard-card">
                      <div class="card-header">
                        Task Reminders
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Upcoming Tasks</h5>
                        <ul class="list-group">
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            Submit project progress report
                            <span class="badge bg-info rounded-pill">Due in 2 days</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            Review research proposal
                            <span class="badge bg-info rounded-pill">Due in 5 days</span>
                          </li>
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                            Schedule meeting with researchers
                            <span class="badge bg-info rounded-pill">Due in 7 days</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Researcher Support Section -->
                <div class="row mt-4">
                  <div class="col-lg-12">
                    <div class="card dashboard-card">
                      <div class="card-header">
                        Researcher Support
                      </div>
                      <div class="card-body">
                        <h5 class="card-title">Support Resources</h5>
                        <p>Ensure that researchers have access to resources like funding guidelines, ethical review processes, and research tools.</p>
                        <ul class="list-group">
                          <li class="list-group-item">Funding Opportunities</li>
                          <li class="list-group-item">Ethics Committee Contacts</li>
                          <li class="list-group-item">Research Toolkits</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Research Monitoring, Tasks/Reminders, Reports Sections -->
                <div class="row mt-4">
                  <div class="col-lg-12">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Navigation</h5>
                        <ul class="nav nav-pills">
                          <li class="nav-item">
                            <a class="nav-link active" id="research-monitoring" data-bs-toggle="pill" href="#monitoring">Research Monitoring</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="tasks-reminders" data-bs-toggle="pill" href="#reminders">Tasks/Reminders</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" id="reports" data-bs-toggle="pill" href="#reports-tab">Reports</a>
                          </li>
                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content mt-3">
                          <div class="tab-pane fade show active" id="monitoring">
                            <h6>Research Monitoring</h6>
                            <p>Monitor ongoing research progress, track deadlines, and ensure that all projects meet milestones.</p>
                          </div>
                          <div class="tab-pane fade" id="reminders">
                            <h6>Tasks & Reminders</h6>
                            <p>View and manage upcoming deadlines, tasks, and reminders for various research activities.</p>
                          </div>
                          <div class="tab-pane fade" id="reports-tab">
                            <h6>Reports</h6>
                            <p>Generate and view detailed reports on project progress, task completion, and research output.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
        </main>
    </div>

</div>
