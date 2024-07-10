<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Parkir<span>Kampus</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto d-flex align-items-center">
                <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="/parkir-locations" class="nav-link">Parkir Locations</a></li>
                <li class="nav-item"><a href="/parkir-services" class="nav-link">Parking Services</a></li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="{{ route('login') }}" class="nav link btn btn-secondary px-3">Sign In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
