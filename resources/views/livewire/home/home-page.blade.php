<div>
    {{-- Navbar  --}}
    {{--  <nav class="navbar navbar-expand-lg bg-body-tertairy sticky-top"> --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('assets/images/RDS_Logo.png') }}" alt="RDS Logo"
                    style="height: 30px; margin-right: 10px;">
                Research and Development Services
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav nav-pills ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#goals">Goals & Objectives</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#contact">Contact Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown" href="#"
                            role="button" aria-expanded="false">Account</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('register') }}">Register</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- BG IMAGE --}}
    <div id="home" class="bg-dark text-white d-flex flex-column justify-content-center align-items-center vh-100"
        style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://scontent.fmnl8-2.fna.fbcdn.net/v/t39.30808-6/240658803_120595200313817_3260013232506789257_n.png?_nc_cat=111&ccb=1-7&_nc_sid=cc71e4&_nc_ohc=qp1qoPWwVQUQ7kNvgG6F03u&_nc_zt=23&_nc_ht=scontent.fmnl8-2.fna&_nc_gid=AzvWXzJdkNk3k1M--0a1I6T&oh=00_AYDoMu0Nko3IHVlY5rscvTUkGTmOL1abHD97YqyciT1kxA&oe=67365C75'); background-size: cover; background-position: center;">
        <div class="text-center">
            <img src="{{ asset('assets/images/RDS_Logo.png') }}" alt="RDS Logo" class="mb-4"
                style="max-width: 200px;">
            <h1 class="fw-bold display-4">RESEARCH AND DEVELOPMENT SERVICES</h1>
            <p class="lead fs-4">The leading arm of CatSU's research and development program.</p>

            <a href="#about" class="btn btn-primary mt-3">Learn More</a>
        </div>
    </div>


    {{-- ABOUT --}}
    <section id="about" class="py-5 pb-3 bg-light">
        <div class="container">
            <div class="text-center mb-2">
                <h2 class="text-primary display-5 fw-bold">About Us</h2>
                <p class="text-muted mx-auto" style="max-width: 800px;">
                    The Catanduanes State University puts forth a Research and Development Services Program that is
                    responsive to the imperatives of instruction, extension, and production. Furthermore, the program
                    attunes itself to the broad social contexts of Philippine society and the Bicol Region, and the
                    particularities of an island environment that is Catanduanes, even while participating in the
                    dynamics of a globalizing world.
                </p>
                <p class="text-muted mx-auto" style="max-width: 800px;">
                    The Research and Development Services (R&DS) at Catanduanes State University (CatSU) plays a crucial
                    role in advancing research and development initiatives for the benefit of the university community
                    and the broader region of Catanduanes. Research and development are essential components of academic
                    institutions, contributing to knowledge creation, innovation, and the overall progress of a
                    community.
                </p>
            </div>
        </div>
    </section>


    {{-- GOALS --}}
    <section id="goals" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-2">
                <h2 class="display-5 fw-bold text-primary">Goals & Objectives</h2>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h4 class="fw-bold text-dark mb-4">Goals</h4>
                    <ul class="list-group list-group-flush shadow-sm">
                        <li class="list-group-item d-flex align-items-start bg-white mb-3">
                            <i class="bi bi-award-fill text-primary fs-3 me-3"></i>
                            <p>Strengthen the generation of relevant studies anchored on the local, regional, national,
                                and international development agenda, along with social, economic, environmental,
                                political, and cultural aspects.</p>
                        </li>
                        <li class="list-group-item d-flex align-items-start bg-white mb-3">
                            <i class="bi bi-lightbulb-fill text-primary fs-3 me-3"></i>
                            <p>Provide research, development, and innovation initiatives for faculty, non-teaching
                                personnel, and student researchers.</p>
                        </li>
                        <li class="list-group-item d-flex align-items-start bg-white mb-3">
                            <i class="bi bi-people-fill text-primary fs-3 me-3"></i>
                            <p>Foster collaborations with other industry partners, government and non-government
                                organizations, and other Higher Education Institutions (HEIs) to push the frontiers of
                                research, development, and innovation.</p>
                        </li>
                        <li class="list-group-item d-flex align-items-start bg-white mb-3">
                            <i class="bi bi-globe text-primary fs-3 me-3"></i>
                            <p>Enhance a globally recognized research University that promotes internationalization and
                                provides impact to the community.</p>
                        </li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <h4 class="fw-bold text-dark mb-4">Objectives</h4>
                    <ul class="list-group list-group-flush shadow-sm">
                        <li class="list-group-item d-flex align-items-start bg-white mb-3">
                            <i class="bi bi-graph-up-arrow text-primary fs-3 me-3"></i>
                            <p>Encourage disciplinary, interdisciplinary, and multidisciplinary research, development,
                                and innovation activities among researchers.</p>
                        </li>
                        <li class="list-group-item d-flex align-items-start bg-white mb-3">
                            <i class="bi bi-bar-chart-fill text-primary fs-3 me-3"></i>
                            <p>Develop research outputs to increase the number of presentations, patents, publications,
                                utilization, commercialization, and citation that brings greater impact in society.</p>
                        </li>
                        <li class="list-group-item d-flex align-items-start bg-white mb-3">
                            <i class="bi bi-people-fill text-primary fs-3 me-3"></i>
                            <p>Support researchers towards an increased quantity and quality of research outputs.</p>
                        </li>
                        <li class="list-group-item d-flex align-items-start bg-white mb-3">
                            <i class="bi bi-building text-primary fs-3 me-3"></i>
                            <p>Conduct training and development opportunities for researchers to capacitate and enhance
                                their knowledge and skills along research, development, and innovation.</p>
                        </li>
                        <li class="list-group-item d-flex align-items-start bg-white mb-3">
                            <i class="bi bi-hand-thumbs-up-fill text-primary fs-3 me-3"></i>
                            <p>Establish and strengthen partnerships with other government and non-government
                                organizations towards the attainment of the global, national, and local development
                                agenda.</p>
                        </li>
                        <li class="list-group-item d-flex align-items-start bg-white mb-3">
                            <i class="bi bi-geo-alt-fill text-primary fs-3 me-3"></i>
                            <p>Facilitate local, national, and international research collaborations among researchers.
                            </p>
                        </li>
                        <li class="list-group-item d-flex align-items-start bg-white mb-3">
                            <i class="bi bi-flag-fill text-primary fs-3 me-3"></i>
                            <p>Establish and strengthen research centers towards the promotion of Catandungan Island
                                identity.</p>
                        </li>
                        <li class="list-group-item d-flex align-items-start bg-white mb-3">
                            <i class="bi bi-journal-check text-primary fs-3 me-3"></i>
                            <p>Assess the impact of research and development activities for future directions.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTACT --}}
    <section id="contact" class="py-5 bg-light text-center">
        <div class="container">
            <h2 class="display-5 fw-bold text-primary">Contact Us</h2>
            <p class="lead mb-4">Reach out to CatSU-R&DS for more information:</p>

            <div class="row justify-content-center">
                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-geo-alt-fill text-primary fs-2 mb-2"></i>
                            <h5 class="fw-bold">Address</h5>
                            <p>Calatagan Proper, Virac, Catanduanes, Philippines</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-telephone-fill text-primary fs-2 mb-2"></i>
                            <h5 class="fw-bold">Phone</h5>
                            <p><a href="tel:+639854708449" class="text-decoration-none text-dark">0985 470 8449</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-lg-3 mb-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-envelope-fill text-primary fs-2 mb-2"></i>
                            <h5 class="fw-bold">Email</h5>
                            <p><a href="mailto:rds@catsu.edu.ph"
                                    class="text-decoration-none text-dark">rds@catsu.edu.ph</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <p class="lead mt-4">Connect with us on social media:</p>
            <a href="https://www.facebook.com/catsuresearchanddevelopmentservices" target="_blank"
                class="btn btn-primary btn-lg d-inline-flex align-items-center gap-2">
                <i class="bi bi-facebook fs-4"></i> Follow us on Facebook
            </a>
        </div>
    </section>


    {{-- FOOTER --}}
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-2">&copy; 2024 Catanduanes State University - Research & Development Services</p>
            <p>
                <a href="#home" class="text-white me-3">Home</a>
                <a href="#about" class="text-white me-3">About</a>
                <a href="#goals" class="text-white me-3">Goals & Objectives</a>
                <a href="#contact" class="text-white">Contact Us</a>
            </p>
        </div>
    </footer>
</div>
