<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicons -->


    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="admin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="admin/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="admin/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="admin/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="admin/vendor/simple-datatables/style.css" rel="stylesheet">

    <title>
        @yield('title')
    </title>

    {{-- <!-- Main CSS File --> --}}
    <link href="admin/css/style.css" rel="stylesheet">

    {{-- Table --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

</head>


<body>

    <div class="headerrrrrr">

        <header id="header" class="header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="logo d-flex align-items-center">
                    <img src="{{ asset('logo.png') }}" alt="product">
                    <span class="d-none d-lg-block">Admin</span>
                </a>
                <i class="bi bi-list toggle-sidebar-btn collapseButtononHeader"></i>
            </div><!-- End Logo -->

            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#"
                            data-bs-toggle="dropdown">
                            <img src="{{ asset('img/noimgeplaceholder.jpg') }}" alt="Profile" class="rounded-circle">
                            <span class="d-none d-md-block dropdown-toggle ps-2">name</span>
                            {{-- <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span> --}}
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                            {{-- <li class="dropdown-header">
                                <h6>{{ Auth::user()->name }}</h6>
                            </li> --}}
                            <li class="dropdown-header">
                                <h6>sad</h6>
                            </li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="dropdown-item d-flex align-items-center" type="submit"><i
                                            class="bi bi-box-arrow-right"></i><span>Sign Out</span></button>
                                </form>
                            </li>

                        </ul><!-- End Profile Dropdown Items -->
                    </li><!-- End Profile Nav -->

                </ul>
            </nav><!-- End Icons Navigation -->

        </header><!-- End Header -->

        <!-- ======= Sidebar ======= -->
        <aside id="sidebar" class="sidebar">
            <ul class="sidebar-nav" id="sidebar-nav">
                
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/admin-progress">
                        <i class="bi bi-bar-chart"></i>
                        <span>Progress</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="/admin-requirements">
                        <i class="bi bi-clipboard-check"></i>
                        <span>Requirements</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="/admin-feedbacks">
                        <i class="bi bi-chat-dots"></i>
                        <span>Feedbacks</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="/admin-project-details">
                        <i class="bi bi-gear"></i>
                        <span>Project Details</span>
                    </a>
                </li>

            </ul>

        </aside>

    </div>
<!-- End Sidebar-->

    @yield('content')



    <!-- Vendor JS Files -->
    <script src="admin/vendor/apexcharts/apexcharts.min.js" defer></script>
    <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js" defer></script>
    <script src="admin/vendor/chart.js/chart.min.js" defer></script>
    <script src="admin/vendor/echarts/echarts.min.js" defer></script>
    <script src="admin/vendor/quill/quill.min.js" defer></script>
    <script src="admin/vendor/simple-datatables/simple-datatables.js" defer></script>
    <script src="admin/vendor/tinymce/tinymce.min.js" defer></script>
    <script src="admin/vendor/php-email-form/validate.js" defer></script>
    <script src="admin/js/main.js" defer></script>
    <script src="admin/js/jquery.min.js" defer></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


</body>
