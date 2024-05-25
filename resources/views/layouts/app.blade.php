<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* .navbar-toggler {
            border: none;
            background-color: transparent;
            cursor: pointer;
        }

        .navbar-toggler i {
            color: white;
            font-size: 1.5rem;
        }

        .navbar-toggler:focus {
            outline: none;
        } */

        .sidebar {
            min-height: 100vh;
        }

        /* .hidden {
            display: none;
        } */
    </style>
</head>
<body>
    <div class="container-fluid">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-light bg-light col-md-12">
            <a class="navbar-brand" href="#">
                <img src="{{asset('gambar/kucin.jpg')}}" alt="Logo" width="30" height="30" class="d-inline-block align-top">
                Ihksan
            </a>
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block bg-dark sidebar" id="sidebar">
                <div class="sidebar-sticky">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                        SDM PT. INDOMARET
                    </h6>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="#">
                                <i class="fas fa-users mr-2"></i>Data Karyawan
                            </a>
                        </li>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="#">
                                <i class="fas fa-graduation-cap mr-2"></i>Pendidikan
                            </a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="#">
                                <i class="fas fa-money-bill-wave mr-2"></i>Penggajian
                            </a>
                        </li>
                        <li class="nav-item mb-3">
                            <a class="nav-link" href="#">
                                <i class="fas fa-users mr-2"></i>Admin
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Main content -->
            <main class="col-md-10 ml-sm-auto col-lg-10 px-4">
                <!-- Your main content goes here -->
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        
    </script>
</body>
</html>
