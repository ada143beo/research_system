    {{-- Be like water. --}}
<div>
    {{-- SIDE BAR --}}
    <div class="d-flex">
        <nav class="bg-light shadow-sm vh-100 p-3 mt-0" style="width: 250px;">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <span class="btn btn-light fw-bold disabled d-flex align-items-center">HOME</span>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('faculty') }}" class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-house-door me-2" alt="Home Icon" width="20"></i>
                                Dashboard
                            </a>
                        </li>
                    </ul>
                </li>
                <hr>
                <li class="nav-item">
                    <span class="btn btn-light fw-bold disabled d-flex align-items-center">MY PROPOSALS</span>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('faculty-create-proposal') }}" class="btn btn-light active text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-pencil-square me-2" alt="Create Proposal Icon" width="20"></i>
                                Create
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('faculty-track-proposal') }}" class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-search me-2" alt="Track Proposal Icon" width="20"></i>
                                Track
                            </a>
                        </li>
                    </ul>
                </li>
                <hr>
                <li class="nav-item">
                    <span class="btn btn-light fw-bold disabled d-flex align-items-center">MY RESEARCH</span>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('faculty-ongoing-research') }}" class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-clock me-2" alt="Ongoing Research Icon" width="20"></i>
                                Ongoing
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('faculty-completed-research') }}" class="btn btn-light text-dark d-flex align-items-center mb-2">
                                <i class="bi bi-list-check me-2" alt="Completed Research Icon" width="20"></i>
                                Completed
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

        {{-- MAIN CONTENT --}}
        <main class="container-fluid p-4">
            <h3 class="text-center fw-bold mb-4">Create Research Proposal</h3>
            <form>
                <label for="research-title" class="form-label">Title</label>
                <input type="text" class="form-control mb-3" placeholder="Enter the title of your research">

                <label for="research-description" class="form-label">Description</label>
                <textarea class="form-control mb-3" rows="3"></textarea>

                <label for="research-category" class="form-label">Category</label>
                <select class="form-select mb-3">
                    <option disabled selected>Select a category</option>
                    <option>Science and Technology</option>
                    <option>Non-Science and Technology</option>
                </select>

                <label for="research-file" class="form-label mb-3">Upload Research Proposal</label>
                <input type="file" class="form-control" accept=".pdf,.doc">

                <button type="submit" class="btn btn-primary mt-3">Submit Proposal</button>
            </form>
        </main>
    </div>
</div>

