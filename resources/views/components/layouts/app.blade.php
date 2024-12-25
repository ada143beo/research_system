<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Research Development Services' }}</title>
        <link rel="icon" href="{{ asset("assets/images/RDS_Logo.png")}}"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <!--<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center">
                    <img src="{{ asset('assets/images/RDS_Logo.png') }}" alt="RDS Logo" width="30" class="me-2">
                    Research and Development Services
                </a>
                <div class="ms-auto d-flex align-items-center">
                    <label for="role" class="text-white me-2">Login as:</label>
                    <select class="form-select bg-dark text-white border-light" style="width: auto;">
                       <option value="faculty">Faculty</option>
                        <option value="tec">REC</option>
                        <option value="tec">TEC</option>
                        <option value="urec">UREC</option>
                        <option value="research_director">Research Director</option>
                    </select>
                </div>
            </div>
        </nav>-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="{{ asset('assets/images/RDS_Logo.png') }}" alt="RDS Logo" width="30" class="me-2">
                    Research and Development Services
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="ms-auto d-flex align-items-center">
                        <label for="role" class="text-white me-2">Login as:</label>
                        <select class="form-select bg-dark text-white border-light" style="width: auto;">
                            <!--<option value="rec">Faculty</option>-->
                            <option value="research_director">Research Director</option>
                            <option value="rec">REC</option>
                            <option value="tec">TEC</option>
                            <option value="urec">UREC</option>
                            <option value="research_director">Research Director</option>
                        </select>
                    </div>
                </div>
            </div>
        </nav>
        {{ $slot }}
    </body>
</html>
