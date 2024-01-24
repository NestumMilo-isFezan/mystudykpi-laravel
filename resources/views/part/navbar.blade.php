{{-- Navbar --}}
<nav class="navbar sticky-top navbar-expand-lg bg-dark-subtle py-2 shadow-sm">
    <div class="container">
        <div class="me-2">
            <div class="d-inline-block me-2">
                <i class="fa-solid fa-book fs-3"></i>
            </div>
            <span class="navbar-brand mb-0 h1" style="font-family: 'Outfit'; font-size: 1.3rem; font-weight: 800;">My StudyKPI</span>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ms-auto text-center pt-1">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item d-grid pb-2 px-1">
                    <button class="btn" style="--bs-btn-bg: #E91E63; --bs-btn-hover-bg: #C2185B;" data-bs-toggle="modal" data-bs-target="#loginmodal">Log In</button>
                </li>
                <li class="nav-item d-grid pb-2 px-1">
                    <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#registermodal">Sign Up</button>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- End Navbar --}}
