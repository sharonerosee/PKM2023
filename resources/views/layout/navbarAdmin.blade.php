<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="/" class="navbar-brand">
                <h3 class="m-0 text-primary">Rumah Yatim & Dhuafa KKMB</h3>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href=/admin class="nav-item nav-link">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Panti Asuhan</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="/adminp" class="dropdown-item">Pengurus</a>
                            <a href="/admin" class="dropdown-item">Anak Asuh</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Create</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="/admin/createp" class="dropdown-item">Pengurus</a>
                            <a href="/admin/create" class="dropdown-item">Anak Asuh</a>
                            
                        </div>
                    </div>
                    <a href="/bmi" class="nav-item nav-link">BMI</a>
                </div>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary rounded-pill px-3 d-none d-lg-block"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
            </div>
        </nav>
