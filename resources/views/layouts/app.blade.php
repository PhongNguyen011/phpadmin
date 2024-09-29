<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>@yield('title', 'Admin - Human Reources')</title>
</head>

<body>`
    <div class="row g-0">
        <!-- sidebar -->
        <div class="p-3 col-2 fixed text-white bg-dark">
            <a href="{{ route('home.index') }}" class="text-white text-decoration-none">
                <span class="fs-4">Admin Panel</span>
            </a>
            <hr />
            <ul class="nav flex-column">
                <li><a href="{{ route('home.index') }}" class="nav-link text-white">- Admin - Home</a></li>
                <li><a href="{{ route('employee.index') }}" class="nav-link text-white">- Admin - Employee</a>
                <li><a href="{{ route('department.index') }}" class="nav-link text-white">- Admin -
                        Department</a>
                <li><a href="{{ route('shift.index') }}" class="nav-link text-white">- Admin - Shift</a>
                <li><a href="{{ route('employeedepartmenthistory.index') }}" class="nav-link text-white">- Admin
                        -
                        Employee
                        Department History</a>
                </li>
                
            </ul>
        </div>
        <!-- sidebar -->
        <div class="col h-100">
            <nav class="p-3 shadow text-end">
                <span class="profile-font">Admin</span>
            </nav>
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://twitter.com/danielgarax">
                    Daniel Correa
                </a>
            </small>
        </div>
    </div>
    <!-- footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>