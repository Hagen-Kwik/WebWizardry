<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicons -->
    <link rel="icon" href="logo.png" type="image/png">


    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <title>My Projects</title>

    {{-- <!-- Main CSS File --> --}}
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

    {{-- Table --}}
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />


</head>


<body class="toggle-sidebar">

    <div class="headerrrrrr">
        <header id="header" class="header fixed-top d-flex align-items-center">

            <div class="d-flex align-items-center justify-content-between">
                <a href="#" class="logo d-flex align-items-center">
                    <img src="{{ asset('logo.png') }}" alt="product">
                    <span class="d-none d-lg-block">Dashboard</span>
                </a>
            </div><!-- End Logo -->

            <nav class="header-nav ms-auto">
                <ul class="d-flex align-items-center">

                    <li class="nav-item dropdown pe-3">

                        <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                            <span class="d-none d-md-block dropdown-toggle ps-2">{{ $username }}</span>
                            {{-- <span class="d-none d-md-block dropdown-toggle ps-2">{{ Auth::user()->name }}</span> --}}
                        </a><!-- End Profile Iamge Icon -->

                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">

                            <li class="dropdown-header">
                                <h6>{{ $username }}</h6>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                            <li>
                                <a href="{{ route('dashboard') }}"><button class="dropdown-item d-flex align-items-center" type="submit">See My
                                        Projects</button></a>
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
    </div>


    {{-- MAIN CODE --}}

    <main id="main" class="main">
        <div class="pagetitle">
            <div class="row justify-content-between">
                <div class="col">
                    <h2>Order your Project!</h2>
                </div>
            </div>
        </div><!-- End Page Title -->

        <form action="{{ route('order.project') }}" method="post">
            @csrf
            <div class="row aBox mt-3">
                <h3>Selected Project: </h3>
                <div class="col-lg-12">
                    {{-- Dropdown with pricing options --}}
                    <select id="pricingDropdown" name="pricing_id" class="form-control">
                        <option value="">Select Pricing</option>
                        @foreach ($pricing as $price)
                            <option value="{{ $price->id }}">{{ $price->pages }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Display pricing details based on the selected option --}}
                <div id="pricingDetails" class="col-lg-12">
                    {{-- Pricing details will be dynamically updated here --}}
                </div>
            </div>

            <div class="row aBox mt-3">
                <h3>Project Title: </h3>
                <div class="col-lg-12">
                    <input type="text" class="form-control" id="projectTitle" name="project_name" placeholder="Enter Project Title" required>
                </div>
            </div>


            <div class="mt-3">
                <div class="aBox row order">
                    <h2 class="mb-4">Requirements:</h2>

                    <div class="col-lg-12" id="requirements-container">
                        <div class="requirement" data-id="1">
                            <div class="mb-3">
                                <label for="title_1" class="form-label">Requirement Title 1</label>
                                <input type="text" class="form-control" id="title_1" name="requirements[1][title]" required>
                            </div>
                            <div class="mb-3">
                                <label for="details_1" class="form-label">Requirement Details 1</label>
                                <textarea class="form-control" id="details_1" name="requirements[1][details]" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <button id="addRequirement" class="btn btn-primary">+ Add Requirement</button>
                    </div>
                </div>
            </div>


            <div class="" style="margin-top: 5vh; text-align: center">
                <button class="btn btn-primary" type="submit">Submit Project</button>
            </div>
        </form>

    </main><!-- End #main -->
</body>


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
<script src="others-javascript.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
</script>
<script>
    document.getElementById('pricingDropdown').addEventListener('change', function() {
        // Get the selected pricing option
        var selectedOption = this.value;

        // Find the pricing details in the existing data
        var selectedPricing = @json($pricing->keyBy('id'));

        // Update the content of the pricing details div with the selected pricing data
        if (selectedOption in selectedPricing) {
            var pricingDetails = selectedPricing[selectedOption];
            document.getElementById('pricingDetails').innerHTML = `
            <br>
                    <h5>Details:</h5>
            <p>Pages: ${pricingDetails.pages}</p>
            <p>Assets: ${pricingDetails.assets}</p>
            <p>Maintenance: ${pricingDetails.maintenance}</p>
            <p>Add-ons: ${pricingDetails.add_ons}</p>
            <p>Hosting: ${pricingDetails.hosting}</p>
            <p>Price: ${pricingDetails.price}</p>
        `;
        } else {
            // Clear the pricing details if no option is selected or if the data is not found
            document.getElementById('pricingDetails').innerHTML = '';
        }
    });
</script>
