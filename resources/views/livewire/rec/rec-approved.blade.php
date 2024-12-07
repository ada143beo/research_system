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
                            <a href="{{ route('rec') }}"
                                class="btn btn-light text-dark d-flex align-items-center mb-2">
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
                                class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-exclamation-circle me-2"></i>
                                For Revisions
                            </a>
                        </li>
                        {{-- Approved Proposals --}}
                        <li class="nav-item">
                            <a href="{{ route('rec-approved') }}"
                                class="btn btn-light text-dark active d-flex align-items-center mb-2">
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
            {{-- Page Header --}}
            <h2 class="mb-4">Approved Proposals</h2>

            {{-- Approved Proposals Table --}}
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Researcher</th>
                        <th>Approval Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Data Privacy in Education</td>
                        <td>Mary Johnson</td>
                        <td>Nov 24, 2024</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>IoT in Smart Cities</td>
                        <td>Chris Evans</td>
                        <td>Nov 23, 2024</td>
                    </tr>
                </tbody>
            </table>
        </main>
    </div>
</div>
